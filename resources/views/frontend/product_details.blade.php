@extends('layouts.frontend_layout')


@section('title')
    Online Marketing - Product Details
@endsection


@section('frontend_content')
    <!--product details-->
    <section class="container product_deatils my-5 py-5">

        <div class="row  mt-5">

            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="{{ asset('img_DB/product/image_one/' . $products->image_one) }}"
                    id="display_img" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="{{ asset('img_DB/product/image_two/' . $products->image_two) }}" width="100%"
                            class="small-img " alt="" onclick="myFunctionimg(this)">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('img_DB/product/image_three/' . $products->image_three) }}" width="100%"
                            class="small-img " alt="" onclick="myFunctionimg(this)">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('img_DB/product/image_four/' . $products->image_four) }}" width="100%"
                            class="small-img " alt="" onclick="myFunctionimg(this)">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('img_DB/product/image_one/' . $products->image_one) }}" width="100%"
                            class="small-img " alt="" onclick="myFunctionimg(this)">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6><a style="text-decoration: none;color:black;" href="{{ url('shop') }}">Shop</a> /
                    {{ $products->category->category_name }}</h6>
                <h2 class="mt-4">{{ $products->product_name }}</h2>
                <h4 class="my-2"> <b>Price: </b>{{ $products->price }} TK</h4>


                {{-- stock or outOfStock --}}{{-- cart,CheckoutController,shop,OrderController --}}
                <div class="my-2">
                    <b>Availability:</b>
                    @if ($products->product_quantity > 0)
                        <label class="badge bg-success" for=""><span>{{ $products->product_quantity }} </span>In
                            Stock</label>
                    @else
                        <label class="badge bg-danger" for="">Out Of Stock</label>
                    @endif
                </div>



                <form action="{{ url('cart_add/' . $products->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="price" value="{{ $products->price }}">
                    <p>
                        <input class="my-2" style="100px!important;" name="qty" value="1" min="1" type="number">
                    </p>

                    {{-- stock or outOfStock --}}
                    @if ($products->product_quantity > 0)
                        <button type="submit" class="buy-btn button-style" style="width: 250px; height:45px; border-radius:4px">Buy Now <i
                                class="fas fa-shopping-cart"></i></button>
                    @endif
                </form>

                <a class="btn my-2 buy-btn button-style" style="background: coral; color:white; width: 250px; height:45px"
                    href="{{ url('add_to_wishlist/' . $products->id) }}" role="button">Wishlist <i
                        class="fas fa-heart"></i></a>

                <p>
                    <a class="btn" style="background: coral; color:white; width: 250px;"
                        href="{{ url('cart') }}" role="button">Cart <i class="fal fa-shopping-bag"></i></a>
                </p>

                <h2 class="mt-5">Product Details</h2>
                <div style="text-align: justify;">
                    <span>{{ $products->description }}</span>
                </div>
            </div>

        </div>

    </section>


    <!--product-->
    <section class="featured my-5 pb-5">

        <div class="container text-center mt-5 py-5">
            <h3><strong>Our Latest Product</strong></h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on Online-Marketing</p>
        </div>


        <div class="row mx-auto container-fluid">
            <ul id="autoWidth" class="cs-hidden">

                @foreach ($lt_products as $product)
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
@endsection
