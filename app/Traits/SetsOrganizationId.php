<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait SetsOrganizationId
{
    /**
     * Set organization_id on model creation.
     */
    public function setOrganizationId($model): void
    {
        if (Auth::check() && Auth::user()->organization_id) {
            if (! $model->organization_id) {
                $model->organization_id = Auth::user()->organization_id;
            }
        }
    }
}
