<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Pages;

use App\Filament\Clusters\Organization\Resources\LegalTerms\LegalTermResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLegalTerms extends ListRecords
{
    protected static string $resource = LegalTermResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
