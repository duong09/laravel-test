<?php

namespace Database\Seeders;

use \App\Models\Category;
use \App\Models\Post;
use \App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Category::truncate();

        // Category::factory()->create([
        //     'name' => 'Product',
        //     'slug' => 'product'
        // ]);

        // Category::factory()->create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobby'
        // ]);

        // Category::factory()->create([
        //     'name' => 'Job',
        //     'slug' => 'job'
        // ]);

        
        $users = User::factory()->count(3)->create();
        $category = Category::factory()->count(4)->create();
        foreach ($users as $user) {
            # code...
            Post::factory()
            ->count(4)
            ->for($user)
            ->create();
        }
        
          
    }
}
