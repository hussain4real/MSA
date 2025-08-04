<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Port>
 */
class PortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organization_id' => \App\Models\Organization::factory(),
            'port_code' => $this->faker->unique()->bothify('???##'),
            'port_name' => $this->faker->city() . ' Port',
            'port_country' => $this->faker->country(),
            'port_type' => $this->faker->randomElement(['Container', 'Bulk', 'Oil', 'Cruise', 'Ferry']),
            'longitude' => $this->faker->optional()->longitude(),
            'latitude' => $this->faker->optional()->latitude(),
            'time_zone' => $this->faker->optional()->timezone(),
            'vessel_size' => $this->faker->optional()->randomElement(['Small', 'Medium', 'Large', 'Extra Large']),
            'max_draft' => $this->faker->optional()->randomFloat(2, 5, 50),
            'active_flag' => $this->faker->boolean(90),
        ];
    }
}
