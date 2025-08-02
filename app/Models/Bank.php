<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /** @use HasFactory<\Database\Factories\BankFactory> */
    use HasFactory;

    protected $fillable = [
        'org_id',
        'bank_id',
        'bank_name',
        'address',
        'account_number',
        'iban_number',
        'swift_code',
        'type',
        'currency',
        'active_flag',
        'creation_date',
        'created_by',
        'last_modified_date',
        'last_modified_by',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'creation_date' => 'datetime',
        'last_modified_date' => 'datetime',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'org_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function lastModifiedBy()
    {
        return $this->belongsTo(User::class, 'last_modified_by');
    }
}
