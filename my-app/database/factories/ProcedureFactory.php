<?php

namespace Database\Factories;

use App\Models\Procedure;
use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProcedureFactory extends Factory
{
    protected $model = Procedure::class;

    public function definition()
    {
        $procedures = [
            [
                'name' => 'Liposuction',
                'description' => 'Liposuction is a procedure that removes excess fat from various areas of the body.'
            ],
            [
                'name' => 'Breast Augmentation',
                'description' => 'Breast augmentation is a procedure that increases the volume of the breasts using implants.'
            ],
            [
                'name' => 'Skin Rejuvenation',
                'description' => 'Skin rejuvenation is a procedure aimed at improving the elasticity and appearance of the skin.'
            ],
            [
                'name' => 'Eyelid Lift',
                'description' => 'Eyelid lift is a surgical procedure that removes excess skin and fat from the eyelids.'
            ],
            [
                'name' => 'Rhinoplasty',
                'description' => 'Rhinoplasty is a plastic surgery procedure that changes the shape and proportions of the nose.'
            ],
            [
                'name' => 'Facial Rejuvenation',
                'description' => 'Facial rejuvenation refers to a set of procedures aimed at improving the appearance of the skin and reducing wrinkles.'
            ],
            [
                'name' => 'Scar Removal',
                'description' => 'Scar removal is a procedure that aims to reduce the visibility of scars on the skin.'
            ],
            [
                'name' => 'Hair Transplantation',
                'description' => 'Hair transplantation is a procedure that involves moving hair from one part of the body to another.'
            ],
            [
                'name' => 'Body Contouring',
                'description' => 'Body contouring is a procedure that aims to shape and improve the body contours.'
            ],
            [
                'name' => 'Breast Reduction',
                'description' => 'Breast reduction is a procedure that involves reducing the volume of the breasts and improving their shape.'
            ]
        ];

        $procedure = $procedures[array_rand($procedures)];

        return [
            'name' => $procedure['name'],
            'description' => $procedure['description'],
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'clinic_id' => Clinic::factory(),
        ];
    }
}
