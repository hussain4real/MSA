<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currencies = [
            ['code' => 'USD', 'name' => 'US Dollar', 'country' => 'United States'],
            ['code' => 'EUR', 'name' => 'Euro', 'country' => 'European Union'],
            ['code' => 'GBP', 'name' => 'British Pound', 'country' => 'United Kingdom'],
            ['code' => 'JPY', 'name' => 'Japanese Yen', 'country' => 'Japan'],
            ['code' => 'AUD', 'name' => 'Australian Dollar', 'country' => 'Australia'],
            ['code' => 'CAD', 'name' => 'Canadian Dollar', 'country' => 'Canada'],
            ['code' => 'CHF', 'name' => 'Swiss Franc', 'country' => 'Switzerland'],
            ['code' => 'CNY', 'name' => 'Chinese Yuan', 'country' => 'China'],
        ];
        
        $currency = $this->faker->randomElement($currencies);
        
        return [
            'currency_code' => $currency['code'],
            'currency_name' => $currency['name'],
            'currency_country' => $currency['country'],
            'ex_rate' => $this->faker->randomFloat(4, 0.1, 100),
            'active_flag' => $this->faker->boolean(90),
            'creation_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'created_by' => \App\Models\User::factory(),
            'last_modified_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'last_modified_by' => \App\Models\User::factory(),
        ];
    }
}
