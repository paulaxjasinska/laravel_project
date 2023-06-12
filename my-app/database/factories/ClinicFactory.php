<?php

namespace Database\Factories;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClinicFactory extends Factory
{
    protected $model = Clinic::class;

    public function definition()
    {
        $clinicNames = [
            'Beauty Med Clinic',
            'Aesthetic Center',
            'Cosmetic Surgery Clinic',
            'Rejuvenation Institute',
            'Glamour Med Spa',
            'Elegant Plastic Surgery',
            'Youthful Image Clinic',
            'Sculpture Aesthetics',
            'Renewal Wellness Center',
            'Harmony Plastic Surgery',
            'Radiant Skin Clinic',
            'DreamBody Clinic',
            'Revive Beauty Institute',
            'Perfect Contours Center',
            'Elite Rejuvenation Clinic',
            'Aesthetica Med Group',
            'Natural Beauty Clinic',
            'Timeless Appearance Center',
            'Serene Med Spa',
            'Flawless Skin Institute'
        ];

        $clinicName = $this->faker->randomElement($clinicNames);
        $clinicNameSlug = strtolower(str_replace(' ', '', $clinicName));
        $domain = 'gmail.com';
        $uniqueFakeEmail = "{$clinicNameSlug}@{$domain}";

        return [
            'name' => $clinicName,
            'city' => $this->faker->city,
            'email' => $uniqueFakeEmail,
            'phone_number' => $this->faker->regexify('\d{3}-\d{3}-\d{3}'),
        ];
    }
}
