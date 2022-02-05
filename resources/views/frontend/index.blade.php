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
      <button class="button-style">Shop Now</button>
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
        <img  class="img-fluid col-lg-2 col-md-4 col-6 " src="{{ asset('frontend') }}/image/nike.png" alt="">
      </div>
    </section>
-->


  <!--product-->
  <section class="featured my-5 pb-5">

    <div class="container text-center mt-5 py-5">
      <h3><strong>Our Featured</strong></h3>
      <hr class="mx-auto">
      <p>Here you can check out our new product with fair price on Online-Marketing</p>
    </div>

   
    <div class="row mx-auto container-fluid">

      <ul id="autoWidth" class="cs-hidden">

        <li class="item-a">
          <div class="product text-center " style="width: 300px;">
            <a href="{{url('product_details')}}">
              <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/shoe.jpg" alt="">
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
            </a>
          </div>
        </li>
  
        <li class="item-a">
          <div class="product text-center " style="width: 300px;">
            <a href="{{ asset('frontend') }}/html/product_details.html">
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
            </a>
          </div>
        </li>

        <li class="item-a">
          <div class="product text-center " style="width: 300px;">
            <a href="{{ asset('frontend') }}/html/product_details.html">
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
            </a>
          </div>
        </li>

        <li class="item-a">
          <div class="product text-center " style="width: 300px;">
            <a href="{{ asset('frontend') }}/html/product_details.html">
              <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/shoe.jpg" alt="">
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
            </a>
          </div>
        </li>

        <li class="item-a">
          <div class="product text-center " style="width: 300px;">
            <a href="{{ asset('frontend') }}/html/product_details.html">
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
            </a>
          </div>
        </li>

        <li class="item-a">
          <div class="product text-center " style="width: 300px;">
            <a href="{{ asset('frontend') }}/html/product_details.html">
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
            </a>
          </div>
        </li>
  
     
      </ul>

    </div>



  </section>


  <!--new-->
  <section id="new" class="w-100 pb-3">
    <div class="row p-0 m-0 ">

      <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid" src="{{ asset('frontend') }}/image/shoe.jpg" alt="">
        <div class="details">
          <h2>Extream Rate Sneakers</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

      <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid" src="{{ asset('frontend') }}/image/watch.jpg" alt="">
        <div class="details">
          <h2>Extream Rate Sneakers</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

      <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid" src="{{ asset('frontend') }}/image/shoe.jpg" alt="">
        <div class="details">
          <h2>Extream Rate Sneakers</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

    </div>
  </section>



  <!--product-->
  <section class="clothes my-5 ">

    <div class="container text-center mt-5 py-5">
      <h3><strong>Dresses & Jumpsuits</strong></h3>
      <hr class="mx-auto">
      <p>Here you can check out our new product with fair price on Online-Marketing</p>
    </div>

    <div class="row mx-auto container-fluid">

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/t1.png" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/dress2.jpg" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/t2.png" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/t1.png" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

    </div>

  </section>




  <!--product-->
  <section class="watches my-5 ">

    <div class="container text-center mt-5 py-5">
      <h3><strong>Best Watches</strong></h3>
      <hr class="mx-auto">
      <p>Here you can check out our new product with fair price on Online-Marketing</p>
    </div>

    <div class="row mx-auto container-fluid">

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/watches1.jfif" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/watches2.jfif" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/watches1.jfif" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-6 col-12">
        <img class="img-fluid mb-3" src="{{ asset('frontend') }}/image/watches2.jfif" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5>Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

    </div>

  </section>


  <!--product-->
  <section class="shoes my-5 pb-5">

    <div class="container text-center mt-5 py-5">
      <h3><strong>Running Shoes</strong></h3>
      <hr class="mx-auto">
      <p>Here you can check out our new product with fair price on Online-Marketing</p>
    </div>

    <div class="row mx-auto container-fluid">

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
        <button class="buy-btn">Buy Now</button>
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
        <button class="buy-btn">Buy Now</button>
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
        <button class="buy-btn">Buy Now</button>
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
        <button class="buy-btn">Buy Now</button>
      </div>

    </div>

  </section>


  <!--banner-->
  <section id="banner" class="mt-5 pt-5" style=" background-image: url({{ asset('frontend') }}/image/shopping2.jpg);">
    <div class="container">
      <h4>MID SEASON'S SALE</h4>
      <h1>Autumn Collection<br>UP TO 20% OFF</h1>
      <button class="text-uppercase  button-style">Shop Now</button>
    </div>
  </section>
@endsection