<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\VesselCertificateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVesselCertificates extends ListRecords
{
    protected static string $resource = VesselCertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
