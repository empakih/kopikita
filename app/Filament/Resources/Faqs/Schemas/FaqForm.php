<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Umum' => 'Umum',
                        'Produk' => 'Produk',
                        'Artikel' => 'Artikel',
                    ])
                    ->default('Umum')
                    ->required(),
                TextInput::make('question')
                    ->label('Pertanyaan')
                    ->required(),
                Textarea::make('answer')
                    ->label('Jawaban')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Aktif?')
                    ->default(true)
                    ->required(),
            ]);
    }
}
