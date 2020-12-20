<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

        public function getSessionData(Request $request)
        {
            if($request->session()->has('name'))
            {
                echo $request->session()->get('name');
            }
            else 
            {
                echo 'No data in the session';
            }
        }

        public function storeSessionData(Request $request)
        {
            $request->session()->put('name', 'Jennifer');
            echo "Data has been added to the sessio";
        }
    
        public function deleteSessionData(Request $request)
        {
            $request->session()->forget('name');
            echo "Data has been removed from the session";
        }
}
