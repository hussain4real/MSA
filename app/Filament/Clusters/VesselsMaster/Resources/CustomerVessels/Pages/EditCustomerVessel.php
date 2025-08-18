<?php

namespace App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\Pages;

use App\Filament\Clusters\VesselsMaster\Resources\CustomerVessels\CustomerVesselResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCustomerVessel extends EditRecord
{
    protected static string $resource = CustomerVesselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
