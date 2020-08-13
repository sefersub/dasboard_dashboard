<?php
namespace App\Helper;

use Illuminate\Support\Facades\Session;

class sepetHelper
{
    static function add($id,$fiyat,$image,$name)
    {
        $sepet = Session::get('basket');
        $array = [
            'id'=>$id,
            'name'=>$name,
            'image'=>$image,
            'fiyat'=>$fiyat
        ];
        Session::put('basket.'.rand(1,90000),$array);
    }
    static function allList()
    {
        $r=Session::get('basket');
        return $r;
    }
    static function totalPrice()
    {
        $data=self::allList();
        return collect($data)->sum('fiyat');
    }
    static function countData()
    {
        return count(Session::get('basket'));
    }
    static  function remove($id)
    {
        Session::forget('basket.'.$id);
    }
}
