<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\VesselCertificates\VesselCertificateResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVesselCertificate extends EditRecord
{
    protected static string $resource = VesselCertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
