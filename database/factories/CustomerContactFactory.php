<?php

namespace Database\Factories;

use App\Enums\ContactType;
use App\Models\CustomerContact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CustomerContact>
 */
class CustomerContactFactory extends Factory
{
    protected $model = CustomerContact::class;

    public function definition(): array
    {
        return [
            'contact_type' => $this->faker->randomElement(array_column(ContactType::cases(), 'value')),
            'contact_name' => $this->faker->name(),
            'designation' => $this->faker->optional()->jobTitle(),
            'email_id' => $this->faker->safeEmail(),
            'contact_no' => $this->faker->phoneNumber(),
            'active_flag' => $this->faker->boolean(90),
        ];
    }
}
