<?php

namespace App\Models;

use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /** @use HasFactory<\Database\Factories\BankFactory> */
    use HasFactory, BelongsToOrganization;

    protected $fillable = [
        'organization_id',
        'bank_id',
        'bank_name',
        'address',
        'account_number',
        'iban_number',
        'swift_code',
        'type',
        'currency',
        'active_flag',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
