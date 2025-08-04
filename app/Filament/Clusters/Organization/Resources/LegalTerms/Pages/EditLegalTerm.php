<?php

namespace App\Filament\Clusters\Organization\Resources\LegalTerms\Pages;

use App\Filament\Clusters\Organization\Resources\LegalTerms\LegalTermResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLegalTerm extends EditRecord
{
    protected static string $resource = LegalTermResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
