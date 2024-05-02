@extends('layout.app')
@section('content')

@include('side_bar')



    <!-- end of left content -->


    <div class="center_content">

        @if (session('cart'))
        <div style="text-align: center " class="alert-danger text-sm">
            {{ session('cart') }}
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
              stock: @if ( $product->stock == 0 )
              <span class="text-danger text-sm">out of stock</span>
          @else
          <span class="blue">{{ $product->stock }}</span>
          @endif <br />
          @if($product->category)
          Category <span class="blue">{{ $product->category->name }}</span><br />
      @endif
      
      @if($product->brand)
          Manufacturer <span class="blue">{{ $product->brand->name }}</span><br />
      @endif
      
      <div class="specifications"> 
          Description: <span class="blue">{{ $product->details }}</span><br />
      </div>
      
      <div class="prod_price_big"> 
          <span class="price">Rs.{{ $product->price }}</span>
      </div> @auth
              @if ( auth()->user()->user_type == "buyer")
              <a href="{{ route('cart_store',$product) }}" class="addtocart bg-info">Add</a> 
              <a href="{{ route('order',$product) }}" class="compare bg-success">Buy </a>
              @endif
              @endauth
            </div>
          </div>
          <div class="bottom_prod_box_big"></div>
        </div>
        <div class="center_title_bar">Similar products</div>
        @foreach ( $products as $product )


        <div class="prod_box">
          <div class="top_prod_box"></div>
          <div class="center_prod_box">
            <div class="product_title"><a href="details.html">{{ $product->name }}</a></div>
            <div class="product_img"><a href="details.html"><img src="{{ asset('product_image') }}/{{ $product->image }}" alt="" border="0" width="150px" height="130px" /></a></div>
            <div class="prod_price"><span class="price">Rs{{ $product->price }}</span></div>
            <div class="prod_details"><span class="text-info">Stock</span> @if ( $product->stock == 0 )
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
      </div>


    <!-- end of center content -->
 @include('right_bar')
    <!-- end of right content -->

  </div>

  <!-- end of main content -->
  @endsection
