<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use Illuminate\Validation\Rules\Exists;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('posts/{post:slug}', function(Post $post) {

    // $post = Post::find($id);
    return view('post', [
        'post' => $post
    ]);   
}); 

Route::get('/categories/{category:name}', function(Category $category) {

    // $posts = Post::all();
    return view('posts', [
        'posts' => $category->posts->load(['category','user'])
    ]); 
});

Route::get('/', function() {
    // $posts = Post::with('category')->get();
    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category','user'])
    ]);
});