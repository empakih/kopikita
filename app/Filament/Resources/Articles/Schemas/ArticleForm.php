<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug'),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('thumbnail')
                    ->image()
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
