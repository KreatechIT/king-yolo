<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KingPayFAQResource\Pages;
use App\Filament\Resources\KingPayFAQResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class KingPayFAQResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationGroup = 'FAQs';

    protected static ?int $navigationSort = 3;

    protected static ?string $label = 'KingPay';

    protected static ?string $pluralLabel = 'KingPay';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('category', 'kingpay');
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
                        ->default('kingpay'),
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
            'index' => Pages\ListKingPayFAQS::route('/'),
            'create' => Pages\CreateKingPayFAQ::route('/create'),
            'edit' => Pages\EditKingPayFAQ::route('/{record}/edit'),
        ];
    }
}
