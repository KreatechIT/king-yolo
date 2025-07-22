<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageFeedbackResource\Pages;
use App\Filament\Resources\HomepageFeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;


class HomepageFeedbackResource extends Resource
{
     protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationGroup = 'Feedbacks';

    protected static ?int $navigationSort = 0;

    protected static ?string $label = 'Homapage';

    protected static ?string $pluralLabel = 'Homapage';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('category', 'general');
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
                        ->default('kingbot'),
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
            'index' => Pages\ListHomepageFeedback::route('/'),
            'create' => Pages\CreateHomepageFeedback::route('/create'),
            'edit' => Pages\EditHomepageFeedback::route('/{record}/edit'),
        ];
    }
}
