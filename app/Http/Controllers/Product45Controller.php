<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product45;

class Product45Controller extends Controller
{
    public function addProducts()
    {
        $products = [
          ["name"=>"Phone"],
          ["name"=>"Tablet"],
          ["name"=>"Laptop"],
          ["name"=>"Watch"],
          ["name"=>"Television"],
          ["name"=>"Freeze"],  
        ];

        Product45::insert($products);
        return "Product has been inserted successFully!";
    }

    public function search()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $datas = Product45::select("name")
                    ->where("name","LIKE","%{$request->terms}%")
                    ->get();
                    return response()->json($datas);
    }
}
