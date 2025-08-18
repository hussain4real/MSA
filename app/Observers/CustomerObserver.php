<?php

namespace App\Observers;

use App\Models\Customer;
use App\Traits\SetsOrganizationId;

class CustomerObserver
{
    use SetsOrganizationId;

    public function creating(Customer $model): void
    {
        $this->setOrganizationId($model);
    }
}
