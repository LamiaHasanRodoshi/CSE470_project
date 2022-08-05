<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
            return [
            'user_id'=>$this->faker->unique()->numberBetween(100, 500),
            'email' =>$this->faker->unique()->safeEmail,
            'address'=>$this->faker-> address,
            'gender'=>$this->faker->randomElement(['male', 'female']),
            'dob'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'experience'=>$this->faker->paragraph(rand(2,10)),
            'bio'=>$this->faker->text,
            'cv'=>$this->faker->text,
            'avatar'=>'avatar/person.png',
            'academic certificates'=>$this->faker->text,
            'skills'=>$this->faker->text,
            'resume'=>$this->faker->text,
            
            
        ];
    }
}
