<!--Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h2><strong> Online<span style="color: coral;">-Marketing</span></strong></h2>
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

                <li class="nav-item   {{ Request::is('shop') ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ url('shop') }}">Shop</a>
                </li>

                <li class="nav-item   {{ Request::is('blog') ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ url('blog') }}">Blog</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " aria-current="page" href="{{ url('about') }}">About</a>
                </li>

                <li class="nav-item  ">
                    <a class="nav-link " aria-current="page" href="{{ url('contact') }}">Contact</a>
                </li>



                <li class="nav-item   {{ Request::is('cart') ? 'active' : '' }}">
                    <a href="{{ url('cart') }}" class="nav-link " aria-current="page"><i
                            class="fal fa-shopping-bag"></i></a>
                </li>

                <li class="nav-item">
                    <div class="sesrch-box">
                        <div class="icon">
                            <i class="search fal fa-search"></i>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="search..." id="search_input">
                            <i class="clear fa fa-times"></i>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="d-flex justify-content-end" >
                {{-- change --}}
                @if (Route::has('login'))
                    @auth
                        <!--user profile logout-->
                            <x-app-layout>
                            </x-app-layout>
                    @else
                            <a class="nav-link btn login-btn m-1 btn-sm" aria-current="page" href="{{ route('login') }}">Login</a>

                            <a class="nav-link btn login-btn m-1 btn-sm" aria-current="page" href="{{ route('register') }}">Register</a>
                    @endauth
                @endif
            </div>

        </div>
    </div>


</nav>
