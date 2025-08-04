<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegalTermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create legal terms for existing organizations
        $organizations = \App\Models\Organization::all();

        foreach ($organizations as $organization) {
            \App\Models\LegalTerm::factory()
                ->count(rand(2, 5))
                ->create(['organization_id' => $organization->id]);
        }
    }
}
