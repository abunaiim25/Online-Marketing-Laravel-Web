<!--Navigation-->

@php
$front = App\Models\FrontControl::first();
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img style="height: 40px;" src="{{ asset('img_DB/front/logo/' . $front->logo_big) }}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item   {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>


                <li class="nav-item   {{ Request::is('news') ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ url('news') }}">News</a>
                </li>

                <li class="nav-item  {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ url('contact') }}">Contact Us</a>
                </li>

                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ url('about') }}">About</a>
                </li>

            </ul>

            <div class="d-flex justify-content-end">
                {{-- change --}}
                @if (Route::has('login'))
                @auth
                <!--user profile logout-->
                <x-app-layout>
                </x-app-layout>
                @else
                <a class="nav-link btn login-btn m-1 btn-sm" aria-current="page" href="{{ route('login') }}">Login</a>

                <a class="nav-link btn login-btn m-1 btn-sm" aria-current="page"
                    href="{{ route('register') }}">Register</a>
                @endauth
                @endif
            </div>

        </div>
    </div>


</nav>