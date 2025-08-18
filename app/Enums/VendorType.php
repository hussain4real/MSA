<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum VendorType: string implements HasLabel, HasIcon
{
    case Supplier = 'supplier';
    case ServiceProvider = 'service_provider';
    case Contractor = 'contractor';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Supplier => 'Supplier',
            self::ServiceProvider => 'Service Provider',
            self::Contractor => 'Contractor',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Supplier => 'heroicon-m-truck',
            self::ServiceProvider => 'heroicon-m-briefcase',
            self::Contractor => 'heroicon-m-wrench-screwdriver',
        };
    }
}
