@extends('layouts.frontend_layout')


@section('title')
    Online Marketing - Home
@endsection


@section('frontend_content')
    <!--Background Image-->
    <section id="home" style=" background-image: url({{ asset('frontend') }}/image/bg2.jpg);">
        <div class="container">
            <h5>NEW ARRIVALES</h5>
            <h1><b><span>Best Price</span> This Year</b></h1>
            <p>Shoomatic offers your very comfortable time<br>on walking and exercises</p>
            <a class="btn text-uppercase  button-style" href="{{ url('shop') }}" role="button">Shop Now</a>
        </div>
    </section>


    <!--Brand-->
    <!--    <section id="brand" class="container">
             <div class="row m-0 py-5">
           <img  class="img-fluid col-lg-2 col-md-4 col-6" src="{{ asset('frontend') }}/image/nike.png" alt="">
            <img  class="img-fluid col-lg-2 col-md-4 col-6 " src="{{ asset('frontend') }}/image/nike.png" alt="">
             <img  class="img-fluid col-lg-2 col-md-4 col-6 " src="{{ asset('frontend') }}/image/nike.png" alt="">
           <img  class="img-fluid col-lg-2 col-md-4 col-6 " src="{{ asset('frontend') }}/image/nike.png" alt="">
             <img  class="img-fluid col-lg-2 col-md-4 col-6 " src="{{ asset('frontend') }}/image/nike.png" alt="">
              </div>
               </section>
             -->


    <!--product-->
    <section class="featured my-5 pb-5">

        <div class="container text-center mt-5 py-5">
            <h3><strong>Our Latest Product</strong></h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on Online-Marketing</p>
        </div>


        <div class="row mx-auto container-fluid">
            <ul id="autoWidth" class="cs-hidden">

                @foreach ($products as $product)
                    <li class="item-a">
                        <div class="product text-center " style="width: 300px;">
                            <a href="{{ url('product_details/' . $product->id) }}">
                                <img class="img-fluid mb-3"
                                    src="{{ asset('img_DB/product/image_one/' . $product->image_one) }}" alt="">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h3>{{ $product->product_name }}</h3>
                                <h6 class="p-price">Price: {{ $product->price }} TK</h6>
                                <button class="buy-btn button-style">Details</button>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!--product-->






    <!--new-->
    <section id="new" class="w-100 pb-3">
        <div class="row p-0 m-0 ">

            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="{{ asset('frontend') }}/image/shoe.jpg" alt="">
                <div class="details">
                    <h2>Extream Rate Sneakers</h2>
                    <a href="{{ url('shop') }}">Shopping Here</a>
                </div>
            </div>

            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="{{ asset('frontend') }}/image/watch.jpg" alt="">
                <div class="details">
                    <h2>Extream Rate Sneakers</h2>
                    <a href="{{ url('news') }}">News Here</a>
                </div>
            </div>

            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="{{ asset('frontend') }}/image/shoe.jpg" alt="">
                <div class="details">
                    <h2>Extream Rate Sneakers</h2>
                    <a href="{{ url('contact') }}">Contact Here</a>
                </div>
            </div>

        </div>
    </section>



    <!--product-->
    <div class="mt-5">

        <div class="container text-center mt-5 py-5">
            <h3><strong>Our Latest Product</strong></h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on Online-Marketing</p>
        </div>

        <div class="row mx-auto ">

            @foreach ($products_old as $product)
                <div class="product text-center col-lg-3 col-md-6 col-12">
                    <a href="{{ url('product_details/' . $product->id) }}">
                        <img class="img-fluid mb-3" src="{{ asset('img_DB/product/image_one/' . $product->image_one) }}"
                            alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>{{ $product->product_name }}</h3>
                        <h6 class="p-price">Price: {{ $product->price }} TK</h6>
                        <button class="buy-btn button-style">Details</button>
                    </a>
                </div>
            @endforeach

        </div>

    </div>




    <!--banner-->
    <section id="banner" class="mt-5 pt-5"
        style=" background-image: url({{ asset('frontend') }}/image/shopping2.jpg);">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection<br>UP TO 20% OFF</h1>
            <a class="btn text-uppercase  button-style" href="{{ url('shop') }}" role="button">Shop Now</a>
        </div>
    </section>
@endsection
