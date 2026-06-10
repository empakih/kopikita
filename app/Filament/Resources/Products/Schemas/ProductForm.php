<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('price')
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('price_label'),
                Textarea::make('description')
                    ->columnSpanFull(),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('category'),
                Toggle::make('is_bestseller')
                    ->required(),
            ]);
    }
}
