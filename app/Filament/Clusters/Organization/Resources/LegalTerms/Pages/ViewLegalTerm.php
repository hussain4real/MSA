<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Pages;

use App\Filament\Clusters\Organization\Resources\LegalTerms\LegalTermResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLegalTerm extends ViewRecord
{
    protected static string $resource = LegalTermResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
