<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $user = User::factory()->create();

        // $posts = Post::factory()
        //     ->count(3)
        //     ->for($user)
        //     ->create();
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->title(),
            'excerpt' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->sentence()
        ];
    }
}
