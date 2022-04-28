<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // User::truncate();
        Category::truncate();
        // Post::truncate();

        $users = User::factory()->count(3)->create();
        $categories = Category::factory()->count(3)->create();
        foreach ($users as $user) {
            # code...
            $posts = Post::factory()
                ->count(3)
                ->for($user)
                ->create();
        }

        foreach ($categories as $category) {
            # code...
            $posts = Post::factory()
                ->count(2)
                ->for($category)
                ->create();
        }
    }
}
