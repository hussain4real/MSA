<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum ContactType: string implements HasLabel, HasIcon, HasColor, HasDescription
{
    case Primary = 'primary';
    case Billing = 'billing';
    case Technical = 'technical';
    case Operations = 'operations';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Primary => Heroicon::UserCircle,
            self::Billing => Heroicon::Banknotes,
            self::Technical => Heroicon::CpuChip,
            self::Operations => Heroicon::Cog6Tooth,
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Primary => Color::Blue,
            self::Billing => Color::Green,
            self::Technical => Color::Yellow,
            self::Operations => Color::Red,
        };
    }

    public function getDescription(): string|Htmlable|null
    {
        return match ($this) {
            self::Primary => __('Primary contact for general inquiries.'),
            self::Billing => __('Contact for billing and payment issues.'),
            self::Technical => __('Technical support contact.'),
            self::Operations => __('Operations contact for internal matters.'),
        };
    }
}
