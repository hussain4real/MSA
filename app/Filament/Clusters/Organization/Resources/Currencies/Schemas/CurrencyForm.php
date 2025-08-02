<?php

namespace App\Filament\Clusters\Organization\Resources\Currencies\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('currency_code')
                    ->required(),
                TextInput::make('currency_name')
                    ->required(),
                TextInput::make('currency_country')
                    ->required(),
                TextInput::make('ex_rate')
                    ->required()
                    ->numeric(),
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
