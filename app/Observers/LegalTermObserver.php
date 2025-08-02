<?php

namespace App\Observers;

use App\Models\LegalTerm;
use App\Traits\SetsOrganizationId;

class LegalTermObserver
{
    use SetsOrganizationId;

    public function creating(LegalTerm $legalTerm): void
    {
        $this->setOrganizationId($legalTerm);
    }
}
