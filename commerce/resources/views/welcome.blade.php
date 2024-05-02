@extends('layout.app')
@section('content')

@include('side_bar')



    <!-- end of left content -->


    {{ $products->links() }}

    <div class="center_content">
        @if (session('cart'))
        <div style="text-align: center " class="text-danger text-sm">
            {{ session('cart') }}
        </div>
        @endif
      <div class="center_title_bar">Latest Products

      </div>
      @if ( $products->count() > 0)
      @foreach ( $products as $product )


      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">{{ $product->name }}</a></div>
          <div class="product_img"><a href="" ><img src="{{ asset('product_image') }}/{{ $product->image }}" alt="" border="0" width="150px" height="130px" /></a></div>
          <div class="prod_price"><span class="price">Rs{{ $product->price }}</span></div>
          <div class="prod_details"><span class="text-info">Stock</span>  @if ( $product->stock == 0 )
            <span class="text-danger text-sm">out of stock</span>
        @else
            {{ $product->stock }}
        @endif</div>
        </div>
        <div class="bottom_prod_box"></div>

        <div class="prod_details_tab">


            @auth
            @if (auth()->user()->user_type == "buyer")
             <a href="{{ route('cart_store',$product) }}" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="{{ route('order',$product) }}" title="header=[Buy Now] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a>
             @endif
             @endauth

            <a href="{{ route('details',$product) }}" class="prod_details">details</a>
         </div>

    </div>

      @endforeach

      @else


      <div class="prod_box_big" >
        <div class="center_prod_box_big">
          <div class="contact_form" >

            <div class="prod_box" style="text-align: center">
                <p>No  Product Available</p>
               </div>
                @endif


          </div>
        </div>
      </div>




    </div>


    <!-- end of center content -->
 @include('right_bar')
    <!-- end of right content -->



  <!-- end of main content -->
  @endsection

