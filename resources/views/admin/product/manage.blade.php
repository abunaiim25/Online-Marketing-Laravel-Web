@extends('layouts.admin_layout')

@section('title')
Admin - Product Manage 
@endsection

@section('admin_content')


<div class="sl-mainpanel m-4">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active text-white">Manage Product</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">  

          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif 
            
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  

              @if(session('status_inactive'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('status_inactive')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  

              <div class="card p-4" style="overflow: auto">
                <h6 class="card-body-title">Products List</h6>    
                <div class="table-wrapper">

                  
                  @if ($products->count() > 0)

                  <table id="datatable1" class="table display responsive nowrap text-white">
                    <thead>
                      <tr>
                        <th >Image</th>
                        <th >Product Name</th>
                        <th >Product Quantity</th>
                        <th >Category</th>
                        <th >Price</th> 
                        <th >Status</th> 
                        <th >Action</th>
                      </tr>
                    </thead>

                    <tbody>

                      @foreach ($products as $row)
                      <tr>
                        <td>
                            <img class="img-fluid" src="{{ asset('img_DB/product/image_one/'.$row->image_one) }}" style="height: 150px; width:150px;" alt="">
                        </td>
                        <td>{{ $row->product_name }}</td>
                        <td>{{ $row->product_quantity }}</td>
                        <td>{{ $row->category->category_name }}</td>{{--$row->category_id --}}
                        <td>{{ $row->price }}</td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else 
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin_products_edit/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="{{ url('admin_products_delete/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Shure To Delete')"><i class="fa fa-trash"></i></a>
                            @if($row->status == 1)
                            <a href="{{ url('admin_products_inactive/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin_products_active/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                            @endif
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>

                  @else
                  <h2 class="text-center p-5">Product Not Available</h2>

                  @endif
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>

    </div>

</div>

@endsection