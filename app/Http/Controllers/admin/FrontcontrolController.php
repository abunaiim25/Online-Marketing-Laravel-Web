<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FrontControl;
use Illuminate\Http\Request;

class FrontcontrolController extends Controller
{
    public function admin_front_control()
    {
        $front = FrontControl::first();
        return view('admin.FrontControl',compact('front'));
    }
}
