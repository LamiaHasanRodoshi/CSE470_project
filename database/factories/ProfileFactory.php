<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'company_id'=>$this->faker->unique()->numberBetween(100, 500),
            'title'=>$this->faker->text,
            'roles'=> $this->faker->text,
            'description'=>$this->faker->paragraph(rand(2,10)),
            'category_id'=>rand(0,1),
            'position'=>$this->faker->jobTitle,
            'status'  => rand(0,1),
            'address' => $this->faker-> address,
            'type'  => 'Full Time',
        ];
    }
}
