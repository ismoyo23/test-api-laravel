<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class tbl_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $detail = 1;  
        return [
            
            'id_category_product' => $this->faker->randomDigitNot(0),
            'id_detail_product' => $detail++
        ];
    }
}
