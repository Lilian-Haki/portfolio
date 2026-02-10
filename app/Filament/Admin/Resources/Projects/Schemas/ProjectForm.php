<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->columnSpan(2)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn($state, Set $set) => $set('slug', str()->slug($state))),
                    TextInput::make('slug')
                        ->required(),

                    RichEditor::make('description')
                        ->default(null)
                        ->columnSpanFull(),

                    Select::make('user_id')
                        ->label('Customer')
                        ->relationship('user', 'name')
                        ->createOptionForm([
                            TextInput::make('name')
                                ->required(),
                            TextInput::make('email')
                                ->label('Email address')
                                ->email()
                                ->required(),
                            TextInput::make('phone')
                                ->tel()
                                ->required(),
                            DateTimePicker::make('email_verified_at'),
                            TextInput::make('password')
                                ->password()
                                ->required(),
                            TextInput::make('role')
                                ->required()
                                ->default('customer'),
                        ])
                        ->searchable()
                        ->required(),

                    Select::make('status')
                        ->options([
                            'ongoing'   => 'Ongoing',
                            'completed' => 'Completed',
                            'on-hold'   => 'On Hold',
                        ])
                        ->required()
                        ->default('ongoing'),

                    Select::make('categories')
                        ->relationship('categories', 'name')
                        ->multiple()
                        ->preload(),

                    Select::make('services')
                        ->relationship('services', 'name')
                        ->multiple()
                        ->preload(),

                    DatePicker::make('start_date'),
                    DatePicker::make('end_date'),
                ])
                    ->columns(3)
                    ->columnSpan(2),
                Group::make()->schema([
                    FileUpload::make('image')
                        ->image()
                        ->columnSpanFull(),
                    Section::make('Project Gallery')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('gallery')
                                ->label('')
                                ->multiple()
                                ->collection('gallery'),
                        ])
                        ->collapsible()
                        ->collapsed(),
                ])
                    ->columns(1),
            ])
            ->columns(3);
    }
}
