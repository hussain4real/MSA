<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\VesselCertificateResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVesselCertificate extends CreateRecord
{
    protected static string $resource = VesselCertificateResource::class;
}
