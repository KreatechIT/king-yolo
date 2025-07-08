<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebSeoResource\Pages;
use App\Filament\Resources\WebSeoResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class WebSeoResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Web Development';

    protected static ?int $navigationSort = 1;

    protected static ?string $label = 'FAQ';

    protected static ?string $pluralLabel = 'FAQs';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('category', 'web');
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
                        ->default('web'),

                ])
                    ->columns(1) // Optional: display inputs in two columns
                    ->columnSpanFull() // Make the card take full width
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')->sortable()->searchable(),
                TextColumn::make('sorting'),
                TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sorting', 'asc');
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
            'index' => Pages\ListWebSeos::route('/'),
            'create' => Pages\CreateWebSeo::route('/create'),
            'edit' => Pages\EditWebSeo::route('/{record}/edit'),
        ];
    }
}
