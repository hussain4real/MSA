<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum VesselStatus: string implements HasLabel, HasColor, HasIcon
{
    case Active = 'active';
    case Inactive = 'inactive';
    case LaidUp = 'laid_up';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Inactive => 'Inactive',
            self::LaidUp => 'Laid Up',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::Active => 'success',
            self::Inactive => 'gray',
            self::LaidUp => 'warning',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Active => 'heroicon-m-check-circle',
            self::Inactive => 'heroicon-m-minus-circle',
            self::LaidUp => 'heroicon-m-anchor',
        };
    }
}
