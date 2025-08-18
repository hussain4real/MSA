<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum CertificateStatus: string implements HasLabel, HasColor, HasIcon
{
    case Valid = 'valid';
    case Expired = 'expired';
    case Suspended = 'suspended';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Valid => 'success',
            self::Expired => 'danger',
            self::Suspended => 'warning',
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
         return match ($this) {
            self::Valid => Heroicon::CheckCircle,
            self::Expired => Heroicon::ExclamationCircle,
            self::Suspended => Heroicon::ExclamationTriangle,
        };
    }
}
