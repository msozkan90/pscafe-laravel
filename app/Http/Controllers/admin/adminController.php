<?php

namespace App\Http\Controllers\admin;

use App\Helper\imageUpload;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\price;
use App\Models\sss;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    public function dashboard()
    {
        $data = Announcement::paginate(10);
        return view('admin_panel.index_admin', ['announcements' => $data]);
    }

    public function announcement_edit($id)
    {
        $data2 = Announcement::paginate(10);
        $c = Announcement::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Announcement::where('id', '=', $id)->get();
            return view('admin.announcement.edit', ['data' => $data,'announcements' => $data2]);
        } else {
            return redirect('admin.dashboard');
        }
    }

    public function announcement_update(Request $request)
    {
        $id = $request->route('id');
        $c = Announcement::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Announcement::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['image'] = imageUpload::singleUploadUpdate(rand(1, 9000), "announcements", $request->file('image'), $data, "image");
            $update = Announcement::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Duyuru Düzenlendi');
            } else {
                return redirect()->back()->with('status', 'Duyuru Düzenlenemedi');
            }
        } else {
            return redirect('admin.dashboard');
        }
    }

    public function announcement_delete($id)
    {
        $c = Announcement::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = Announcement::where('id', '=', $id)->delete();
            $messages = 'Duyuru Başarı ile Silinmiştir.';
            return redirect('admin/dashboard')->with('status', 'Duyuru Başarılı Bir Şekilde Silindi');
        } else {
            return redirect()->back()->with('status', 'Duyuru  Silme İşlemi Başarısız');
        }
    }

    public function announcement_add()
    {
        $data = Announcement::all();
        return view('admin.announcement.add', ['announcements' => $data]);
    }

    public function announcement_store(Request $request)
    {
        if ($request['image'] !== null) {
            $all = $request->except('_token');
            $all['image'] = imageUpload::singleUpload(rand(1, 19000), "announcements", $request->file('image'));
            $insert = Announcement::create($all);
        } else {
            $request['image'] = 'images/announcements/250/2510.jpg';
            $all = $request->except('_token');
            $insert = Announcement::create($all);
        }
        if ($insert) {
            return redirect()->back()->with('status', 'Duyuru Eklendi');
        } else {
            return redirect()->back()->with('status', 'Duyuru Eklenemedi');
        }
    }

    public function mail_dashboard()
    {
        $data = \App\Models\mail::paginate(5);
        return view('admin.mail.dashboard', ['announcements' => $data]);
    }

    public function mail_delete($id)
    {
        $c = \App\Models\mail::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = \App\Models\mail::where('id', '=', $id)->delete();
            $messages = 'Duyuru Başarı ile Silinmiştir.';
            return redirect()->back()->with('status', 'Mail Başarılı Bir Şekilde Silindi');
        } else {
            return redirect()->back()->with('status', 'Mail  Silme İşlemi Başarısız');
        }
    }


    public function prices_dashboard()
    {
        $data = price::paginate(10);
        return view('admin.prices.dashboard', ['announcements' => $data]);
    }
    public function prices_edit($id)
    {
        $data2 = price::paginate(10);
        $c = price::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = price::where('id', '=', $id)->get();
            return view('admin.prices.edit', ['data' => $data,'announcements' => $data2]);
        } else {
            return redirect('admin.prices.dashboard');
        }
    }
    public function prices_update(Request $request)
    {
        $id = $request->route('id');
        $c = price::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = price::where('id', '=', $id)->get();
            $all = $request->except('_token');

            $update = price::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Fiyat Düzenlendi');
            } else {
                return redirect()->back()->with('status', 'Fiyat Düzenlenemedi');
            }
        } else {
            return redirect('admin.prices.dashboard');
        }
    }
    public function prices_delete($id)
    {
        $c = price::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = price::where('id', '=', $id)->delete();
            $messages = 'Fiyat Başarı ile Silinmiştir.';
            return redirect('admin/prices')->with('status', 'Fiyat Başarılı Bir Şekilde Silindi');
        } else {
            return redirect()->back()->with('status', 'Fiyat  Silme İşlemi Başarısız');
        }
    }
    public function prices_add()
    {
        $data = price::all();
        return view('admin.prices.add', ['announcements' => $data]);
    }
    public function prices_store(Request $request)
    {

        $all = $request->except('_token');
        $insert = price::create($all);

        if ($insert)
        {
        return redirect()->back()->with('status', 'Fiyat Eklendi');
        }

        else
        {
            return redirect()->back()->with('status', 'Fiyat Eklenemedi');
        }
        }


    public function sss_dashboard(){
        $data = sss::paginate(6);
        return view('admin.sss.dashboard',['announcements'=>$data]);
    }
    public function sss_edit($id){
        $data2 = sss::paginate(6);
        $c = sss::where('id','=',$id)->count();
        if($c!=0) {
            $data = sss::where('id', '=', $id)->get();
            return view('admin.sss.edit', ['data' => $data,'announcements'=>$data2]);
        }
        else
        {
            return redirect('admin.sss.dashboard');
        }
    }
    public function sss_update(Request $request)
    {
        $id = $request->route('id');
        $c = sss::where('id','=',$id)->count();
        if($c!=0)
        {
            $data = sss::where('id','=',$id)->get();
            $all = $request->except('_token');
            $update = sss::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect()->back()->with('status','Soru Düzenlendi');
            }
            else
            {
                return redirect()->back()->with('status','Soru Düzenlenemedi');
            }
        }
        else
        {
            return redirect('admin.sss.dashboard');
        }
    }
    public function sss_delete($id){
        $c = sss::where('id','=',$id)->count();
        if($c!=0)
        {
            $delete = sss::where('id','=',$id)->delete();
            $messages = 'Soru Başarı ile Silinmiştir.';
            return redirect('admin/sss')->with('status', 'Soru Başarılı Bir Şekilde Silindi');
        }
        else
        {
            return redirect()->back()->with('status', 'Soru  Silme İşlemi Başarısız');
        }
    }
    public function sss_add(){
        $data = sss::all();
        return view('admin.sss.add',['announcements'=>$data]);
    }
    public function sss_store(Request $request){

            $all = $request->except('_token');
            $insert = sss::create($all);

        if($insert)
        {
            return redirect()->back()->with('status','Soru Eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Soru Eklenemedi');
        }
    }


    public function users_dashboard(){
        $data = \App\Models\User::paginate(10);
        return view('admin.users.dashboard',['announcements'=>$data]);
    }
    public function users_edit($id){
        $c = \App\Models\User::where('id','=',$id)->count();
        if($c!=0) {
            $data = \App\Models\User::where('id', '=', $id)->get();
            return view('admin.users.edit', ['data' => $data]);
        }
        else
        {
            return redirect('admin.users.dashboard');
        }
    }
    public function users_update(Request $request)
    {
        $id = $request->route('id');
        $c = \App\Models\User::where('id','=',$id)->count();
        if($c!=0)
        {
            $data = \App\Models\User::where('id','=',$id)->get();
            $all = $request->except('_token');
            $update = \App\Models\User::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect()->back()->with('status','Kullanıcı Düzenlendi');
            }
            else
            {
                return redirect()->back()->with('status','Kullanıcı Düzenlenemedi');
            }
        }
        else
        {
            return redirect('admin.users.dashboard');
        }
    }
    public function users_delete($id){
        $c = \App\Models\User::where('id','=',$id)->count();
        if($c!=0)
        {
            $delete = \App\Models\User::where('id','=',$id)->delete();
            $messages = 'Kullanıcı Başarı ile Silinmiştir.';
            return redirect()->back()->with('status','Kullanıc Başarılı Bir Şekilde Silindi');
        }
        else
        {
            return redirect('/');
        }
    }
    public function users_add(){
        $data = \App\Models\User::all();
        return view('admin.users.add',['announcements'=>$data]);
    }
    public function users_store(Request $request){
            $all = $request->except('_token');
            $insert = \App\Models\User::create($all);

        if($insert)
        {
            return redirect()->back()->with('status','Kullanıcı Eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Kullanıcı Eklenemedi');
        }
    }






}
