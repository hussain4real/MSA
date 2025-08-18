<?php

use App\Enums\VesselStatus;
use App\Models\Customer;
use App\Models\CustomerVessel;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

it('creates customer vessel with enum cast', function () {
    $org = Organization::factory()->create();
    $this->user->update(['organization_id' => $org->id]);

    $customer = Customer::factory()->create(['organization_id' => $org->id]);

    $vessel = CustomerVessel::factory()->create([
        'organization_id' => $org->id,
        'customer_id' => $customer->id,
        'status' => VesselStatus::Active->value,
    ]);

    expect($vessel->status)->toBeInstanceOf(VesselStatus::class);
    expect($vessel->customer->id)->toBe($customer->id);
});
