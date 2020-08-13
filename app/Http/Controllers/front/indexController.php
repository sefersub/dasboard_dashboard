<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
    public  function index()
    {
        return view('front.index');
    }
}
