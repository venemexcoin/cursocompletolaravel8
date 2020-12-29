<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeIndex;

class HomeIndexController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function storehome(Request $request)
    {
        $user_id = $request->User_id; 
        $name = $request->name;
        $description = $request->description;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $homeIndex = new HomeIndex();
        $homeIndex->user_id = \Auth::user()->id;
        $homeIndex->name = $name;
        $homeIndex->description = $description;
        $homeIndex->imggalery = $imageName;
        $homeIndex->save();
        return back()->with('home_added','home record has been inserted');
        
    }
}
