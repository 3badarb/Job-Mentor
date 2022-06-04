<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usermodel2>
 */
class Usermodel2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'evaluation'=>$this->faker->numberBetween(0,10),
            'salary'=>$this->faker->numberBetween(0,1000),

        ];
    }
}
