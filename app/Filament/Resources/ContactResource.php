<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationGroup = 'OTHERS';

    protected static ?int $navigationSort = 3;

    protected static ?string $label = 'Contact';

    protected static ?string $pluralLabel = 'Contacts';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan('half'),
                    // Forms\Components\TextInput::make('email')
                    //     ->email()
                    //     ->required()
                    //     ->maxLength(255)
                    //     ->columnSpan('half'),
                    // Forms\Components\TextInput::make('phone')
                    //     ->required()
                    //     ->maxLength(255)
                    //     ->columnSpan('half'),
                    // Forms\Components\TextInput::make('subject')
                    //     ->required()
                    //     ->maxLength(255)
                    //     ->columnSpan('half'),
                    Forms\Components\Textarea::make('message')
                        ->required()
                        ->maxLength(1000)
                        ->columnSpan('full'),
                ])
                ->columns(2) // Optional: display inputs in two columns
                ->columnSpanFull() // Make the card take full width
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('phone')
                //     ->searchable(),
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('unread')
                ->query(fn (Builder $query): Builder => $query->where('is_read', false)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->before(function (Contact $record) {
                        $record->update(['is_read' => true]);
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]) 
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'view' => Pages\ViewContact::route('/{record}'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_read', false)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getNavigationBadge() > 0 ? 'danger' : null;
    }

    public static function canCreate(): bool
    {
       return false;
    }

   
}
