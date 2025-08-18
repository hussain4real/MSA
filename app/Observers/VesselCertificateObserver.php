<?php

namespace App\Observers;

use App\Models\VesselCertificate;
use App\Traits\SetsOrganizationId;

class VesselCertificateObserver
{
    use SetsOrganizationId;

    public function creating(VesselCertificate $model): void
    {
        $this->setOrganizationId($model);
    }
}
