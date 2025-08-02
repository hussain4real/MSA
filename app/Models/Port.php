<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    /** @use HasFactory<\Database\Factories\PortFactory> */
    use HasFactory;

    protected $fillable = [
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
        'creation_date',
        'created_by',
        'last_modified_date',
        'last_modified_by',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'longitude' => 'decimal:7',
        'latitude' => 'decimal:7',
        'max_draft' => 'decimal:2',
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
