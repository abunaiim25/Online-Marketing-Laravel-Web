@extends('layouts.frontend_layout')


@section('title')
Online Marketing - Product Details
@endsection


@section('frontend_content')


   <!--product details-->
   <section class="container product_deatils my-5 py-5">

    <div class="row  mt-5">

        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="{{ asset('frontend') }}/image/shoe2.jpg" id="display_img" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="{{ asset('frontend') }}/image/shoe2.jpg" width="100%" class="small-img " alt="" onclick="myFunctionimg(this)">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('frontend') }}/image/t2.png" width="100%" class="small-img "  alt="" onclick="myFunctionimg(this)">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('frontend') }}/image/shoe.jpg" width="100%" class="small-img " alt="" onclick="myFunctionimg(this)">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('frontend') }}/image/shoe1.jpg" width="100%" class="small-img " alt="" onclick="myFunctionimg(this)">
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-12">
            <h6>Home / T-Shart</h6>
            <h3 >Men's fashion T Shirt</h3>
            <h2>$139.00</h2>
            <select style="width: 150px;" class="my-3">
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input  style="width: 80px;"  type="number" value="1">
            <button class="buy-btn button-style">Add To Cart <i class="fas fa-shopping-cart"></i></button>
            <button class="buy-btn button-style">Wishlist <i class="fas fa-heart"></i></button>
            <h4 class="my-5">Product Details</h4>
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio dolore, cumque beatae expedita et
                laborum quisquam facilis fugit in harum minus illo inventore molestiae quibusdam praesentium illum,
                saepe autem aperiam!</span>
        </div>

    </div>

</section>



   <!--product-->
   <section class="featured my-5 pb-5">

    <div class="container text-center mt-5 py-5">
      <h3><strong>Related Product</strong></h3>
      <hr class="mx-auto">
    </div>

    <div class="row mx-auto container-fluid">

     <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/shoe2.jpg"  alt="">
        <div class="star">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn button-style">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
       <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/shoe1.jpg" alt="">
       <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
       </div>
       <h5>Sport Boots</h5>
       <h4 class="p-price">$92.00</h4>
       <button class="buy-btn button-style">Buy Now</button>
     </div>

     <div class="product text-center col-lg-3 col-md-6 col-12">
       <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/shoe2.jpg" alt="">
       <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
       </div>
       <h5>Sport Boots</h5>
       <h4 class="p-price">$92.00</h4>
       <button class="buy-btn button-style">Buy Now</button>
     </div>

     <div class="product text-center col-lg-3 col-md-6 col-12">
       <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/shoe1.jpg" alt="">
       <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
       </div>
       <h5>Sport Boots</h5>
       <h4 class="p-price">$92.00</h4>
       <button class="buy-btn button-style">Buy Now</button>
     </div>

    </div>

  </section>

@endsection