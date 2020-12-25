<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post2Controller extends Controller
{
    public function addPost()
    {
        return view('add-post2');
    }
}
