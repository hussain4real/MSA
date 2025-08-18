<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

/**
 * Approval workflow status.
 */
enum ApprovalStatus: string implements HasLabel, HasColor, HasIcon, HasDescription
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';

    public function getLabel(): string|Htmlable|null
    {
        return __($this->value);
    }

    public function getDescription(): string|Htmlable|null
    {
         return match ($this) {
            self::Pending => 'Awaiting review and approval.',
            self::Approved => 'Approved and ready to use.',
            self::Rejected => 'Rejected and cannot proceed.',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Approved => 'success',
            self::Rejected => 'danger',
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
         return match ($this) {
            self::Pending => Heroicon::Clock,
            self::Approved => Heroicon::Check,
            self::Rejected => Heroicon::XMark,
        };
    }
}
