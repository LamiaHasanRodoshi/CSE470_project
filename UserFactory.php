<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'user_type' => 'seeker',
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
//company faker
// $factory->define(class: App\company::class, data:function (Faker $faker) {
//     return [
//         'user_id' => App\user::all()->random() ->id,
//         'c_name' => $title= $faker-> company,
//         'address' => $faker-> address,
//         'phone'  => $faker-> phoneNumber,
//         'website'  => $faker-> domainName,
//         'logo'  => 'avatar/logo.png',
//         'cover_photo'  => 'cover/coverpic.png',
//         'slogan'  => 'Learn-Earn and Grow',
//         'description'  => $faker->paragraph(rand(2,10)),
//     ];
// });

// //jobsss faker
// $factory->define(class: App\jobsss::class, data:function (Faker $faker) {
//     return [
//         'user_id' => App\user::all()->random() ->id,
//         'company_id' => App\company::all()->random() ->id,
//         'title' => $name = $faker-> text,
//         'roles' => $faker-> text,
//         'description'  => $faker->paragraph(rand(2,10)),
//         'category_id'  => rand(0,1),
//         'position'  => $faker-> jobTitle,
//         'status'  => rand(0,1),
//         'address' => $faker-> address,
//         'type'  => 'Full Time',
        
//     ];
// });


