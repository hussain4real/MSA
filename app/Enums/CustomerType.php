<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum CustomerType: string implements HasLabel, HasIcon
{
    case Corporate = 'corporate';
    case Individual = 'individual';
    case Government = 'government';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Corporate => 'Corporate',
            self::Individual => 'Individual',
            self::Government => 'Government',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Corporate => 'heroicon-m-building-office',
            self::Individual => 'heroicon-m-user',
            self::Government => 'heroicon-m-building-library',
        };
    }
}
