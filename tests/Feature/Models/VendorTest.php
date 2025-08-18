<?php

use App\Enums\ApprovalStatus;
use App\Enums\VendorStatus;
use App\Enums\VendorType;
use App\Models\Organization;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

it('creates vendor with enum casts', function () {
    $org = Organization::factory()->create();
    $this->user->update(['organization_id' => $org->id]);

    $vendor = Vendor::factory()->create([
        'organization_id' => $org->id,
        'vendor_type' => VendorType::Supplier->value,
        'status' => VendorStatus::Active->value,
        'approval_status' => ApprovalStatus::Pending->value,
    ]);

    expect($vendor->vendor_type)->toBeInstanceOf(VendorType::class);
    expect($vendor->status)->toBeInstanceOf(VendorStatus::class);
    expect($vendor->approval_status)->toBeInstanceOf(ApprovalStatus::class);
});
