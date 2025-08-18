<?php

namespace App\Models;

use App\Enums\VesselStatus;
use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerVessel extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerVesselFactory> */
    use BelongsToOrganization, HasFactory;

    protected $fillable = [
        'organization_id',
        'customer_id',
        'vessel_code',
        'vessel_short_code',
        'vessel_name',
        'imo_number',
        'vessel_type',
        'flag_state',
        'gross_tonnage',
        'nett_tonnage',
        'dead_wt',
        'overall_length',
        'beam',
        'draft',
        'year_built',
        'classification_society',
        'class_notation',
        'vessel_operator',
        'vessel_owner',
        'vessel_manager',
        'service_type',
        'frequency',
        'status',
    ];

    protected $casts = [
        'gross_tonnage' => 'decimal:2',
        'nett_tonnage' => 'decimal:2',
        'dead_wt' => 'decimal:2',
        'overall_length' => 'decimal:2',
        'beam' => 'decimal:2',
        'draft' => 'decimal:2',
        'year_built' => 'integer',
        'status' => VesselStatus::class,
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(VesselCertificate::class, 'vessel_id');
    }
}
