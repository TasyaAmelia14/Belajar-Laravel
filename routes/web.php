<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::redirect('/','/home');
Route::get('/home', [HomeC::class, 'index']);
Route::get('/home', [HomeC::class, 'about']);
Route::get('/home', [HomeC::class, 'contact']);

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