<?php

namespace Database\Factories;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClinicFactory extends Factory
{
    protected $model = Clinic::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'city' => $this->faker->city,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->unique()->phoneNumber,
        ];
    }
}
