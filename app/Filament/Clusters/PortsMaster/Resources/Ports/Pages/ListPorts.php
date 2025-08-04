<?php

namespace App\Filament\Clusters\PortsMaster\Resources\Ports\Pages;

use App\Filament\Clusters\PortsMaster\Resources\Ports\PortResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPorts extends ListRecords
{
    protected static string $resource = PortResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
