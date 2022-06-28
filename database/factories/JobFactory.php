<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'jobtitle'=>$this->faker->jobTitle,
            'description'=>$this->faker->text,
            'requirement'=>$this->faker->text,
            'expirence'=>$this->faker->text,
            'salary'=>$this->faker->numberBetween(100,1000),
            'evaluation'=>$this->faker->numberBetween(0,10),

        ];
    }
}
