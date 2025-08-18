<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum VendorStatus: string implements HasLabel, HasIcon, HasColor, HasDescription
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Suspended = 'suspended';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Active => Heroicon::CheckBadge,
            self::Inactive => Heroicon::PauseCircle,
            self::Suspended => Heroicon::ExclamationTriangle,
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Active => 'success',
            self::Inactive => 'gray',
            self::Suspended => 'warning',
        };
    }

    public function getDescription(): string|Htmlable|null
    {
        return match ($this) {
            self::Active => __('The vendor is currently active.'),
            self::Inactive => __('The vendor is currently inactive.'),
            self::Suspended => __('The vendor is currently suspended.'),
        };
    }
}
