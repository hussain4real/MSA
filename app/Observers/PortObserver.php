<?php

namespace App\Observers;

use App\Models\Port;
use App\Traits\SetsOrganizationId;

class PortObserver
{
    use SetsOrganizationId;

    public function creating(Port $port): void
    {
        $this->setOrganizationId($port);
    }
}
