<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Factories\Factory;

class ImageFactory extends Factory
{

    /** 

    *@var string

    */
    protected $model = Image::class;

    /** 

    *@return array

    */
    public function definition()
    {
        return[
            'url' => 'coursos/' .$this->faker->image('public/storage/cursos', 649, 480, null, false),
        ];
    }

}