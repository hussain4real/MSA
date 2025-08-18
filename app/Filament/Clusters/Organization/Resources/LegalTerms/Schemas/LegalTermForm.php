<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LegalTermForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('org_id')
                    ->required()
                    ->numeric(),
                TextInput::make('terms_code')
                    ->required(),
                TextInput::make('terms_serial')
                    ->required(),
                TextInput::make('terms_title')
                    ->required(),
                TextInput::make('terms_category')
                    ->required(),
                Textarea::make('terms_description')
                    ->columnSpanFull(),
                TextInput::make('terms_version')
                    ->required(),
                DatePicker::make('valid_from')
                    ->required(),
                DatePicker::make('valid_to'),
                Toggle::make('active_flag')
                    ->required(),
                DateTimePicker::make('creation_date')
                    ->required(),
                TextInput::make('created_by')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('last_modified_date')
                    ->required(),
                TextInput::make('last_modified_by')
                    ->required()
                    ->numeric(),
            ]);
    }
}
