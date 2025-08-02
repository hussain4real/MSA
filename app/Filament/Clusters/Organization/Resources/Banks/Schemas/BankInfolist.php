<?php

namespace App\Filament\Clusters\Organization\Resources\Banks\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BankInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('org_id')
                    ->numeric(),
                TextEntry::make('bank_id'),
                TextEntry::make('bank_name'),
                TextEntry::make('account_number'),
                TextEntry::make('iban_number'),
                TextEntry::make('swift_code'),
                TextEntry::make('type'),
                TextEntry::make('currency'),
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
