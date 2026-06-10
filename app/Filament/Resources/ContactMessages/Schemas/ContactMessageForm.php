<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->label('Nama Depan')
                    ->required(),
                TextInput::make('last_name')
                    ->label('Nama Belakang')
                    ->required(),
                TextInput::make('greenhouse_name')
                    ->label('Nama Green House'),
                TextInput::make('greenhouse_location')
                    ->label('Lokasi Green House'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('subject'),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
