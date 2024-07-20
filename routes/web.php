<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return view('home');
// })->name('home');
// Route::get('blog', function() {
//     $posts = [
//         ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
//         ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
//     ];
//     return view('blog', ['posts' => $posts]);
// })->name('blog');
// Route::get('blog/{slug}', function($slug) {
//     $post = $slug;
//     return view('post', ['post' => $post]);
// })->name('post');

// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('blog', [PageController::class, 'blog'])->name('blog');
// Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});
