<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'organization_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Main organization relationship
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    // Relationships for created records
    public function createdOrganizations()
    {
        return $this->hasMany(Organization::class, 'created_by');
    }

    public function createdBanks()
    {
        return $this->hasMany(Bank::class, 'created_by');
    }

    public function createdCurrencies()
    {
        return $this->hasMany(Currency::class, 'created_by');
    }

    public function createdLegalTerms()
    {
        return $this->hasMany(LegalTerm::class, 'created_by');
    }

    public function createdPorts()
    {
        return $this->hasMany(Port::class, 'created_by');
    }

    // Relationships for last modified records
    public function lastModifiedOrganizations()
    {
        return $this->hasMany(Organization::class, 'last_modified_by');
    }

    public function lastModifiedBanks()
    {
        return $this->hasMany(Bank::class, 'last_modified_by');
    }

    public function lastModifiedCurrencies()
    {
        return $this->hasMany(Currency::class, 'last_modified_by');
    }

    public function lastModifiedLegalTerms()
    {
        return $this->hasMany(LegalTerm::class, 'last_modified_by');
    }

    public function lastModifiedPorts()
    {
        return $this->hasMany(Port::class, 'last_modified_by');
    }
}
