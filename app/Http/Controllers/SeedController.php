<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SeedController extends Controller
{
    public function index()
    {
        Artisan::call("cache:clear");
        Artisan::call("migrate:fresh");
        Artisan::call("permission:create-role admin");
        Artisan::call("permission:create-role director");
        Artisan::call("permission:create-role supervisor");
        Artisan::call("permission:create-role employee");
        Artisan::call("permission:create-role colaborator");
        Artisan::call("permission:create-role operator");

        Artisan::call("db:seed", ['--class' => 'DatabaseSeeder']);

        return "Generation was successful";
    }
}
