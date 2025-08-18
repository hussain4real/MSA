<?php

use App\Enums\ContactType;
use App\Models\Customer;
use App\Models\CustomerContact;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

it('creates customer contact with enum cast', function () {
    $org = Organization::factory()->create();
    $this->user->update(['organization_id' => $org->id]);

    $customer = Customer::factory()->create(['organization_id' => $org->id]);

    $contact = CustomerContact::factory()->create([
        'organization_id' => $org->id,
        'customer_id' => $customer->id,
        'contact_type' => ContactType::Primary->value,
    ]);

    expect($contact->contact_type)->toBeInstanceOf(ContactType::class);
    expect($contact->customer->id)->toBe($customer->id);
});
