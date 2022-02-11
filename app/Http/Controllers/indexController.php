<?php

namespace App\Http\Controllers;

use App\Models\price;
use Illuminate\Http\Request;
use App\Models\Announcement;
class indexController extends Controller
{
    public function index(){
        $data=Announcement::orderBy('created_at', 'DESC')->paginate(4);
        $prices=price::all();

        return view('welcome',['announcements'=>$data,'prices'=>$prices]);
    }

}
