<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LegalTerm>
 */
class LegalTermFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'org_id' => \App\Models\Organization::factory(),
            'terms_code' => $this->faker->unique()->bothify('TRM-###-??'),
            'terms_serial' => $this->faker->numerify('SER########'),
            'terms_title' => $this->faker->sentence(4),
            'terms_category' => $this->faker->randomElement(['Contract', 'Policy', 'Agreement', 'Regulation']),
            'terms_description' => $this->faker->optional()->paragraph(),
            'terms_version' => $this->faker->numerify('v#.#.#'),
            'valid_from' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'valid_to' => $this->faker->optional()->dateTimeBetween('now', '+2 years'),
            'active_flag' => $this->faker->boolean(90),
            'creation_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'created_by' => \App\Models\User::factory(),
            'last_modified_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'last_modified_by' => \App\Models\User::factory(),
        ];
    }
}
