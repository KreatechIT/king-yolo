<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KingTechFeedbackResource\Pages;
use App\Filament\Resources\KingTechFeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;


class KingTechFeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationGroup = 'Feedbacks';

    protected static ?int $navigationSort = 4;

    protected static ?string $label = 'KingTech';

    protected static ?string $pluralLabel = 'KingTech';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('category', 'kingtech');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('designation')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\Textarea::make('message')
                        ->label('Feedback Message')
                        ->required()
                        ->maxLength(2000),

                    Forms\Components\Select::make('rating')
                        ->options([
                            1 => '1',
                            2 => '2',
                            3 => '3',
                            4 => '4',
                            5 => '5',
                        ])
                        ->default(0)
                        ->label('Rating'),

                    Forms\Components\Hidden::make('category')
                        ->default('kingtech'),
                ])->columns(1)->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('designation')->sortable(),
                TextColumn::make('rating')->sortable(),
                TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
             ])->defaultSort('id', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKingTechFeedback::route('/'),
            'create' => Pages\CreateKingTechFeedback::route('/create'),
            'edit' => Pages\EditKingTechFeedback::route('/{record}/edit'),
        ];
    }
}
