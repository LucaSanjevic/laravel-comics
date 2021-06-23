<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home')->with('comics', config('comics'));
})->name('home');

Route::get('/single/{id}', function ($id) {
    $comics = config('comics');
    return view('single')->with('comic', $comics[$id]);
})->name('detail');