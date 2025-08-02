<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LegalTermInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('org_id')
                    ->numeric(),
                TextEntry::make('terms_code'),
                TextEntry::make('terms_serial'),
                TextEntry::make('terms_title'),
                TextEntry::make('terms_category'),
                TextEntry::make('terms_version'),
                TextEntry::make('valid_from')
                    ->date(),
                TextEntry::make('valid_to')
                    ->date(),
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
