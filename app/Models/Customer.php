<?php

namespace App\Models;

use App\Enums\ApprovalStatus;
use App\Enums\CustomerType;
use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use BelongsToOrganization, HasFactory;

    protected $fillable = [
        'organization_id',
        'customer_code',
        'legal_name',
        'trade_name',
        'customer_type',
        'business_category',
        'cr_number',
        'tax_number',
        'address',
        'po_box',
        'city',
        'country',
        'credit_limit',
        'credit_currency',
        'payment_terms',
        'credit_status',
        'erp_code',
        'status',
        'approval_status',
    ];

    protected $casts = [
        'credit_limit' => 'decimal:2',
        'approval_status' => ApprovalStatus::class,
        'customer_type' => CustomerType::class,
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(CustomerContact::class);
    }

    public function vessels(): HasMany
    {
        return $this->hasMany(CustomerVessel::class);
    }
}
