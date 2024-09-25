<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'ホームページ']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'ブログ', 'posts' => Post::all() ]);
});

Route::get('/posts/{post:slug}', function(Post $post){    

        return view('post', ['title' => 'Single Post', 'post' =>  $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'コンタクトページ']);
});

Route::get('/about', function () {
    return view('about', ['title' => '自分について', 'nama' => 'ジェレミー・ジェームス']);
});