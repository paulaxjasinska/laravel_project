<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Clinic;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->unique()->phoneNumber,
            'seniority' => $this->faker->numberBetween(0,10),
            'renumeration' => $this->faker->randomFloat(2, 0, 100),
            'password' => bcrypt(Str::random(10)),
            'role' => $this->faker->randomElement(['admin', 'doctor']),
            'clinic_id' => Clinic::factory(),
            'remember_token' => Str::random(10),
        ];
    }
}
