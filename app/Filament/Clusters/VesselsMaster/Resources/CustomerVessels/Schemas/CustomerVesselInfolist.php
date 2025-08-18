<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CustomerVesselInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('organization.id'),
                TextEntry::make('customer.id'),
                TextEntry::make('vessel_code'),
                TextEntry::make('vessel_short_code'),
                TextEntry::make('vessel_name'),
                TextEntry::make('imo_number'),
                TextEntry::make('vessel_type'),
                TextEntry::make('flag_state'),
                TextEntry::make('gross_tonnage')
                    ->numeric(),
                TextEntry::make('nett_tonnage')
                    ->numeric(),
                TextEntry::make('dead_wt')
                    ->numeric(),
                TextEntry::make('overall_length')
                    ->numeric(),
                TextEntry::make('beam')
                    ->numeric(),
                TextEntry::make('draft')
                    ->numeric(),
                TextEntry::make('year_built')
                    ->numeric(),
                TextEntry::make('classification_society'),
                TextEntry::make('class_notation'),
                TextEntry::make('vessel_operator'),
                TextEntry::make('vessel_owner'),
                TextEntry::make('vessel_manager'),
                TextEntry::make('service_type'),
                TextEntry::make('frequency'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
