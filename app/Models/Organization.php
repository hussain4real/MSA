<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationFactory> */
    use HasFactory;

    protected $fillable = [
        'org_name',
        'legal_name',
        'registration_number',
        'tax_number',
        'address',
        'contact_person',
        'person_position',
        'contact_number',
        'email_id',
        'active_flag',
        'org_city',
        'org_country',
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

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function lastModifiedBy()
    {
        return $this->belongsTo(User::class, 'last_modified_by');
    }

    public function banks()
    {
        return $this->hasMany(Bank::class, 'org_id');
    }

    public function legalTerms()
    {
        return $this->hasMany(LegalTerm::class, 'org_id');
    }
}
