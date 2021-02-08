<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PruebaController extends Controller
{
    public function getAllPrueba()
    {
        
            $response = Http::get('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=ETH,EUR,USD,MXN&api_key=6dba1ec3ae2979e468c477b43e2d049184c531f8f58b10d0bf47fc6e4e7bfa16 ');
            return $response->json();
        
    }

    public function getallUsd()
    {
        $response = Http::get('https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=ETH,EUR,BTC,MXN&api_key=6dba1ec3ae2979e468c477b43e2d049184c531f8f58b10d0bf47fc6e4e7bfa16' );
            return $response->json();
    }

    public function getPruebaById($name)
    {
        $saldo = Http::get('https://min-api.cryptocompare.com/data/price?fsym='.$name.'&tsyms=ETH,EUR,USD,MXN&api_key=6dba1ec3ae2979e468c477b43e2d049184c531f8f58b10d0bf47fc6e4e7bfa16 ');
        return $saldo->json();
    }

    public function addsaldo($name2)
    {
        $saldo2 = Http::get('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=ETH,EUR,USD,MXN&api_key=6dba1ec3ae2979e468c477b43e2d049184c531f8f58b10d0bf47fc6e4e7bfa16 ,'.$name2);
        return $saldo2->json();
    }


    public function index()
    {
        return view('prueba.Index');
    }
}
 