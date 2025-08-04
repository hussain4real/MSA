<?php

namespace App\Observers;

use App\Models\Bank;
use App\Traits\SetsOrganizationId;

class BankObserver
{
    use SetsOrganizationId;

    public function creating(Bank $bank): void
    {
        $this->setOrganizationId($bank);
    }
}
