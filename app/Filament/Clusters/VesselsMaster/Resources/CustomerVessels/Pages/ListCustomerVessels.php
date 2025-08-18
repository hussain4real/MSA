<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\CustomerVesselResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCustomerVessels extends ListRecords
{
    protected static string $resource = CustomerVesselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
