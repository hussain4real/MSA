<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majorPorts = [
            ['code' => 'USNYC', 'name' => 'Port of New York', 'country' => 'United States', 'type' => 'Container'],
            ['code' => 'NLRTM', 'name' => 'Port of Rotterdam', 'country' => 'Netherlands', 'type' => 'Container'],
            ['code' => 'SGSIN', 'name' => 'Port of Singapore', 'country' => 'Singapore', 'type' => 'Container'],
            ['code' => 'CNSHA', 'name' => 'Port of Shanghai', 'country' => 'China', 'type' => 'Container'],
            ['code' => 'AEDXB', 'name' => 'Port of Dubai', 'country' => 'United Arab Emirates', 'type' => 'Container'],
            ['code' => 'DEHAM', 'name' => 'Port of Hamburg', 'country' => 'Germany', 'type' => 'Container'],
            ['code' => 'GBLON', 'name' => 'Port of London', 'country' => 'United Kingdom', 'type' => 'Container'],
            ['code' => 'JPYOK', 'name' => 'Port of Yokohama', 'country' => 'Japan', 'type' => 'Container'],
        ];

        $organization = \App\Models\Organization::first();

        foreach ($majorPorts as $port) {
            \App\Models\Port::create([
                'organization_id' => $organization->id,
                'port_code' => $port['code'],
                'port_name' => $port['name'],
                'port_country' => $port['country'],
                'port_type' => $port['type'],
                'longitude' => fake()->longitude(),
                'latitude' => fake()->latitude(),
                'time_zone' => fake()->timezone(),
                'vessel_size' => fake()->randomElement(['Medium', 'Large', 'Extra Large']),
                'max_draft' => fake()->randomFloat(2, 10, 25),
                'active_flag' => true,
            ]);
        }

        // Create additional random ports
        \App\Models\Port::factory(15)->create();
    }
}
