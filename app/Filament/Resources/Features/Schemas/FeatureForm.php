<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image_path')
                    ->image(),
                \Filament\Forms\Components\Hidden::make('order_index')
                    ->default(fn () => (\App\Models\Feature::max('order_index') ?? 0) + 1),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
