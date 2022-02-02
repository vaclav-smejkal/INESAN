<?php

namespace Database\Seeders;

use App\Models\DataDescription;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'Administrator']);
        Role::firstOrCreate(['name' => 'Director']);
        Role::firstOrCreate(['name' => 'Supervisor']);
        Role::firstOrCreate(['name' => 'Employee']);
        Role::firstOrCreate(['name' => 'Colaborator']);
        Role::firstOrCreate(['name' => 'Operator ']);
        Role::create(['name' => 'Guarantor']);
        Role::create(['name' => 'Solver']);
        Role::create(['name' => 'Co_solver']);
        Role::create(['name' => 'Team_member']);
        Role::create(['name' => 'Assistant_worker']);

        User::factory(5)->create()->each(function ($user) {
            $roles = array('Administrator', 'Director', 'Supervisor', 'Employee', 'Colaborator', 'Operator');
            $user->assignRole(array_rand($roles));
        });

        \App\Models\Project::factory(5)->create();
        \App\Models\Training::factory(5)->create();
        \App\Models\TrainingUser::factory(5)->create();

        $admin = User::create([
            'first_name' => "admin",
            'last_name' => "admin",
            'gender' => 'Muž',
            'email' => 'admin@seznam.cz',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('123'),
        ]);
        $admin->assignRole('Administrator');

        $director = User::create([
            'first_name' => "director",
            'last_name' => "director",
            'gender' => 'Muž',
            'email' => 'director@seznam.cz',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('123'),
        ]);
        $director->assignRole('Director');
    }
}
