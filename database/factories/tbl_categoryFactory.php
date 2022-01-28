<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class tbl_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
               
                'name_category' => $this->faker->sentence(mt_rand(2,4)),
      
        ];
    }
}
