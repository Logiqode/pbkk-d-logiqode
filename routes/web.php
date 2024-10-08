<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'ホームページ']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'ブログ', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(36)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function(Post $post){    

        return view('post', ['title' => 'Single Post', 'post' =>  $post]);
});

Route::get('/authors/{user:username}', function(User $user){    
        // $posts = $user->posts->load(['author', 'category']);

        return view('posts', ['title' => '「' . $user->name . '」の書いた記事が' . count($user->posts) . '件見つかりました' , 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){    
        // $posts = $category->posts->load(['author', 'category']);

        return view('posts', ['title' => $category->name . 'の記事' , 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'お問い合わせ']);
});

Route::get('/about', function () {
    return view('about', ['title' => '自分について', 'nama' => 'ジェレミー・ジェームス']);
});