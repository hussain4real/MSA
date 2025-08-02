<?php

namespace App\Filament\Clusters\Organization\Resources\Organizations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OrganizationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('org_name'),
                TextEntry::make('legal_name'),
                TextEntry::make('registration_number'),
                TextEntry::make('tax_number'),
                TextEntry::make('contact_person'),
                TextEntry::make('person_position'),
                TextEntry::make('contact_number'),
                TextEntry::make('email_id'),
                IconEntry::make('active_flag')
                    ->boolean(),
                TextEntry::make('org_city'),
                TextEntry::make('org_country'),
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
