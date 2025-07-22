<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Filament\Resources\SettingsResource\RelationManagers;
use App\Models\Settings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';


    protected static ?string $navigationGroup = 'OTHERS';

    protected static ?int $navigationSort = 6;

    protected static ?string $label = 'Setting';
    
    protected static ?string $pluralLabel = 'Settings';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('group', 'general-settings');
    }

    public static function form(Form $form): Form
    {
         return $form->schema([
            Forms\Components\Group::make()->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make('group')
                        ->default('general-settings')
                        ->readOnly(),
                    Forms\Components\TextInput::make('name')->readOnly()->label('Name'),
                    Forms\Components\Textarea::make('payload')->required()->label('Details'),

                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
         return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('payload')
                    ->label('Value')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        $plainText = strip_tags($state); // In case it contains HTML
                        return strlen($plainText) > 50 ? substr($plainText, 0, 50) . '...' : $plainText;
                    }),

                Tables\Columns\TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),
            ])
            ->filters([])
            ->actions([Tables\Actions\ViewAction::make(), Tables\Actions\EditAction::make()])
            ->bulkActions([])
            ->defaultSort('id', 'desc');
    }

    public static function canCreate(): bool
    {
        return false;
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\CustomEditSettings::route('/{record}/edit'),
        ];
    }
}
