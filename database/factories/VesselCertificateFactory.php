<?php

namespace Database\Factories;

use App\Enums\CertificateStatus;
use App\Enums\CertificateType;
use App\Models\VesselCertificate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VesselCertificate>
 */
class VesselCertificateFactory extends Factory
{
    protected $model = VesselCertificate::class;

    public function definition(): array
    {
        return [
            'certificate_type' => $this->faker->randomElement(array_column(CertificateType::cases(), 'value')),
            'certificate_ref' => $this->faker->optional()->bothify('CERT-####'),
            'certificate_name' => $this->faker->randomElement(['Safety Management Certificate', 'Ship Registration Certificate', 'Classification Certificate']),
            'issued_by' => $this->faker->optional()->company(),
            'issue_date' => $this->faker->optional()->date(),
            'expiry_date' => $this->faker->optional()->date(),
            'next_renewal' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(array_column(CertificateStatus::cases(), 'value')),
        ];
    }
}
