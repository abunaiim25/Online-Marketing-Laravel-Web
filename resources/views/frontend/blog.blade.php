@extends('layouts.frontend_layout')


@section('title')
Online Marketing - Blog
@endsection


@section('frontend_content')

<section id="blog-home " class="mt-5 pt-5 container">
    <h2 class="font-weight-bold ">Blogs</h2>
    <hr>
  </section>


  <section class=" container blog mb-5">
    <div class="row">

      <div class="post col-lg-6 col-md-6 col-12 mt-5">
        <div class="post-img">
          <img style="height: 350px;  width: 100%;" class="img-fluid " src="{{ asset('frontend') }}/image/bg.jpg" alt="">
        </div>
        <h6 class="text-center font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
        </h6>
        <p class="text-center"><small><small> Jan 11, 2022</small></small></p>
      </div>

      <div class="post col-lg-6 col-md-6 col-12 mt-5">
        <div class="post-img">
          <img style="height: 350px;  width: 100%;" class="img-fluid "  src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
        </div>
        <h6 class="text-center font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
        </h6>
        <p class="text-center"><small><small> Jan 11, 2022</small></small></p>
      </div>

      <div class="post col-lg-6 col-md-6 col-12 mt-5">
        <div class="post-img">
          <img style="height: 350px; width: 100%;" class="img-fluid " src="{{ asset('frontend') }}/image/shopping.jpg" alt="">
        </div>
        <h6 class="text-center font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
        </h6>
        <p class="text-center"><small><small> Jan 11, 2022</small></small></p>
      </div>

      <div class="post col-lg-6 col-md-6 col-12 mt-5">
        <div class="post-img">
          <img style="height: 350px;  width: 100%;" class="img-fluid" src="{{ asset('frontend') }}/image/shopping2.jpg" alt="">
        </div>
        <h6 class="text-center font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
        </h6>
        <p class="text-center"><small><small> Jan 11, 2022</small></small></p>
      </div>
    </div>
  </section>



    <!--banner-->
    <section id="banner" class="mt-5 pt-5 container p-5" style=" background-image: url({{ asset('frontend') }}/image/shopping2.jpg); border-radius: 15px;">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>Autumn Collection<br>UP TO 20% OFF</h1>
        <button class="text-uppercase button-style">Shop Now</button>
      </div>
    </section>


    <section class=" container blog mb-5">
      <div class="row">
  
        <div class="post col-lg-4 col-md-4 col-12 mt-5">
          <div class="post-img">
            <img style="height: 250px;  width: 100%;  border-radius: 15px;" class="img-fluid " src="{{ asset('frontend') }}/image/bg.jpg" alt="">
          </div>
          <h6 class=" font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
          </h6>
        </div>
  
        <div class="post col-lg-4 col-md-4 col-12 mt-5">
          <div class="post-img">
            <img style="height: 250px;  width: 100%;  border-radius: 15px;" class="img-fluid "  src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
          </div>
          <h6 class=" font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
          </h6>
        </div>
  
        <div class="post col-lg-4 col-md-4 col-12 mt-5">
          <div class="post-img">
            <img style="height: 250px; width: 100%;  border-radius: 15px;" class="img-fluid " src="{{ asset('frontend') }}/image/shopping.jpg" alt="">
          </div>
          <h6 class=" font-weight-normal pt-3">This ways to change your summer wardrobe into autum wardrobe
          </h6>
        </div>
  
       
      </div>
      </section>

@endsection