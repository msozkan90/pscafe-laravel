<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function Announcement(){
        $data=Announcement::paginate(9);
        return view('announcement',['announcements'=>$data]);
    }
    public function Announcement_getdata(Request $request){
        $all = $request;
        return $all;

    }
    public function single_announcement($id){
        $data=Announcement::where('id','=', $id)->get();
        return view('announcement-detail',['announcements'=>$data]);
    }
}
