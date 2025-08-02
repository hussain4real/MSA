<?php

namespace App\Models;

use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /** @use HasFactory<\Database\Factories\CurrencyFactory> */
    use HasFactory, BelongsToOrganization;

    protected $fillable = [
        'organization_id',
        'currency_code',
        'currency_name',
        'currency_country',
        'ex_rate',
        'active_flag',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'ex_rate' => 'decimal:4',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
