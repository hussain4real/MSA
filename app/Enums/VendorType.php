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

enum VendorType: string implements HasLabel, HasIcon, HasColor, HasDescription
{
    case Supplier = 'supplier';
    case ServiceProvider = 'service_provider';
    case Contractor = 'contractor';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Supplier => Heroicon::Truck,
            self::ServiceProvider => Heroicon::Briefcase,
            self::Contractor => Heroicon::WrenchScrewdriver,
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Supplier => Color::Green,
            self::ServiceProvider => Color::Blue,
            self::Contractor => Color::Teal,
        };
    }

    public function getDescription(): string|Htmlable|null
    {
        return match ($this) {
            self::Supplier => __('Supplies goods and products'),
            self::ServiceProvider => __('Provides services'),
            self::Contractor => __('Works on a contract basis'),
        };
    }
}
