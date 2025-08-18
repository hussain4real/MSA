<?php

namespace App\Observers;

use App\Models\CustomerVessel;
use App\Traits\SetsOrganizationId;

class CustomerVesselObserver
{
    use SetsOrganizationId;

    public function creating(CustomerVessel $model): void
    {
        $this->setOrganizationId($model);
    }
}
