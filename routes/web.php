<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});
Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{post:slug}', [PostController::class,'show']);

// Route::get('/posts', function () {
//     return view('posts.index', [
//         'posts' => Post::filter(request(['search','category','author']))->latest()->get()
//     ]);
// });

// Route::get('/posts/{post:slug}', function (Post $post) {
//     $relatedPosts = Post::where('category_id', $post->category_id)
//         ->where('id', '!=', $post->id)
//         ->latest()
//         ->take(4)
//         ->get();

//     return view('posts.show', [
//         'post' => $post,
//         'relatedPosts' => $relatedPosts
//     ]);
// });

// Route::get('/authors/{user:username}', function (User $user) {
//     return view('posts.index', [
//         'posts' => $user->posts,
//         'title' => 'Sort By Author',
//         'subtitle' => 'By ' . $user->name,
//         'count' => count($user->posts) . ' Posts',
//     ]);
// });

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts.index', [
//         'posts' => $category->posts,
//         'title' => 'Sort By Category',
//         'subtitle' => 'In ' . $category->name,
//         'count' => count($category->posts) . ' Posts',
//     ]);
// });

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
