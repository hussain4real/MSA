<?php

namespace App\Filament\Clusters\PortsMaster\Resources\Ports\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PortInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('port_code'),
                TextEntry::make('port_name'),
                TextEntry::make('port_country'),
                TextEntry::make('port_type'),
                TextEntry::make('longitude')
                    ->numeric(),
                TextEntry::make('latitude')
                    ->numeric(),
                TextEntry::make('time_zone'),
                TextEntry::make('vessel_size'),
                TextEntry::make('max_draft')
                    ->numeric(),
                IconEntry::make('active_flag')
                    ->boolean(),
                TextEntry::make('creation_date')
                    ->dateTime(),
                TextEntry::make('created_by')
                    ->numeric(),
                TextEntry::make('last_modified_date')
                    ->dateTime(),
                TextEntry::make('last_modified_by')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
