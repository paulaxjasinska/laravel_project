<?php

namespace Database\Factories;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClinicFactory extends Factory
{
    protected $model = Clinic::class;

    public function definition()
    {
        $clinicName = strtolower($this->faker->word);
        $domain = 'gmail.com';
        $uniqueFakeEmail = "{$clinicName}" . "@{$domain}";
        return [
            'name' => $clinicName,
            'city' => $this->faker->city,
            'email' => $uniqueFakeEmail,
            'phone_number' => $this->faker->regexify('\d{3}-\d{3}-\d{3}'),
        ];
    }
}
