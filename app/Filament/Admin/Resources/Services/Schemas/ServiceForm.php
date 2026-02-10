<?php

namespace App\Filament\Admin\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->columnSpan(2)
                    ->live(onBlur: true)
                    ->afterStateUpdated( fn($state, Set $set) => $set('slug', str()->slug($state)) ),
                TextInput::make('slug')
                ->prefix('https://folio.com/services/')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('amount')
                ->label('Starts at')
                ->prefix('KES')
                    ->required()
                    ->numeric()
                    ->default(0.0),
            ])
            ->columns(3);
    }
}
