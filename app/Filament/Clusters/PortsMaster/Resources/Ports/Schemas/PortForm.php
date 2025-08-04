<?php

namespace App\Filament\Clusters\PortsMaster\Resources\Ports\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PortForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('port_code')
                    ->required(),
                TextInput::make('port_name')
                    ->required(),
                TextInput::make('port_country')
                    ->required(),
                TextInput::make('port_type')
                    ->required(),
                TextInput::make('longitude')
                    ->numeric(),
                TextInput::make('latitude')
                    ->numeric(),
                TextInput::make('time_zone'),
                TextInput::make('vessel_size'),
                TextInput::make('max_draft')
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
