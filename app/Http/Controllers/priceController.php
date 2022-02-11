<?php

namespace App\Http\Controllers;

use App\Models\price;
use Illuminate\Http\Request;

class priceController extends Controller
{
    public function price(){
        $prices=price::all();
//        $all = $data->orderBy('created_at','DESC');
        return view('prices',['prices'=>$prices]);
    }

}
