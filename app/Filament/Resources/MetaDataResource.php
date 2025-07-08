<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetaDataResource\Pages;
use App\Filament\Resources\MetaDataResource\RelationManagers;
use App\Models\MetaData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetaDataResource extends Resource
{
    protected static ?string $model = MetaData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'OTHERS';

    protected static ?int $navigationSort = 2;

    protected static ?string $label = 'Meta Data';

    protected static ?string $pluralLabel = 'Meta Datas';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make([
                Forms\Components\TextInput::make('page')
                    ->readOnly()
                    ->maxLength(255)
                    ->columnSpan('full'),
               
                Forms\Components\Textarea::make('meta_title')
                    ->required()
                    ->columnSpan('full'),
                Forms\Components\Textarea::make('meta_description')
                    ->required()
                    ->columnSpan('full'),
                Forms\Components\Textarea::make('keywords')
                    ->nullable()
                    ->columnSpan('full')
            ])
            ->columns(2) // Optional: display inputs in two columns
            ->columnSpanFull() // Make the card take full width
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page')
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListMetaData::route('/'),
            'create' => Pages\CreateMetaData::route('/create'),
            'edit' => Pages\EditMetaData::route('/{record}/edit'),
        ];
    }
}
