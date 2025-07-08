<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobOpeningResource\Pages;
use App\Filament\Resources\JobOpeningResource\RelationManagers;
use App\Models\JobOpening;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
class JobOpeningResource extends Resource
{
    protected static ?string $model = JobOpening::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'OTHERS';

    protected static ?int $navigationSort = 4;
    
    protected static ?string $label = 'Job Opening';
    
    protected static ?string $pluralLabel = 'Job Openings';

    protected $fillable = [
        'title',
        'designation',
        'location',
        'link',
        'description',
    ];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
    
                    Forms\Components\TextInput::make('designation')
                        ->required()
                        ->maxLength(255),
                    
                    Forms\Components\TextInput::make('location')
                        ->required()
                        ->maxLength(255),
    
                    Forms\Components\TextInput::make('link')
                        ->url()
                        ->nullable()
                        ->maxLength(255),
                    
                    RichEditor::make('description')
                        ->required() 
                        ->disableToolbarButtons([
                           'attachFiles'
                        ])
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
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
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
            'index' => Pages\ListJobOpenings::route('/'),
            'create' => Pages\CreateJobOpening::route('/create'),
            'edit' => Pages\EditJobOpening::route('/{record}/edit'),
        ];
    }
}
