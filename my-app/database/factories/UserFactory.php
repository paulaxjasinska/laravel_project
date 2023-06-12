<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $firstNames = [
            'Alan', 'Joe', 'Emily', 'Michael', 'Olivia',
            'Sophia', 'William', 'Ava', 'James', 'Emma',
            'Daniel', 'Mia', 'Ethan', 'Isabella', 'Benjamin',
            'Charlotte', 'David', 'Abigail', 'Alexander', 'Grace'
        ];

        $lastNames = [
            'Smith', 'Doe', 'Johnson', 'Brown', 'Davis',
            'Wilson', 'Miller', 'Thomas', 'Jackson', 'White',
            'Harris', 'Martinez', 'Clark', 'Lewis', 'Lee',
            'Anderson', 'Thompson', 'Garcia', 'Robinson', 'Taylor'
        ];
        $firstName = $this->faker->randomElement($firstNames);
        $lastName = $this->faker->randomElement($lastNames);
        $lastNameLower = strtolower($lastName);
        $domain = 'gmail.com';
        $uniqueFakeEmail = "{$lastNameLower}" . $this->faker->numberBetween(0, 999) . "@{$domain}";
        $startDate = '2007-01-01';
        $endDate = '2022-12-31';
        $dateEmployment = $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d');

        return [
            'name' => $firstName,
            'last_name' => $lastName,
            'email' => $uniqueFakeEmail,
            'phone_number' => $this->faker->regexify('\d{3}-\d{3}-\d{3}'),
            'date_employment' => $dateEmployment,
            'renumeration' => $this->faker->randomFloat(2, 1500, 5000),
            'password' => bcrypt('doktor1234'),
            'role' =>'doctor',
            'clinic_id' => Clinic::factory(),
            'remember_token' => Str::random(10),
        ];
    }
}
