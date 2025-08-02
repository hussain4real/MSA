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
        // Create a test user first
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create additional users for relationships
        User::factory(5)->create();

        // Run all seeders in proper order
        $this->call([
            CurrencySeeder::class,
            PortSeeder::class,
            OrganizationSeeder::class,
            BankSeeder::class,
            LegalTermSeeder::class,
        ]);
    }
}
