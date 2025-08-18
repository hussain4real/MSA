<?php

namespace Database\Factories;

use App\Enums\ApprovalStatus;
use App\Enums\VendorStatus;
use App\Enums\VendorType;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vendor>
 */
class VendorFactory extends Factory
{
    protected $model = Vendor::class;

    public function definition(): array
    {
        return [
            'vendor_code' => strtoupper($this->faker->unique()->bothify('VEND########')),
            'legal_name' => $this->faker->company(),
            'trade_name' => $this->faker->companySuffix(),
            'vendor_type' => $this->faker->randomElement(array_column(VendorType::cases(), 'value')),
            'registration_no' => $this->faker->optional()->bothify('REG#######'),
            'tax_number' => $this->faker->optional()->bothify('TAX########'),
            'address' => $this->faker->optional()->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'primary_contact' => $this->faker->name(),
            'primary_email' => $this->faker->companyEmail(),
            'contact_no' => $this->faker->phoneNumber(),
            'bank_name' => $this->faker->optional()->company(),
            'bank_account' => $this->faker->optional()->iban('GB'),
            'swift_code' => strtoupper($this->faker->bothify('SWIFT########')),
            'payment_terms' => $this->faker->randomElement(['NET 30', 'NET 45', 'NET 60']),
            'payment_currency' => $this->faker->randomElement(['USD', 'EUR', 'SAR', 'AED']),
            'status' => $this->faker->randomElement(array_column(VendorStatus::cases(), 'value')),
            'approval_status' => $this->faker->randomElement(array_column(ApprovalStatus::cases(), 'value')),
        ];
    }
}
