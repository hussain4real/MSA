<?php

namespace App\Filament\Clusters\Organization\Resources\Banks\Pages;

use App\Filament\Clusters\Organization\Resources\Banks\BankResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBank extends EditRecord
{
    protected static string $resource = BankResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
