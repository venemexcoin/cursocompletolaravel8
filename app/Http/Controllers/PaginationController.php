<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class PaginationController extends Controller
{
    
        public function allUsers()
        {
            $users = Usuario::paginate(10);
            return view('users', compact('users'));
        }
    
}
