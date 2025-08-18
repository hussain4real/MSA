<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    public function run(): void
    {
        $organizations = \App\Models\Organization::all();

        foreach ($organizations as $organization) {
            Vendor::factory()
                ->count(rand(3, 6))
                ->create(['organization_id' => $organization->id]);
        }
    }
}
