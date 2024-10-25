<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);  
});


Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    // $posts = post::with(['author', 'category'])->latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(15)->withQueryString()]);
});

route::get('/posts/{post:slug}', function (Post $post) {
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by '. $user->name, 'posts' => $user->posts]);
});

route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' =>' Articles in '. $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});