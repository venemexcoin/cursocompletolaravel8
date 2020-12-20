<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CriptoController extends Controller
{
    public function cotisa() {
        $response = Http::get('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=ETH,EUR,USD,MXN');
        return $response->json();
    }

    public function getCotisaName($name) {
        //dd($name);
        $cotsacion = Http::get(`https://min-api.cryptocompare.com/data/price?fsym=$name&tsyms=ETH,EUR,USD,MXN,BTC`);
        return $cotsacion->json();
    }
}
