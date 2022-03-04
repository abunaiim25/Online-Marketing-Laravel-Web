@extends('layouts.admin_layout')

@section('title')
    Admin - Frontend Design
@endsection

@section('admin_content')
    <nav class="breadcrumb sl-breadcrumb mt-3">
        <p>Admin Panel / Frontend Design</p>
    </nav>

    <div class="card mx-3 p-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 ">



                <form action="{{ url('admin_about_store_description') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="display: flex; justify-content: space-between;" class="mb-2">
                        <h6 class="card-body-title mb-4"> Frontend Design</h6>
                        <button class="btn btn-info mg-r-5">Update</button>
                    </div>


                      {{-- LOGO --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong> LOGO</strong>
                        </div>

                        <div class="row p-3">
                            <div class="col-lg-6 col-lg-6 p-3">
                                <label for="" class="text-black"><strong> Simple Logo:</strong></label>
                                <img src="{{ asset('frontend') }}/image/logo.png" alt="">
                                <input class="form-control" type="file" name="logo_big">
                            </div>

                            <div class="col-lg-6 col-lg-6 p-3">
                                <label for="" class="text-black"><strong> Small Logo:</strong></label>
                                <img src="{{ asset('frontend') }}/image/logo.png" alt="">
                                <input class="form-control" type="file" name="logo_small">
                            </div>
                        </div>

                    </div>


                     {{-- Home Background --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>Home
                                Background</strong> </div>

                        <div class="row p-3">
                            <div class="col-lg-4 col-lg-4 ">
                                <label for="" class="text-black"><strong>Home Background Image:</strong></label>
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="home_bg_img">
                            </div>

                            <div class="col-lg-8 col-lg-8 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Background
                                                Text-1:</strong></label>
                                        <input type="text" name="home_bg_txt1" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="20"
                                            placeholder="short text (maximum 20 letters supported)">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Background
                                                Text-2:</strong></label>
                                        <input type="text" name="home_bg_txt2" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="20"
                                            placeholder="short text (maximum 20 letters supported)">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Background
                                                Text-3:</strong></label>
                                        <input type="text" name="home_bg_txt3" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="60"
                                            placeholder="short text (maximum 60 letters supported)">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    {{-- Home Section Category --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>Home Section
                                Category</strong> </div>

                        <div class="row p-3">

                            <div class="col-lg-4 col-lg-4 mb-3">
                                <label for="" class="text-black"><strong>Shopping Here</strong></label>
                                <input type="text" name="home_new_txt1" class="form-control bg-white mb-3"
                                    style="color: black;" maxlength="30"
                                    placeholder="short text (maximum 30 letters supported)">
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="home_new_txt1_img">
                            </div>

                            <div class="col-lg-4 col-lg-4 mb-3">
                                <label for="" class="text-black"><strong>News Here</strong></label>
                                <input type="text" name="home_new_txt2" class="form-control bg-white mb-3"
                                    style="color: black;" maxlength="30"
                                    placeholder="short text (maximum 30 letters supported)">
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="home_new_txt2_img">
                            </div>

                            <div class="col-lg-4 col-lg-4 mb-3">
                                <label for="" class="text-black"><strong>Contact Here</strong></label>
                                <input type="text" name="home_new_txt3" class="form-control bg-white mb-3"
                                    style="color: black;" maxlength="30"
                                    placeholder="short text (maximum 30 letters supported)">
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="home_new_txt3_img">
                            </div>

                        </div>

                    </div>


                    {{-- Home Banner --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>Home
                                Banner</strong> </div>

                        <div class="row p-3">
                            <div class="col-lg-4 col-lg-4 ">
                                <label for="" class="text-black"><strong>Home Banner Image:</strong></label>
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="home_banner_img">
                            </div>

                            <div class="col-lg-8 col-lg-8 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Banner Text-1:</strong></label>
                                        <input type="text" name="home_banner_txt1" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="20"
                                            placeholder="short text (maximum 20 letters supported)">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Banner Text-2:</strong></label>
                                        <input type="text" name="home_banner_txt1" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="50"
                                            placeholder="short text (maximum 50 letters supported)">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    {{-- Shop Banner --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>Shop
                                Banner</strong> </div>

                        <div class="row p-3">
                            <div class="col-lg-4 col-lg-4 ">
                                <label for="" class="text-black"><strong>Shop Banner Image:</strong></label>
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="shop_banner_img">
                            </div>

                            <div class="col-lg-8 col-lg-8 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Shop Text-1:</strong></label>
                                        <input type="text" name="shop_banner_txt1" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="20"
                                            placeholder="short text (maximum 20 letters supported)">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>Home Shop Text-2:</strong></label>
                                        <input type="text" name="shop_banner_txt2" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="50"
                                            placeholder="short text (maximum 50 letters supported)">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                     {{-- About Banner --}}
                     <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>About
                                Banner</strong> </div>

                        <div class="row p-3">
                            <div class="col-lg-4 col-lg-4 ">
                                <label for="" class="text-black"><strong>About Banner Image:</strong></label>
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="about_banner_img">
                            </div>

                        </div>
                    </div>


                    {{-- Contact Banner --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>Contact
                                Banner</strong> </div>

                        <div class="row p-3">
                            <div class="col-lg-4 col-lg-4 ">
                                <label for="" class="text-black"><strong>Contact Banner Image:</strong></label>
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="contact_banner_img">
                            </div>

                        </div>
                    </div>


                    {{-- Shop Banner --}}
                    <div class="card mb-3" style="background:#fff;">
                        <div class="card-header" style="background:greenyellow; color:black;"><strong>Shop
                                Banner</strong> </div>

                        <div class="row p-3">
                            <div class="col-lg-4 col-lg-4 ">
                                <label for="" class="text-black"><strong>My Order Banner Image:</strong></label>
                                <img src="{{ asset('frontend') }}/image/bg2.jpg" alt="">
                                <input class="form-control mt-1" type="file" name="myorder_banner_img">
                            </div>

                            <div class="col-lg-8 col-lg-8 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>My Order Text-1:</strong></label>
                                        <input type="text" name="myorder_banner_txt1" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="20"
                                            placeholder="short text (maximum 20 letters supported)">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="" class="text-black"><strong>My Order Text-2:</strong></label>
                                        <input type="text" name="myorder_banner_txt2" class="form-control bg-white mb-3"
                                            style="color: black;" maxlength="50"
                                            placeholder="short text (maximum 50 letters supported)">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
