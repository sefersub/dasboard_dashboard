<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YayinEvi extends Model
{
    //
    protected $guarded=[];

    static function getField($id,$field)
    {
        $control = YayinEvi::where('id', '=', $id)->count();

        if ($control != "") {
            $w = YayinEvi::where('id', '=', $id)->get();
            return $w[0][$field];
        } else {
            return "Silinmiş Kategori";
        }
    }
}
