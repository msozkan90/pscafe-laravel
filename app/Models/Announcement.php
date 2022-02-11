<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
     protected  $guarded = [];
   // protected  $fillable = ['title','content','created_at'];


//    static function getField($id,$field)
//    {
//        $c = Announcement::where('id','=',$id)->count();
//
//        if($c!=0)
//        {
//            $w = Announcement::where('id','=',$id)->get();
//            return $w[0][$field];
//        }
//        else
//        {
//            return "Silinmiş Yazar";
//        }
//    }

}
