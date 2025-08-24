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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\MarkdownEditor;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Illuminate\Support\Facades\Storage;

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
        return $form->schema([
            Forms\Components\Card::make([
                Forms\Components\TextInput::make('title')->required()->maxLength(255)->columnspan('full'),
                Forms\Components\TextInput::make('heading')->required()->maxLength(1000)->columnspan('full'),

                Forms\Components\TextInput::make('author')->required()->maxLength(255)->columnspan('full'),

                Forms\Components\TextInput::make('type')->required()->label('Blog Category')->default('general'),

                FileUpload::make('image')->label('Blog Image')->disk('local')->required()->image()->imageEditor()->image()->downloadable()->required()->preserveFilenames()->columnSpan('full'),

                Forms\Components\Textarea::make('meta_title')->label('Meta Title')->required()->columnSpan('full'),
                Forms\Components\Textarea::make('meta_description')->label('Meta Description')->required()->columnSpan('full'),
                Toggle::make('is_featured'),
                Toggle::make('status')->default(true),

                TinyEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->ltr() 
                    ->resize('both')
                    ->columnSpan('full')
                    ->required()

              
            ])
                ->columns(1) 
                ->columnSpanFull(), 
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([TextColumn::make('title')->limit(50)->sortable()->searchable(), ToggleColumn::make('is_featured'), ToggleColumn::make('status'), Tables\Columns\TextColumn::make('created_at')->dateTime('M d, Y')->sortable()])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
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
