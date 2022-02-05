<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
   public function shop_page()
   {
       return view('frontend.shop');
   }


   //===========product_details_page=================
   public function product_details_page()
   {
       return view('frontend.product_details');
   }
}
