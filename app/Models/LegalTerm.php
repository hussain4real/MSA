<?php

namespace App\Models;

use App\Traits\BelongsToOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalTerm extends Model
{
    /** @use HasFactory<\Database\Factories\LegalTermFactory> */
    use HasFactory, BelongsToOrganization;

    protected $fillable = [
        'organization_id',
        'terms_code',
        'terms_serial',
        'terms_title',
        'terms_category',
        'terms_description',
        'terms_version',
        'valid_from',
        'valid_to',
        'active_flag',
    ];

    protected $casts = [
        'active_flag' => 'boolean',
        'valid_from' => 'date',
        'valid_to' => 'date',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
