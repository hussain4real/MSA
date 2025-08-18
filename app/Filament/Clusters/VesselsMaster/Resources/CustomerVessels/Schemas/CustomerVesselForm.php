<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Schemas;

use App\Enums\VesselStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerVesselForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('organization_id')
                    ->relationship('organization', 'id')
                    ->required(),
                Select::make('customer_id')
                    ->relationship('customer', 'id')
                    ->required(),
                TextInput::make('vessel_code')
                    ->required(),
                TextInput::make('vessel_short_code'),
                TextInput::make('vessel_name')
                    ->required(),
                TextInput::make('imo_number'),
                TextInput::make('vessel_type'),
                TextInput::make('flag_state'),
                TextInput::make('gross_tonnage')
                    ->numeric(),
                TextInput::make('nett_tonnage')
                    ->numeric(),
                TextInput::make('dead_wt')
                    ->numeric(),
                TextInput::make('overall_length')
                    ->numeric(),
                TextInput::make('beam')
                    ->numeric(),
                TextInput::make('draft')
                    ->numeric(),
                TextInput::make('year_built')
                    ->numeric(),
                TextInput::make('classification_society'),
                TextInput::make('class_notation'),
                TextInput::make('vessel_operator'),
                TextInput::make('vessel_owner'),
                TextInput::make('vessel_manager'),
                TextInput::make('service_type'),
                TextInput::make('frequency'),
                Select::make('status')
                    ->options(VesselStatus::class)
                    ->default('active')
                    ->required(),
            ]);
    }
}
