<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
   
    // --------------------- add product ------------------ 
    public function add_product(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('admin.product.add',compact('categories','brands'));
    }

    // ===================== store products ================== 
    public function store(Request $request){

        $products=new Product;

        if($request->hasFile('image_one'))
        {
            $file= $request->file('image_one');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_one/',$filename);
            $products->image_one = $filename;
        }
        if($request->hasFile('image_two'))
        {
            $file= $request->file('image_two');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_two/',$filename);
            $products->image_two = $filename;
        }
        if($request->hasFile('image_three'))
        {
            $file= $request->file('image_three');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_three/',$filename);
            $products->image_three = $filename;
        }
        if($request->hasFile('image_four'))
        {
            $file= $request->file('image_four');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_four/',$filename);
            $products->image_four = $filename;
        }

        $products->product_name=$request->product_name;
        $products->product_code=$request->product_code;
        $products->price=$request->price;
        $products->product_quantity=$request->product_quantity;
        $products->category_id=$request->category_id;
        $products->brand_id=$request->brand_id;
        $products->description=$request->description;
        $products->product_slug=$request->product_slug;
       
        $products->save();
        return Redirect('admin_products_manage')->with('success','Product Added Successfully');

    }


       // ======================== manage products ======================== 
       public function manage_product(){
        //or=== $products = Product::latest()->get();
        $products = Product::orderBy('id','DESC')->get();
        return view('admin.product.manage',compact('products'));
    }

    // ======================== edit product =========== 
    public function edit($id){
        //if findORFail use, do not show error
        $product = Product::findOrFail($id);
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('admin.product.edit',compact('product','categories','brands'));
    }


    // ======================== update data =========================== 
    public function update(Request $request,$id){

        $products= Product::find($id);

        if($request->hasFile('image_one'))
        {
            $file= $request->file('image_one');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_one/',$filename);
            $products->image_one = $filename;
        }
        if($request->hasFile('image_two'))
        {
            $file= $request->file('image_two');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_two/',$filename);
            $products->image_two = $filename;
        }
        if($request->hasFile('image_three'))
        {
            $file= $request->file('image_three');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_three/',$filename);
            $products->image_three = $filename;
        }
        if($request->hasFile('image_four'))
        {
            $file= $request->file('image_four');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/product/image_four/',$filename);
            $products->image_four = $filename;
        }

        $products->product_name=$request->product_name;
        $products->product_code=$request->product_code;
        $products->price=$request->price;
        $products->product_quantity=$request->product_quantity;
        $products->category_id=$request->category_id;
        $products->brand_id=$request->brand_id;
        $products->description=$request->description;
        $products->product_slug=$request->product_slug;
       
        $products->update();
        return Redirect('admin_products_manage')->with('success','Product Update Successfully');
    }


      // ============= delete product ============= 
      public function Delete ($id)
      {

        $image = Product::findOrFail($id);

         $img_one = public_path('frontend/img/product/'.$image->image_one);
         if (is_file($img_one)){
         unlink($img_one);
        }
        $img_two = public_path('frontend/img/product/'.$image->image_two);
        if (is_file($img_two)){
        unlink($img_two);
       }
       $img_three = public_path('frontend/img/product/'.$image->image_three);
       if (is_file($img_three)){
       unlink($img_three);
      }
      $img_four = public_path('frontend/img/product/'.$image->image_four);
      if (is_file($img_four)){
      unlink($img_four);
     }

/*
   // $deletelogo->delete();
       //img remove from vscode
        $image = Product::findOrFail($id);
        $img_one = $image->image_one;
        $img_two = $image->image_two;
        $img_three = $image->image_three;
        $img_four = $image->image_four;
        unlink($img_one);
        unlink($img_two);
        unlink($img_three);
        unlink($img_four);
*/
        Product::findOrFail($id)->delete();
        return Redirect()->back()->with('delete','Product Successfully Deleted');
    }

    // status inactive 
    public function Inactive($id){
        Product::findOrFail($id)->update(['status' => 0]);
        return Redirect()->back()->with('status_inactive','Product Inactive');
    }

    
    // status active 
    public function Active($id){
        Product::findOrFail($id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Product Activated');
    }
}
