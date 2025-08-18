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

enum CustomerType: string implements HasLabel, HasIcon, HasColor, HasDescription
{
    case Corporate = 'corporate';
    case Individual = 'individual';
    case Government = 'government';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Corporate => Heroicon::BuildingOffice,
            self::Individual => Heroicon::User,
            self::Government => Heroicon::BuildingLibrary,
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Corporate => Color::Blue,
            self::Individual => Color::Green,
            self::Government => Color::Red,
        };
    }

    public function getDescription(): string|Htmlable|null
    {
        return match ($this) {
            self::Corporate => __('A corporate customer'),
            self::Individual => __('An individual customer'),
            self::Government => __('A government customer'),
        };
    }
}
