<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home',[
        'title'=>'Home Page'
    ]);
});

Route::get('/posts', function () {
    $posts = Post::filter(request(['search','category','author']))->latest()->simplePaginate(4)->withQueryString();
    // $posts = Post::filter(request(['search','category','author']))->latest()->paginate(5)->withQueryString();

    // if(request('search')){
    //     $posts->where('title','like','%' . request() . '%');
    // }

    return view('posts',[
        'title'=>'Blog',
        'posts'=> $posts
    ]);
});
Route::get('/posts/{post:slug}',function(Post $post){
    return view('post',[
        'title'=>'Single Post',
        'post'=>$post
    ]);
});
Route::get('/authors/{user:username}',function(User $user){
    // dd("t");
    return view('posts',[
        'title'=>'Articles by '.$user->name,
        'posts'=>$user->posts
    ]);
});
Route::get('/categories/{category:slug}',function(Category $category){
    // dd("t");
    return view('posts',[
        'title'=>'Articles in: '.$category->name,
        'posts'=>$category->posts
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
