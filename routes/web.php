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

Route::get('/home', function () {

    $data = [
        "name" => "Edoardo",
        "surname" => 'Perucca'
    ];
    return view('home', $data);
});

Route::get('/articles', function () {

    $data = [
        "name" => "Edoardo",
        "surname" => 'Perucca'
    ];
    return view('articles', $data);
});


Route::get('/pricing', function () {

    $data = [
        "name" => "Edoardo",
        "surname" => 'Perucca'
    ];
    return view('pricing', $data);
});
