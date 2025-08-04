<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create organizations first
        $this->call([
            OrganizationSeeder::class,
        ]);

        // Get the first organization to assign users to
        $organization = \App\Models\Organization::first();

        // Create a test user first
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'organization_id' => $organization->id,
        ]);

        // Create additional users for relationships
        User::factory(5)->create([
            'organization_id' => $organization->id,
        ]);

        // Run other seeders
        $this->call([
            CurrencySeeder::class,
            PortSeeder::class,
            BankSeeder::class,
            LegalTermSeeder::class,
        ]);
    }
}
