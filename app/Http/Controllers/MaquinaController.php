<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MaquinaController extends Controller
{
    public function maquinaId() {
        $maquina = Http::get('https://eth.nanopool.org/api/v1/user/0x1a4be0e9c766407a968f5b55773958871e377bea');
       $a = $maquina;
        return $a->json();
    }

    
}
