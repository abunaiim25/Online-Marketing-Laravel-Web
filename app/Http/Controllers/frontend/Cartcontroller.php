<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    public function cart_page()
    {
        return view('frontend.cart');
    }
}
