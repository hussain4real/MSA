<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum CustomerStatus: string implements HasLabel, HasColor, HasIcon, HasDescription
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Suspended = 'suspended';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
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
            self::Active => __('The customer is active and engaged.'),
            self::Inactive => __('The customer is inactive and may need re-engagement.'),
            self::Suspended => __('The customer account is suspended due to issues.'),
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Active => Heroicon::CheckBadge,
            self::Inactive => Heroicon::PauseCircle,
            self::Suspended => Heroicon::ExclamationTriangle,
        };
    }
}
