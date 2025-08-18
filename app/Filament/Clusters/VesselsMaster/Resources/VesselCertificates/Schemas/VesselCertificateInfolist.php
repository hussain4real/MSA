<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VesselCertificateInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('organization.id'),
                TextEntry::make('vessel.id'),
                TextEntry::make('certificate_type'),
                TextEntry::make('certificate_ref'),
                TextEntry::make('certificate_name'),
                TextEntry::make('issued_by'),
                TextEntry::make('issue_date')
                    ->date(),
                TextEntry::make('expiry_date')
                    ->date(),
                TextEntry::make('next_renewal')
                    ->date(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
