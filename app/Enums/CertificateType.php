<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum CertificateType: string implements HasLabel, HasIcon, HasColor, HasDescription
{
    case Safety = 'safety';
    case Registration = 'registration';
    case Classification = 'classification';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Safety => Heroicon::ShieldCheck,
            self::Registration => Heroicon::DocumentText,
            self::Classification => Heroicon::RectangleStack,
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Safety => 'success',
            self::Registration => 'info',
            self::Classification => 'warning',
        };
    }

    public function getDescription(): string|Htmlable|null
    {
        return match ($this) {
            self::Safety => __('This certificate ensures safety compliance.'),
            self::Registration => __('This certificate verifies registration status.'),
            self::Classification => __('This certificate indicates classification level.'),
        };
    }
}
