<?php

use App\Enums\ApprovalStatus;
use App\Enums\CustomerType;
use App\Models\Customer;
use App\Models\CustomerContact;
use App\Models\CustomerVessel;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

it('creates a customer with enum casts', function () {
    $org = Organization::factory()->create();
    $this->user->update(['organization_id' => $org->id]);

    $customer = Customer::factory()->create([
        'organization_id' => $org->id,
        'customer_type' => CustomerType::Corporate->value,
        'approval_status' => ApprovalStatus::Approved->value,
    ]);

    expect($customer->customer_type)->toBeInstanceOf(CustomerType::class);
    expect($customer->approval_status)->toBeInstanceOf(ApprovalStatus::class);
});

it('relates contacts and vessels', function () {
    $org = Organization::factory()->create();
    $this->user->update(['organization_id' => $org->id]);

    $customer = Customer::factory()->create(['organization_id' => $org->id]);

    $contact = CustomerContact::factory()->create([
        'organization_id' => $org->id,
        'customer_id' => $customer->id,
    ]);

    $vessel = CustomerVessel::factory()->create([
        'organization_id' => $org->id,
        'customer_id' => $customer->id,
    ]);

    expect($customer->contacts()->count())->toBe(1);
    expect($customer->vessels()->count())->toBe(1);
    expect($contact->customer->id)->toBe($customer->id);
    expect($vessel->customer->id)->toBe($customer->id);
});
