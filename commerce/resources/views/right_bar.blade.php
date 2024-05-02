<div class="right_content">
    @auth
    @if ( auth()->user()->user_type == "buyer")
    <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> {{ $carts->count() }} {{ Str::plural('item',$carts->count()) }} <br />
          <span class="border_cart"></span> Total: <span class="price">${{ $carts_total }}</span> </div>
        <div class="cart_icon"><a href="{{ route('cart') }}" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
    @endif
    @endauth


  <div class="title_box">What’s new</div>
  <div class="border_box">
    @if ($new_product->count() > 0)

    @foreach ( $new_product as $new_product )
    <div class="product_title">{{ $new_product->name }}</div>
    <div class="product_img"><a href="{{ route('details',$new_product) }}"><img src="{{ asset('product_image') }}/{{ $new_product->image }}" alt="" border="0" width="80px" /></a></div>
    <div class="prod_price"> <span class="price">${{ $new_product->price }}</span></div>
    @endforeach

    @else

    @endif

  </div>
  <div class="title_box">Manufacturers</div>
  <ul class="left_menu">
    @foreach ( $brands as $brand )
    <li class="odd"><a href="{{ route('product_brand',$brand) }}">{{ $brand->name }}</a></li>
    @endforeach


  </ul>
  
</div>
