<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalTerm extends Model
{
    /** @use HasFactory<\Database\Factories\LegalTermFactory> */
    use HasFactory;

    protected $fillable = [
        'org_id',
        'terms_code',
        'terms_serial',
        'terms_title',
        'terms_category',
        'terms_description',
        'terms_version',
        'valid_from',
        'valid_to',
        'active_flag',
        'creation_date',
        'created_by',
        'last_modified_date',
        'last_modified_by',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'valid_from' => 'date',
        'valid_to' => 'date',
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
