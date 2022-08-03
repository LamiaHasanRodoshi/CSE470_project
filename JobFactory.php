<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
//use App\Models\User;
//use App\Models\Company;

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
        //$faker = Faker::create();
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
