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

Route::get('/', function () {
    $user = ['name' => 'tasya', 'role' => 'admin'];
    return view('pages.home', $user);
});

Route::redirect('home', '/');

Route::get('/about', function (){
    $user = ['name' => 'amelia', 'role' => 'admin'];
    return view('pages.about', $user);
});

Route::get('/contact', function (){
    $data = [
        "person" => ["T", "A", "S", "Y", "A"]
    ];
    return view('pages.contact', $data);
});