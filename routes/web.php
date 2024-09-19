<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home',[
        'title'=>'Home Page'
    ]);
});

Route::get('/posts', function () {
    return view('posts',[
        'title'=>'Blog',
        'posts'=> Post::all()
    ]);
});
Route::get('/posts/{post:slug}',function(Post $post){
    return view('post',[
        'title'=>'Single Post',
        'post'=>$post
    ]);
});
Route::get('/authors/{user:id}',function(User $user){
    // dd("t");
    return view('posts',[
        'title'=>'Articles by '.$user->name,
        'posts'=>$user->posts
    ]);
});

// Route::get('/posts',[PostController::class,'index']);
// Route::get('/posts/{id}',function($id){
//     return view('post',[
//         'title'=>'Blog',
//         'post'=>Arr::first($posts, function($post) use($id){
//             return $post['id']==$id;
//         });
//     ]);
// });

Route::get('/about', function () {
    return view('about',[
        'title'=>'About'
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        'title'=>'Contact'
    ]);
});
