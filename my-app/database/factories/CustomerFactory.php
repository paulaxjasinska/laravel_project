<?php

namespace Database\Factories;
use App\Models\Customer;
use App\Models\Procedure;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        $lastName = strtolower($this->faker->lastName);
        $domain = 'gmail.com';
        $uniqueFakeEmail = "{$lastName}" . $this->faker->randomNumber() . "@{$domain}";
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $uniqueFakeEmail,
            'phone_number' => $this->faker->regexify('\d{3}-\d{3}-\d{3}'),
            'procedure_id' => Procedure::factory(),
            'procedure_price'=>0,
        ];
    }
}
