<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Siga participando';  
    }

    public function user() {
        $name = 'Jeninifer';
        $users = array(
            "name"  => "Charli Mata",
            "email" => "charli@gmail.com",
            "phone" => "5458365965"
        );
        return view('user', compact('name', 'users'));   
    }
}
