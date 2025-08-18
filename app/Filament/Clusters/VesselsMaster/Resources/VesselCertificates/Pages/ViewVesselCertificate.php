<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\VesselCertificateResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVesselCertificate extends ViewRecord
{
    protected static string $resource = VesselCertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
