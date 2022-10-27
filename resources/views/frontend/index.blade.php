@extends('layouts.frontend_layout')


@section('title')
Online Marketing - Home
@endsection

@php
$front = App\Models\FrontControl::first();
@endphp

@section('frontend_content')
<!--Background Image-->
<section id="home" style=" background-image: url({{ asset('img_DB/front/home/' . $front->home_bg_img) }});">
    <div class="container">
        <h5 style="color:white" class="w-50">{{ $front->home_bg_txt1 }}</h5>
        <h1 class="w-50"><b><span>{{ $front->home_bg_txt2 }}</span></b></h1>
        <p style="color:white" class="w-50">{{ $front->home_bg_txt3 }}</p>
    </div>
</section>




@endsection