<?php

use Illuminate\Support\Facades\Route;

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


// ROUTING BASICS
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/welcome', function () {
//     return ['foo' => 'bar'];
// });

// Route::get('/test', function() {

//     return view('test', [
//         'name' => request('name')
//     ]);
// });


// WILD CARDS FOR ROUTING
// Route::get('/posts/{post}', function($post) {
//     $posts = [
//         'my-first-post' => 'This is my first blog post!',
//         'my-second-post' => 'This is my second blog post!'
//     ];

//     if(! array_key_exists($post, $posts)){
//         abort(404, 'This page does not exist, try again');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });
// Route::get('/posts/{post}', 'PostsController@show');

// GET /articles 
// GET /articles/:id
// POST /articles
// PUT /articles/:id
// DELETE /articles/:id

// GET /videos 
// GET /videos/create
// POST /videos
// GET /videos/2
// GET /videos/2/edit
// PUT /videos/2
// DELETE /videos/2


