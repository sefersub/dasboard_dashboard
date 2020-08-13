<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yazarlar extends Model
{
    //
    protected $guarded=[];

    static function getField($id,$field)
    {
        $control=Kitaplar::where("id","=",$id)->count();
            if($control!=0)
            {
                $w=Kitaplar::where("id","=",$id)->get();
                return $w[0][$field];
            }
            else
            {
                return "Silinmiş Data";
            }
    }
}
