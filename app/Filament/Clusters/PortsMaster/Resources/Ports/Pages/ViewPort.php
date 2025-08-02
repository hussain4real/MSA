<?php

namespace App\Filament\Clusters\PortsMaster\Resources\Ports\Pages;

use App\Filament\Clusters\PortsMaster\Resources\Ports\PortResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPort extends ViewRecord
{
    protected static string $resource = PortResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
