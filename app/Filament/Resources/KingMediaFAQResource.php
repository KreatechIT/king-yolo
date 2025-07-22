<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KingMediaFAQResource\Pages;
use App\Filament\Resources\KingMediaFAQResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;


class KingMediaFAQResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationGroup = 'FAQs';

    protected static ?int $navigationSort = 2;

    protected static ?string $label = 'KingMedia';

    protected static ?string $pluralLabel = 'KingMedia';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('category', 'kingmedia');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\Textarea::make('question')
                        ->required()
                        ->maxLength(1000),
                    Forms\Components\Textarea::make('answer')
                        ->required()
                        ->maxLength(3000),
                    Forms\Components\TextInput::make('sorting')
                        ->required()
                        ->numeric(),
                    Forms\Components\Hidden::make('category')
                        ->default('kingmedia'),
                ])
                    ->columns(1)
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')->sortable()->searchable(),
                TextColumn::make('sorting')->sortable(),
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
            ])->defaultSort('sorting', 'asc');
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
            'index' => Pages\ListKingMediaFAQS::route('/'),
            'create' => Pages\CreateKingMediaFAQ::route('/create'),
            'edit' => Pages\EditKingMediaFAQ::route('/{record}/edit'),
        ];
    }
}
