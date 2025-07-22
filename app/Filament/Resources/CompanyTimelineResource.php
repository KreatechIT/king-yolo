<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyTimelineResource\Pages;
use App\Models\CompanyTimeline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;


class CompanyTimelineResource extends Resource
{
    protected static ?string $model = CompanyTimeline::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'OTHERS';

    protected static ?int $navigationSort = 2;

    protected static ?string $label = 'Company Timeline';

    protected static ?string $pluralLabel = 'Company Timelines';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->columnSpan('full'),
                    Select::make('year')
                        ->label('Year')
                        ->options(
                            collect(range(date('Y'), date('Y') - 100))
                                ->mapWithKeys(fn($year) => [$year => $year])
                                ->toArray()
                        )
                        ->searchable()
                        ->required()
                        ->columnSpan('full'),
                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->columnSpan('full'),

                ])
                ->columns(2)
                ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Tiele')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('year')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCompanyTimelines::route('/'),
            'create' => Pages\CreateCompanyTimeline::route('/create'),
            'edit' => Pages\EditCompanyTimeline::route('/{record}/edit'),
        ];
    }
}
