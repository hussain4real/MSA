<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bank>
 */
class BankFactory extends Factory
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
            'bank_id' => $this->faker->unique()->numerify('BNK########'),
            'bank_name' => $this->faker->company().' Bank',
            'address' => $this->faker->optional()->address(),
            'account_number' => $this->faker->numerify('##########'),
            'iban_number' => $this->faker->optional()->iban(),
            'swift_code' => $this->faker->optional()->swiftBicNumber(),
            'type' => $this->faker->optional()->randomElement(['Savings', 'Current', 'Business']),
            'currency' => $this->faker->currencyCode(),
            'active_flag' => $this->faker->boolean(90),
        ];
    }
}
