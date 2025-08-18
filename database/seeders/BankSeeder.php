<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create banks for existing organizations
        $organizations = \App\Models\Organization::all();

        foreach ($organizations as $organization) {
            \App\Models\Bank::factory()
                ->count(rand(1, 3))
                ->create(['organization_id' => $organization->id]);
        }
    }
}
