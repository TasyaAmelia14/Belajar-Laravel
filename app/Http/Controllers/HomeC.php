<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentM;

class HomeC extends Controller
{
    public function index(){
        $user = ['name' => 'amelia', 'role' => 'admin'];
    return view('pages.home', $user);
    }

    public function about(){
        $user = ['name' => 'amelia', 'role' => 'admin'];
        return view('pages.about', $user);
    }

    public function contact(){
        $data = [
            "person" => ["T", "A", "S", "Y", "A"]
        ];
        return view('pages.contact', ['data' => $data]);
    }
}

