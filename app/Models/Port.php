<?php

namespace App\Models;

use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    /** @use HasFactory<\Database\Factories\PortFactory> */
    use HasFactory, BelongsToOrganization;

    protected $fillable = [
        'organization_id',
        'port_code',
        'port_name',
        'port_country',
        'port_type',
        'longitude',
        'latitude',
        'time_zone',
        'vessel_size',
        'max_draft',
        'active_flag',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'longitude' => 'decimal:7',
        'latitude' => 'decimal:7',
        'max_draft' => 'decimal:2',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
