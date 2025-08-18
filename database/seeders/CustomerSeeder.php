<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerContact;
use App\Models\CustomerVessel;
use App\Models\VesselCertificate;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $organizations = \App\Models\Organization::all();

        foreach ($organizations as $organization) {
            // Create customers per organization
            $customers = Customer::factory()
                ->count(rand(3, 7))
                ->create(['organization_id' => $organization->id]);

            foreach ($customers as $customer) {
                // Contacts
                CustomerContact::factory()
                    ->count(rand(1, 3))
                    ->create([
                        'organization_id' => $organization->id,
                        'customer_id' => $customer->id,
                    ]);

                // Vessels
                $vessels = CustomerVessel::factory()
                    ->count(rand(0, 2))
                    ->create([
                        'organization_id' => $organization->id,
                        'customer_id' => $customer->id,
                    ]);

                foreach ($vessels as $vessel) {
                    // Certificates per vessel
                    VesselCertificate::factory()
                        ->count(rand(0, 3))
                        ->create([
                            'organization_id' => $organization->id,
                            'vessel_id' => $vessel->id,
                        ]);
                }
            }
        }
    }
}
