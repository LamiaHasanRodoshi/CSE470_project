<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
//use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'user_id' =>$this->faker->unique()->numberBetween(100, 500),
            'c_name' => $this->faker-> company,
            'address' => $this->faker-> address,
            'phone'  => $this->faker-> phoneNumber,
            'website'  => $this->faker-> domainName,
            'logo'  => 'avatar/logo.png',
            'cover_photo'  => 'cover/coverpic.png',
            'slogan'  => 'Learn-Earn and Grow',
            'description'  => $this->faker->paragraph(rand(2,10)),
        ];
    }
}
