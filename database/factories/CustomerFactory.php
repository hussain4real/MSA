<?php

namespace Database\Factories;

use App\Enums\ApprovalStatus;
use App\Enums\CustomerType;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'customer_code' => strtoupper($this->faker->unique()->bothify('CUST########')),
            'legal_name' => $this->faker->company(),
            'trade_name' => $this->faker->companySuffix(),
            'customer_type' => $this->faker->randomElement(array_column(CustomerType::cases(), 'value')),
            'business_category' => $this->faker->randomElement(['Shipping', 'Logistics', 'Manufacturing', 'Retail']),
            'cr_number' => $this->faker->optional()->bothify('CR#######'),
            'tax_number' => $this->faker->optional()->bothify('TAX########'),
            'address' => $this->faker->optional()->address(),
            'po_box' => $this->faker->optional()->postcode(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'credit_limit' => $this->faker->optional()->randomFloat(2, 1000, 100000),
            'credit_currency' => $this->faker->randomElement(['USD', 'EUR', 'SAR', 'AED']),
            'payment_terms' => $this->faker->randomElement(['NET 30', 'NET 45', 'NET 60']),
            'credit_status' => $this->faker->randomElement(['good', 'average', 'poor']),
            'erp_code' => $this->faker->optional()->bothify('ERP####'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'approval_status' => $this->faker->randomElement(array_column(ApprovalStatus::cases(), 'value')),
        ];
    }
}
