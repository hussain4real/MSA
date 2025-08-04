<?php

namespace App\Filament\Clusters\Organization\Resources\Currencies\Pages;

use App\Filament\Clusters\Organization\Resources\Currencies\CurrencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCurrencies extends ListRecords
{
    protected static string $resource = CurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
