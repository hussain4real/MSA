<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum VendorStatus: string implements HasLabel, HasColor, HasIcon
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Suspended = 'suspended';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Inactive => 'Inactive',
            self::Suspended => 'Suspended',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::Active => 'success',
            self::Inactive => 'gray',
            self::Suspended => 'warning',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Active => 'heroicon-m-check-badge',
            self::Inactive => 'heroicon-m-pause-circle',
            self::Suspended => 'heroicon-m-exclamation-triangle',
        };
    }
}
