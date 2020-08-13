<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public  function index()
    {
        $data=Order::paginate(10);
        return view('admin.order.index',['data'=>$data]);
    }
    public function detail($id)
    {
        $control=Order::where("id","=",$id)->count();
        if($control!=0)
        {
            $w=Order::where("id","=",$id)->get();
            return view('admin.order.detail',['data'=>$w]);
        }
        else
        {
            return redirect('/');
        }
    }
}
