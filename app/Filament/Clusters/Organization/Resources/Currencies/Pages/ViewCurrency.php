<?php

namespace App\Filament\Clusters\Organization\Resources\Currencies\Pages;

use App\Filament\Clusters\Organization\Resources\Currencies\CurrencyResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCurrency extends ViewRecord
{
    protected static string $resource = CurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
