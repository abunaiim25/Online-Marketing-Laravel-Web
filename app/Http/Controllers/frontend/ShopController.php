<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
   public function shop_page()
   {
      $products = Product::where('status', 1)->latest()->paginate(16);
      return view('frontend.shop', compact('products'));
   }


   //===========product_details_page=================
   public function product_details_page($id)
   {
      $products = Product::findOrFail($id);
      $lt_products = Product::where('status', 1)->latest()->get();

      //$qty_product = Product::findOrFail($id)->decrement('product_quantity');
      
      return view('frontend.product_details', compact('products', 'lt_products'));
   }


   //===========product_details_page=================
   public function category_product_show_page($id)
   {
      $products = Product::where('category_id', $id)->latest()->paginate(9);
      return view('frontend.category_product', compact('products'));
   }
}
