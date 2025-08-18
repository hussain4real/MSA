<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\CustomerVesselResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerVessel extends CreateRecord
{
    protected static string $resource = CustomerVesselResource::class;
}
