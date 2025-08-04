<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'org_name' => $this->faker->company(),
            'legal_name' => $this->faker->company() . ' Ltd.',
            'registration_number' => $this->faker->unique()->numerify('REG########'),
            'tax_number' => $this->faker->optional()->numerify('TAX########'),
            'address' => $this->faker->optional()->address(),
            'contact_person' => $this->faker->name(),
            'person_position' => $this->faker->optional()->jobTitle(),
            'contact_number' => $this->faker->phoneNumber(),
            'email_id' => $this->faker->unique()->companyEmail(),
            'active_flag' => $this->faker->boolean(90),
            'org_city' => $this->faker->city(),
            'org_country' => $this->faker->country(),
        ];
    }
}
