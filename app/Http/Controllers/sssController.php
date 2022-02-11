<?php

namespace App\Http\Controllers;

use App\Models\sss;
use Illuminate\Http\Request;

class sssController extends Controller
{
    public function sss(){
        $data= sss::all();
        return view('sss',['questions'=>$data]);
    }
}
