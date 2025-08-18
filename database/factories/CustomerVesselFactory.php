<?php

namespace Database\Factories;

use App\Enums\VesselStatus;
use App\Models\CustomerVessel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CustomerVessel>
 */
class CustomerVesselFactory extends Factory
{
    protected $model = CustomerVessel::class;

    public function definition(): array
    {
        return [
            'vessel_code' => strtoupper($this->faker->unique()->bothify('VES########')),
            'vessel_short_code' => strtoupper($this->faker->bothify('VS##')),
            'vessel_name' => $this->faker->unique()->words(2, true),
            'imo_number' => $this->faker->optional()->bothify('IMO########'),
            'vessel_type' => $this->faker->randomElement(['Bulk Carrier', 'Container Ship', 'Tanker', 'Ro-Ro']),
            'flag_state' => $this->faker->country(),
            'gross_tonnage' => $this->faker->optional()->randomFloat(2, 1000, 200000),
            'nett_tonnage' => $this->faker->optional()->randomFloat(2, 500, 150000),
            'dead_wt' => $this->faker->optional()->randomFloat(2, 1000, 300000),
            'overall_length' => $this->faker->optional()->randomFloat(2, 50, 400),
            'beam' => $this->faker->optional()->randomFloat(2, 10, 60),
            'draft' => $this->faker->optional()->randomFloat(2, 5, 25),
            'year_built' => $this->faker->optional()->numberBetween(1970, (int) date('Y')),
            'classification_society' => $this->faker->optional()->randomElement(['DNV', 'Lloyd\'s Register', 'ABS', 'BV']),
            'class_notation' => $this->faker->optional()->bothify('CL-####'),
            'vessel_operator' => $this->faker->optional()->company(),
            'vessel_owner' => $this->faker->optional()->company(),
            'vessel_manager' => $this->faker->optional()->company(),
            'service_type' => $this->faker->optional()->randomElement(['Liner', 'Tramp', 'Charter']),
            'frequency' => $this->faker->optional()->randomElement(['Weekly', 'Bi-Weekly', 'Monthly']),
            'status' => $this->faker->randomElement(array_column(VesselStatus::cases(), 'value')),
        ];
    }
}
