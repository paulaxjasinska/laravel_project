<?php

namespace Database\Factories;

use App\Models\Procedure;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clinic;

class ProcedureFactory extends Factory
{
    protected $model = Procedure::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'clinic_id' => Clinic::factory(),
        ];
    }
}
