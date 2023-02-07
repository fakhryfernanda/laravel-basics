<?php

use Illuminate\Support\Facades\Route;


// Return view
// Route::get('/', function () {
//     return view('welcome');
// });

// Return view cara kedua
Route::view('/', 'welcome');


// Return string
Route::get('/hello', fn() => 'Hello World');

// Redirect
Route::redirect('/greet', '/hello');

// Route with required parameter
Route::get('/user/{id}', fn($id) => 'User '.$id);

// Route with two paramaters
Route::get('/posts/{post}/comments/{comment}', fn($post, $comment) => 'Post '.$post.' Comment '.$comment);

// Route with optional parameter
Route::get('/product/{id?}', fn($id = null) => 'Product ID: '.$id);