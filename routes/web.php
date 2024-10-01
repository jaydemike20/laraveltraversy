<?php

use Illuminate\Support\Facades\Route;


// for views and routing (!dont forget the semicolon)

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function() {
    return response('<h1>Hello World</h1>', 404)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    // die and dump- this will
    dd($id);
    return response('Post' . $id);
})->where('id', '[0-9]+');

