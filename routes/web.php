<?php

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

Route::view('/', 'home');
Route::view('/contents', 'contents');

Route::get('/posts/{id}', function($id) {
    $pages = [
	1 => [
	'title' => 'Post title 1',
	],
	2 => [
        'title' => 'Post title 2',
        ],
     ];
    return view('posts', ['data'=> $pages[$id]]);
});

Route::post('contents', function(){

    $file = request()->file('content')->store('contents', 's3');

    return back();
});
