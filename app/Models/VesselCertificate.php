<?php

namespace App\Models;

use App\Enums\CertificateStatus;
use App\Enums\CertificateType;
use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VesselCertificate extends Model
{
    /** @use HasFactory<\Database\Factories\VesselCertificateFactory> */
    use BelongsToOrganization, HasFactory;

    protected $fillable = [
        'organization_id',
        'vessel_id',
        'certificate_type',
        'certificate_ref',
        'certificate_name',
        'issued_by',
        'issue_date',
        'expiry_date',
        'next_renewal',
        'status',
    ];

    protected $casts = [
        'certificate_type' => CertificateType::class,
        'status' => CertificateStatus::class,
        'issue_date' => 'date',
        'expiry_date' => 'date',
        'next_renewal' => 'date',
    ];

    public function vessel(): BelongsTo
    {
        return $this->belongsTo(CustomerVessel::class, 'vessel_id');
    }
}
