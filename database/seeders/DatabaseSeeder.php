<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use App\Models\Profile;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->count(20)->create();
        Company::factory()->count(20)->create();
        Job::factory()->count(20)->create();
        Profile::factory()->count(20)->create();

        //Too old codes 
        //factory("App\Models\Company", 20)-> create();
        //factory("App\Models\Jobsss", 20)-> create();

    }
}
