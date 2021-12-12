<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Project::factory(5)->create();
        \App\Models\Training::factory(5)->create();
        \App\Models\TrainingUser::factory(5)->create();

        $admin = User::create([
            'first_name' => "admin",
            'last_name' => "admin",
            'gender' => 'Muž',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
        ]);
        $admin->assignRole("admin");
    }
}
