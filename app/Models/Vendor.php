<?php

namespace App\Models;

use App\Enums\ApprovalStatus;
use App\Enums\VendorStatus;
use App\Enums\VendorType;
use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /** @use HasFactory<\Database\Factories\VendorFactory> */
    use BelongsToOrganization, HasFactory;

    protected $fillable = [
        'organization_id',
        'vendor_code',
        'legal_name',
        'trade_name',
        'vendor_type',
        'registration_no',
        'tax_number',
        'address',
        'city',
        'country',
        'primary_contact',
        'primary_email',
        'contact_no',
        'bank_name',
        'bank_account',
        'swift_code',
        'payment_terms',
        'payment_currency',
        'status',
        'approval_status',
    ];

    protected $casts = [
        'vendor_type' => VendorType::class,
        'status' => VendorStatus::class,
        'approval_status' => ApprovalStatus::class,
    ];
}
