<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->unique(ignoreRecord: true)
                    ->helperText('Kosongkan untuk dibuat otomatis dari judul.'),
                RichEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('articles/content')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->directory('articles'),
                TextInput::make('category'),
                TextInput::make('author'),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                DatePicker::make('published_at'),
            ]);
    }
}
