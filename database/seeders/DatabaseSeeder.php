<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\News;
use Illuminate\Database\Seeder;

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
        Blog::factory(6)->create();
        News::factory(3)->create();
    }
}
