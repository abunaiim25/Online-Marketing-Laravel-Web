@extends('layouts.admin_layout')

@section('title')
Admin - Dashboard
@endsection


@section('search')
{{--sesrch--}}
<ul class="navbar-nav w-100">
    <li class="nav-item w-100">

        <form action="{{url('admins_search')}}" method="GET" class="nav-link mt-2 mt-md-0  d-lg-flex search">
            {{csrf_field()}}
            <input type="text" name="search" class="form-control bg-white" placeholder="search admins">
        </form>

    </li>
</ul>
@endsection

@section('admin_content')

@endsection