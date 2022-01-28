<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class tbl_detailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_product' => $this->faker->sentence(mt_rand(2,10)),
            'description' => $this->faker->paragraph(),
        ];
    }
}
