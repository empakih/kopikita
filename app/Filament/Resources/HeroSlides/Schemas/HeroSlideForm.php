<?php

namespace App\Filament\Resources\HeroSlides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HeroSlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Gambar Hero')
                    ->image()
                    ->disk('public')
                    ->directory('hero')
                    ->imageEditor()
                    ->required()
                    ->helperText('Disarankan ukuran landscape (mis. 1600x600px) agar tampil penuh.')
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->label('Judul / Teks Alternatif')
                    ->helperText('Opsional. Untuk catatan internal & aksesibilitas (alt text).')
                    ->maxLength(255),
                Hidden::make('order_index')
                    ->default(fn () => (\App\Models\HeroSlide::max('order_index') ?? 0) + 1),
                Toggle::make('is_active')
                    ->label('Aktif (tampilkan di website)')
                    ->default(true)
                    ->required(),
            ]);
    }
}
