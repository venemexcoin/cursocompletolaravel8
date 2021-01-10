<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post54;

class Post54Controller extends Controller
{
    public function index(Request $request)
    {
        $posts = Post54::paginate(5);
        if($request->ajax()){
            $view = view('data', compact('posts'))->render();
            return response()->json(['thml'=>$view]);
        }
        return view('post54',compact('posts'));
    }
}
