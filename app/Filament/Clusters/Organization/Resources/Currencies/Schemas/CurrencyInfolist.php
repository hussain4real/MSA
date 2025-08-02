<?php

namespace App\Filament\Clusters\Organization\Resources\Currencies\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CurrencyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('currency_code'),
                TextEntry::make('currency_name'),
                TextEntry::make('currency_country'),
                TextEntry::make('ex_rate')
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
