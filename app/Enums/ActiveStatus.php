<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum ActiveStatus: string implements HasLabel, HasIcon, HasColor, HasDescription
{
    case Active = 'active';
    case Inactive = 'inactive';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Active => 'success',
            self::Inactive => 'gray',
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Active => Heroicon::CheckCircle,
            self::Inactive => Heroicon::XCircle,
        };
    }

    public function getDescription(): string|Htmlable|null
    {
        return match ($this) {
            self::Active => __('The user is currently active.'),
            self::Inactive => __('The user is currently inactive.'),
        };
    }
}
