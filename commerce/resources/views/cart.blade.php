@extends('layout.app')
@section('content')

@include('side_bar')



    <!-- end of left content -->


    <div class="center_content">

        {{ $products->links() }}


        <div class="center_title_bar">Cart List</div>
        <div class="prod_box_big">
          <div class="top_prod_box_big"></div>


            @if ($products->count() > 0)

            @foreach ($products as $cart )
            <div class="center_prod_box_big">
                <div class="product_img_big">
                    <div class="thumbs"><img src="{{ asset('product_image') }}/{{ $cart->product_image }}" alt="" srcset="" width="60px"> </div>
                  </div>

                  <div class="details_big_box">



        <div class="product_title_big">{{ $cart->product_name }}</div>
        stock: <span class="blue">{{ $cart->product_stock  }}</span> <a href="{{ route('cart_remove',$cart) }}" class="btn-sm btn-warning">Remove</a><br />
        Category: <span class="blue">{{ $cart->product_category  }}</span><br />
        Manufacturer: <span class="blue">{{ $cart->product_brand  }}</span><br />

        <div class="blue"> <span class="price">Rs{{ $cart->product_price  }}</span></div>

        @auth
        @if ( auth()->user()->user_type == "buyer")

       <a href="{{ route('order',$cart) }}" class="compare  bg-success ">Buy </a>
    </div>
        @endif

        @endauth

</div>
    @endforeach




    @else

     <div class="prod_box" style="text-align: center">
     <p>No Product Available</p>
    </div>
     @endif

          </div>

        </div>

















    <!-- end of center content -->
 @include('right_bar')
    <!-- end of right content -->

  </div>

  <!-- end of main content -->
  @endsection
