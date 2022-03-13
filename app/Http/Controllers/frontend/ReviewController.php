<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    
    public function reviewadd($id)
    {
        $product = Product::find($id);
         return view('frontend.review',compact('product'));
    }



    
    public function reviewcreate(Request $request)
    {
        $product_id = $request->input('product_id');
        $user_review = $request->input('user_review');
            $new_review = Review::create([
                'user_id' => Auth::id(),
                'prod_id' => $product_id,
                'user_review' => $user_review
            ]);

            if($new_review)
            {
                return redirect('shop')->with('status',"Thank you for writing a review");
            }

    }



    public function editreview($product_slug)
    {
        $product = Product::where('slug', $product_slug)->where('status', '0')->first();

        if($product)
        {
            $product_id = $product->id;
            $review = Review::where('user_id', Auth::id())->where('prod_id', $product_id)->first();
            if($review)
            {
                return view('frontend.reviews.edit',compact('review'));
            }
            else
            {
                return redirect()->back()->with('status', "The link you followed was broken");

            }
            
        } else
        {
            return redirect()->back()->with('status', "The link you followed was broken");

        }
    }



    public function update(Request $request)
{
    $user_review = $request->input('user_review');
    if($user_review != '')
    {
        $review_id = $request->input('review_id');
        $review = Review::where('id', $review_id)->where('user_id',Auth::id())->first();

        if($review)
        {
            $review->user_review = $request->input('user_review');
            $review->update();
            return redirect('category/'.$review->product->category->slug.'/'.$review->product->slug)->with('status', "Review Update Successfully");
        }
        else
        {
            return redirect()->back()->with('status', "The link you followed was broken");

        }
    }else
    {
        return redirect()->back()->with('status', "You can not submit an empty review");

    }
}
}
