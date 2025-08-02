<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /** @use HasFactory<\Database\Factories\CurrencyFactory> */
    use HasFactory;

    protected $fillable = [
        'currency_code',
        'currency_name',
        'currency_country',
        'ex_rate',
        'active_flag',
        'creation_date',
        'created_by',
        'last_modified_date',
        'last_modified_by',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'ex_rate' => 'decimal:4',
        'creation_date' => 'datetime',
        'last_modified_date' => 'datetime',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function lastModifiedBy()
    {
        return $this->belongsTo(User::class, 'last_modified_by');
    }
}
