<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        User::factory(10)->create();
        Post::factory(100)->create();
        Category::factory(10)->create();

        Country::factory(10)->create();
        State::factory(100)->create();
        City::factory(500)->create();

        Image::factory(500)->create();
    }
}
