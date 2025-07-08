<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhyChooseUsReseourceResource\Pages;
use App\Filament\Resources\WhyChooseUsReseourceResource\RelationManagers;
use App\Models\Settings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;


class WhyChooseUsReseourceResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationGroup = 'HOME';

    protected static ?string $label = 'Why Choose Us';

    protected static ?string $pluralLabel = 'Why Choose Us';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('group', 'why-choose-us');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Group::make()->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Select::make('group')
                        ->label('Group')
                        ->options(function () {
                            return Settings::query()->distinct()->pluck('group', 'group')->toArray();
                        })
                        ->searchable()
                        ->reactive(),

                    Forms\Components\TextInput::make('group')->label('New Group (optional)')->placeholder('Enter a new group name if it doesn\'t exist')->reactive(),

                    Forms\Components\TextInput::make('name')->required()->label('Name'),

                    // Payload type selection
                    Forms\Components\Select::make('payload_type')
                        ->label('Payload Type')
                        ->options([
                            'text' => 'Text',
                            'image' => 'Image',
                        ])
                        ->reactive(), // Make reactive to trigger conditional fields

                    // Conditional field for text input
                    Forms\Components\Textarea::make('payload')
                        ->label('Payload (Text)')
                        ->required(fn($get) => $get('payload_type') === 'text') // Required for text type
                        ->visible(fn($get) => $get('payload_type') === 'text') // Show only for text type
                        ->default(fn($get, $record) => $record && $record->payload_type === 'text' ? $record->payload : null), // Bind payload value for text type

                    Forms\Components\FileUpload::make('payload')
                        ->disk('local')
                        ->directory('setting-images')
                        ->label('Upload Image')
                        ->imageEditor()
                        ->image() // Restrict to images
                        ->required(fn($get) => $get('payload_type') === 'image') // Required for image type
                        ->visible(fn($get) => $get('payload_type') === 'image') // Show only for image type
                        ->default(fn($get, $record) => $record && $record->payload_type === 'image' ? $record->payload : null), // Bind payload value for image type
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),

            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                
            ])]);
    }

    public static function mutateFormDataBeforeSave(array $data): array
    {
        // Store the image URL or the text input in the 'payload' field
        if ($data['is_image']) {
            // If image is uploaded, store its URL in the 'payload' field
            $data['payload'] = $data['image'];
        }

        // Remove unnecessary fields before saving
        unset($data['is_image'], $data['image']);

        return $data;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWhyChooseUsReseources::route('/'),
            'create' => Pages\CreateWhyChooseUsReseource::route('/create'),
            'edit' => Pages\CustomEdit::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
       return false;
    }
}
