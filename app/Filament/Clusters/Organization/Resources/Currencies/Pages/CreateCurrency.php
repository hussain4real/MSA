<?php

namespace App\Filament\Clusters\Organization\Resources\Currencies\Pages;

use App\Filament\Clusters\Organization\Resources\Currencies\CurrencyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCurrency extends CreateRecord
{
    protected static string $resource = CurrencyResource::class;
}
