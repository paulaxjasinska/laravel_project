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
        $startDate = '2007-01-01';
        $endDate = '2022-12-31';
        $dateEmployment = $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d');
        return [
            'name' => $this->faker->firstName,
            'last_name' => $lastName,
            'email' => $uniqueFakeEmail,
            'phone_number' => $this->faker->regexify('\d{3}-\d{3}-\d{3}'),
            'date_employment' => $dateEmployment,
            'renumeration' => $this->faker->randomFloat(2, 0, 100),
            'password' => bcrypt('doktor1234'),
            'role' =>'doctor',
            'clinic_id' => Clinic::factory(),
            'remember_token' => Str::random(10),
        ];
    }
}
