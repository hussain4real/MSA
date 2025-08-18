<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\CustomerVesselResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomerVessel extends ViewRecord
{
    protected static string $resource = CustomerVesselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
