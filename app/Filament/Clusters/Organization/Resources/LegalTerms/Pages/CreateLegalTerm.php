<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Pages;

use App\Filament\Clusters\Organization\Resources\LegalTerms\LegalTermResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLegalTerm extends CreateRecord
{
    protected static string $resource = LegalTermResource::class;
}
