@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5 "  >
            {{ session('status_a') }}
        </div>
        @endif
        @if (session('status'))
        <div style="text-align: center " class="alert-danger text-sm">
            {{ session('status') }}
        </div>
        @endif

    <div class="center_title_bar">Order


    </div>
    <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

         <div style="text-align: center" class="mb-5">
            <div id="logo"> <img src="{{ asset('product_image') }}/{{ $product->image }}" alt="" srcset="" width="70px"></div>
            <p>Product Details </p>
           <p>Product Name: <span class="text-info">{{ $product->name }}</span></p>
           @if($product->brand)
           Manufacturer <span class="blue">{{ $product->brand->name }}</span><br />
       @endif
           <p>Price: <span class="text-danger">Rs{{ $product->price }}</span></p>
           <p>stock:<span class="text-info">@if ( $product->stock == 0 )
            <span class="text-danger text-sm">out of stock</span>
        @else
            {{ $product->stock }}
        @endif</span></p>

         </div>
         <hr>
   <h6>Order Now</h6>
   <p><span class="text-info">Notice:</span> Delivery Team only work within Lagos... <span class="btn-success">Rs.10</span>Delivery Charge</p>

         <form action="{{ route('order_store',$product) }}" method="POST">
            @csrf
            <input type="hidden" name="acct_available" value=" {{ $account }}">
        <div class="contact_form">
          <div class="form_row">
            <label class="contact"><strong>Quantity:</strong></label>
            <input type="number" name="quantity" id="quantity"  class="contact_input @error('quantity')
            border-danger
        @enderror" />
            <div class="text-danger text-sm">
                @error('quantity')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Address</strong></label>
            <input type="text" name="address" class="contact_input @error('address')
            border-danger
        @enderror" value="{{ old('address') }}"/>
            <div class="text-danger text-sm">
                @error('address')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Phone</strong></label>
            <input type="text" name="phone" class="contact_input @error('phone')
            border-danger
        @enderror" value="{{ old('phone') }}"/>
            <div class="text-danger text-sm">
                @error('phone')
                    {{ $message }}
                @enderror
            </div>
          </div>





      <input type="hidden" name="amount" value="{{ $product->price }}">






        <button type="submit" class="btn-sm -block btn-info mt-2 ">Send</button>
        </div>
    </form>



        </div>
      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection


