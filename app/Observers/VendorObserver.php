<?php

namespace App\Observers;

use App\Models\Vendor;
use App\Traits\SetsOrganizationId;

class VendorObserver
{
    use SetsOrganizationId;

    public function creating(Vendor $model): void
    {
        $this->setOrganizationId($model);
    }
}
