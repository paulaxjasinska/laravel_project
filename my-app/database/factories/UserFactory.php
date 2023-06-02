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
        $lastName = strtolower($this->faker->lastName);
        $domain = 'gmail.com';
        $uniqueFakeEmail = "{$lastName}" . $this->faker->randomNumber() . "@{$domain}";
        return [
            'name' => $this->faker->firstName,
            'last_name' => $lastName,
            'email' => $uniqueFakeEmail,
            'phone_number' => $this->faker->regexify('\d{3}-\d{3}-\d{3}'),
            'seniority' => $this->faker->numberBetween(0,10),
            'renumeration' => $this->faker->randomFloat(2, 0, 100),
            'password' => bcrypt(Str::random(10)),
            'role' => $this->faker->randomElement(['admin', 'doctor']),
            'clinic_id' => Clinic::factory(),
            'remember_token' => Str::random(10),
        ];
    }
}
