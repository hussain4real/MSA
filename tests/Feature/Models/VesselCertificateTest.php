<?php

use App\Enums\CertificateStatus;
use App\Enums\CertificateType;
use App\Models\CustomerVessel;
use App\Models\Organization;
use App\Models\User;
use App\Models\VesselCertificate;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

it('creates vessel certificate with enum casts and dates', function () {
    $org = Organization::factory()->create();
    $this->user->update(['organization_id' => $org->id]);

    $vessel = CustomerVessel::factory()->create([
        'organization_id' => $org->id,
        'customer_id' => \App\Models\Customer::factory()->create(['organization_id' => $org->id])->id,
    ]);

    $cert = VesselCertificate::factory()->create([
        'organization_id' => $org->id,
        'vessel_id' => $vessel->id,
        'certificate_type' => CertificateType::Safety->value,
        'status' => CertificateStatus::Valid->value,
        'issue_date' => now()->subYear()->toDateString(),
        'expiry_date' => now()->addYear()->toDateString(),
    ]);

    expect($cert->certificate_type)->toBeInstanceOf(CertificateType::class);
    expect($cert->status)->toBeInstanceOf(CertificateStatus::class);
    expect($cert->issue_date->isPast())->toBeTrue();
    expect($cert->expiry_date->isFuture())->toBeTrue();
    expect($cert->vessel->id)->toBe($vessel->id);
});
