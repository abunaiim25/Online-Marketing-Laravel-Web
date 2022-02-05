<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // after login -> user & admin
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')// 0=>Frontend dashboard home
            {
                return view('frontend.index');
            }else
            {
                //return view('admin.index');
                return view('admin.index');
            }
        }
        else
        {
            return redirect()->back();
        }
        
    }



    
public function index()
{
    $product = Product::latest()->get();
    return view('frontend.index',compact('product'));
}

}


