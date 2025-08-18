<?php

namespace App\Models;

use App\Enums\ContactType;
use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerContact extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerContactFactory> */
    use BelongsToOrganization, HasFactory;

    protected $fillable = [
        'organization_id',
        'customer_id',
        'contact_type',
        'contact_name',
        'designation',
        'email_id',
        'contact_no',
        'active_flag',
    ];

    protected $casts = [
        'contact_type' => ContactType::class,
        'active_flag' => 'boolean',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
