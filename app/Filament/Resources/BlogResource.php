<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\MarkdownEditor;
use Malzariey\FilamentLexicalEditor\FilamentLexicalEditor;
use Malzariey\FilamentLexicalEditor\Enums\ToolbarItem;
use Filament\Forms\Components\DatePicker;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationGroup = 'OTHERS';

    protected static ?string $label = 'Blog';

    protected static ?string $pluralLabel = 'Blogs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->columnspan('full'),

                    Forms\Components\Hidden::make('type')
                        ->default('general'),

                    FileUpload::make('image')
                        ->label('Blog Image')
                        ->disk('local')
                        ->required()
                        ->image()
                        ->imageEditor()
                        ->image()
                        ->downloadable()
                        ->required()
                        ->preserveFilenames()
                        ->columnSpan('full'),
                     
                    Forms\Components\TextInput::make('image_alt')
                        ->label('Image Alt Text')
                        ->required()
                        ->columnSpan('full'),

                    Forms\Components\MarkdownEditor::make('schema_data')
                        ->nullable()
                        ->columnSpan('full')
                        ->disableToolbarButtons([
                            'attachFiles',
                        ]),

                    Forms\Components\Textarea::make('meta_title')
                        ->label('Meta Title')
                        ->nullable()
                        ->columnSpan('full'),
                    Forms\Components\MarkdownEditor::make('meta_description')
                        ->label('Meta Codes')
                        ->nullable()
                        ->columnSpan('full')
                        ->disableToolbarButtons([
                            'attachFiles',
                        ]),

                    Toggle::make('is_featured'),
                    Toggle::make('status'),

                    DatePicker::make('uploaded_date')
                        ->label('Uploaded Date')
                        ->required(),

                    Forms\Components\TextInput::make('author')
                        ->required()
                        ->maxLength(255)
                        ->columnspan('full'),

                    FilamentLexicalEditor::make('content')
                        ->required()
                        ->enabledToolbars([
                            ToolbarItem::UNDO, ToolbarItem::REDO, ToolbarItem::NORMAL, ToolbarItem::H1, ToolbarItem::H2, ToolbarItem::H3,
                            ToolbarItem::H4, ToolbarItem::H5, ToolbarItem::H6, ToolbarItem::BULLET, ToolbarItem::NUMBERED, ToolbarItem::QUOTE,
                            ToolbarItem::CODE, ToolbarItem::FONT_SIZE, ToolbarItem::BOLD, ToolbarItem::ITALIC, ToolbarItem::UNDERLINE,
                            ToolbarItem::ICODE, ToolbarItem::LINK, ToolbarItem::TEXT_COLOR, ToolbarItem::BACKGROUND_COLOR, ToolbarItem::LOWERCASE,
                            ToolbarItem::UPPERCASE, ToolbarItem::CAPITALIZE, ToolbarItem::STRIKETHROUGH, ToolbarItem::SUBSCRIPT, ToolbarItem::SUPERSCRIPT,
                            ToolbarItem::CLEAR, ToolbarItem::LEFT, ToolbarItem::CENTER, ToolbarItem::RIGHT, ToolbarItem::JUSTIFY, ToolbarItem::START,
                            ToolbarItem::END, ToolbarItem::INDENT, ToolbarItem::OUTDENT, ToolbarItem::HR,ToolbarItem::IMAGE
                        ])
                        ->columnSpan('full'),

                ])
                    ->columns(1) // Optional: display inputs in two columns
                    ->columnSpanFull() // Make the card take full width
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->limit(50)->sortable()->searchable(),
                ToggleColumn::make('is_featured'),
                ToggleColumn::make('status'),
                // TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),
                TextColumn::make('uploaded_date')->dateTime('M d, Y')->sortable(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
