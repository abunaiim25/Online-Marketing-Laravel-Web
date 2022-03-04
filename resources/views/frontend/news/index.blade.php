@extends('layouts.frontend_layout')


@section('title')
    Online Marketing - News
@endsection


@section('frontend_content')
    <section id="blog-home " class="mt-5 pt-5 container">
        <h2 class="font-weight-bold ">News</h2>
        <hr>
    </section>


    <section class=" container blog mb-5">
        <div class="row">

            @foreach ($news as $row)
                <div class="post col-lg-6 col-md-6 col-12 mt-5">
                    <a style="text-decoration: none;color:black" href="{{ url('news_details/' . $row->id) }}">
                        <div class="post-img">
                            <img style="height: 350px;  width: 100%;" class="img-fluid "
                                src="{{ asset('img_DB/news/' . $row->image) }}" alt="">
                        </div>
                        <h6 class="text-center font-weight-normal pt-3">{{ $row->title }}
                        </h6>
                        <p class="text-center"><small><small> {{ $row->created_at->diffForHumans() }},
                                    {{ $row->created_at }}</small></small></p>
                    </a>
                </div>
            @endforeach
            {{-- {{ $row->created_at->format('d/m/Y') }} --}}

        </div>
    </section>



    <!--banner-->
    <section id="banner" class="mt-5 pt-5 container p-5"
        style=" background-image: url({{ asset('frontend') }}/image/shopping2.jpg); border-radius: 15px;">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection<br>UP TO 20% OFF</h1>
            <a class="btn text-uppercase  button-style" href="{{ url('shop') }}" role="button">Shop Now</a>
        </div>
    </section>


    <section class=" container blog mb-5">
        <div class="row">

            @foreach ($news_old as $row)
                <div class="post col-lg-4 col-md-4 col-12 mt-5">
                    <a style="text-decoration: none;color:black" href="{{ url('news_details/' . $row->id) }}">
                        <div class="post-img">
                            <img style="height: 250px;  width: 100%;  border-radius: 15px;" class="img-fluid "
                                src="{{ asset('img_DB/news/' . $row->image) }}" alt="">
                        </div>
                        <h6 class=" font-weight-normal pt-3">{{ $row->title }}
                        </h6>
                    </a>
                </div>
            @endforeach

        </div>
    </section>

    <!--pagination-->
    <div class="d-flex container mb-5">
        {{-- (paginate) ->Providers\AppServiceProvider.php --}}
        {{ $news->links() }}
        {{-- {{$appoint->onEachSide(1)-> links()}} --}}
    </div>
@endsection
