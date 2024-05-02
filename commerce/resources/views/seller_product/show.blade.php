
@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
    <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5"  >
        {{ session('status_a') }}
    </div>
    @endif

        <div class="center_title_bar">{{ $product->name }}</div>
        <div class="prod_box_big">
          <div class="top_prod_box_big"></div>
          <div class="center_prod_box_big">
            <div class="product_img_big">
              <div class="thumbs"> <img src="{{ asset('product_image') }}/{{ $product->image }}" alt="" srcset="" width="150px" height="130px" ></div>
            </div>
            <div class="details_big_box">
              <div class="product_title_big">{{ $product->name }}</div>
              PostBy: <span class="blue">{{ $product->user->name }}</span><br />
              stock: <span class="blue">{{ $product->stock }}</span><br />
              Category <span class="blue">{{ $product->category->name }}</span><br />
              Uploaded on <span class="blue">{{ $product->created_at->diffForHumans() }}</span><br />
              Manufacturer <span class="blue">{{ $product->brand->name }}</span><br />
              <div class="specifications"> Description: <span class="blue">{{ $product->details }}</span><br />
              </div>
              <div class="prod_price_big"> <span class="price">Rs{{ $product->price }}</span></div>
              <a href="{{ route('seller_product_edit',$product) }}"  class="addtocart btn-secondary">Edit</a>
              <form action="{{ route('seller_product_destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure')">Del</button>
            </form>
            </div>

          </div>
          <div class="bottom_prod_box_big"></div>
        </div>

  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
