@extends('layouts.frontend_layout')


@section('title')
Online Marketing - Cart
@endsection


@section('frontend_content')

<section id="cart-home " class="mt-5 pt-5 container">
    <h2 class="font-weight-bold ">Shopping Cart</h2>
    <hr>
  </section>


  <section class="cart container py-5 mb-5">
    <table width="100%">

      <thead>
        <tr>
          <td>Product</td>
          <td>Image</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Total</td>
          <td>Remove</td>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            <p class="font-weight-bold">Shoe Niky</p>
          </td>
          <td><img class="img-fluid" src="{{ asset('frontend') }}/image/shoe1.jpg" alt=""></td>
          <td>
            <p><small> 200TK</small></p>
          </td>
          <td><input style="width: 70px;" value="1" type="number"></td>
          <td>
            <p><small> 1200TK</small></p>
          </td>
          <td><a href="#"><i class="fas fa-trash"></i></a></td>
        </tr>

        <tr>
          <td>
            <p class="font-weight-bold">Shoe Niky</p>
          </td>
          <td><img class="img-fluid" src="{{ asset('frontend') }}/image/shoe2.jpg" alt=""></td>
          <td>
            <p><small> 200TK</small></p>
          </td>
          <td><input style="width: 70px;" value="1" type="number"></td>
          <td>
            <p><small> 1200TK</small></p>
          </td>
          <td><a href="#"><i class="fas fa-trash"></i></a></td>
        </tr>

        <tr>
          <td>
            <p class="font-weight-bold">Shoe Niky</p>
          </td>
          <td><img class="img-fluid" src="{{ asset('frontend') }}/image/shoe.jpg" alt=""></td>
          <td>
            <p><small> 200TK</small></p>
          </td>
          <td><input style="width: 70px;" value="1" type="number"></td>
          <td>
            <p><small> 1200TK</small></p>
          </td>
          <td><a href="#"><i class="fas fa-trash"></i></a></td>
        </tr>


      </tbody>

    </table>
  </section>


  <section class="cart-bottom container">
    <div class="row">

      <div class="coupon col-lg-6 col-md-6 col-12 mb-5">
        <div class="border">
          <h5>COUPON</h5>
          <div class="padding">
            <p>Enter your coupon code if you have one</p>
            <input type="text" placeholder="Coupon Code">
            <button class="apply-btn button-style">APPLY COUPON</button>
          </div>
        </div>
      </div>

      <div class="total col-lg-6 col-md-6 col-12 mb-5">
        <div class="border">
          <h5>CART TOTAL</h5>
          <div class="padding">
            <div class="d-flex justify-content-between">
              <h6>Subtotal</h6>
              <p>1200TK</p>
            </div>
            <div class="d-flex justify-content-between">
              <h6>Shipping</h6>
              <p>1200TK</p>
            </div>

            <hr class="second-hr">
            <div class="d-flex justify-content-between">
              <h6>Total</h6>
              <p>1200TK</p>
            </div>


              <div class=" text-right mb-3">
               <button class="button-style">PROCEED TO CHECKOUT</button>
              </div>
         
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection