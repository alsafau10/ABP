<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing.index  ');
});

Route::get('/lat/latihan', function(){
    return view('Latihan.latihan');
});

Route::get('/lat/1', function(){
    return view('Latihan.1');
});

Route::get('/lat/2', function(){
    return view('Latihan.2');
});
Route::get('/lat/3', function(){
    return view('Latihan.3');
});
Route::get('/lat/4', function(){
    return view('Latihan.4');
});