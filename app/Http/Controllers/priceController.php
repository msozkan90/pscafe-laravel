<?php

namespace App\Http\Controllers;

use App\Models\price;
use Illuminate\Http\Request;

class priceController extends Controller
{
    public function price(){
        $prices=price::all();

        return view('prices',['prices'=>$prices]);
    }

}
