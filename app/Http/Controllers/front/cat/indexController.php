<?php

namespace App\Http\Controllers\front\cat;

use App\Http\Controllers\Controller;
use App\Kategoriler;
use App\Kitaplar;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($selflink)
    {
        $control=Kategoriler::where("selflink","=",$selflink)->count();

        if($control!=0)
        {
            $w=Kategoriler::where("selflink","=",$selflink)->get();
            $data=Kitaplar::where("kategoriid","=",$w[0]['id'])->get();

            return view('front.cat.index',['info'=>$w,'data'=>$data]);
        }
        else
        {
            return redirect('/');
        }
    }
}
