<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\userinfo>
 */
class UserinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id'=>User::factory(['tag'=>'U']),
            'about_me'=>$this->faker->realText,
            'education'=>$this->faker->realText,
            'skills'=>$this->faker->text,
            'expirence'=>$this->faker->text,
            'jobtitle'=>$this->faker->jobTitle(),
            'birth'=>$this->faker->date,
            'resident'=>$this->faker->country,
            'from'=>$this->faker->country,
            'phone'=>$this->faker->phoneNumber

        ];
    }
}
