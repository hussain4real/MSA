<?php

namespace App\Observers;

use App\Models\CustomerContact;
use App\Traits\SetsOrganizationId;

class CustomerContactObserver
{
    use SetsOrganizationId;

    public function creating(CustomerContact $model): void
    {
        $this->setOrganizationId($model);
    }
}
