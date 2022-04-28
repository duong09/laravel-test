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
        // $product = Category::create([
        //     'name' => 'Product',
        //     'slug' => 'product'
        // ]);
        // $skill = Category::create([
        //     'name' => 'Skill',
        //     'slug' => 'skill'
        // ]);
        // $job = Category::create([
        //     'name' => 'Job',
        //     'slug' => 'job'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $skill->id,
        //     'title' => 'My First Product',
        //     'slug' => 'my-first-product',
        //     'body' => 'Laravel is a PHP web application framework with expressive, elegant syntax.
        //      We ve already laid the foundation — freeing you to create without sweating'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $job->id,
        //     'title' => 'My First Job',
        //     'slug' => 'my-first-job',
        //     'body' => 'Laravel is a PHP web application framework with expressive, elegant syntax.
        //      We ve already laid the foundation — freeing you to create without sweating'
        // ]);
    }
}
