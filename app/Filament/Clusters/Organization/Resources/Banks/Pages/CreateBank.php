<?php

namespace App\Filament\Clusters\Organization\Resources\Banks\Pages;

use App\Filament\Clusters\Organization\Resources\Banks\BankResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBank extends CreateRecord
{
    protected static string $resource = BankResource::class;
}
