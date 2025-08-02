<?php

namespace App\Observers;

use App\Models\Currency;
use App\Traits\SetsOrganizationId;

class CurrencyObserver
{
    use SetsOrganizationId;

    public function creating(Currency $currency): void
    {
        $this->setOrganizationId($currency);
    }
}
