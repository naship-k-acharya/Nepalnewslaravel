
@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">

        <div class="center_title_bar">Edit {{ $product->name }} Product</div>
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

            </div>
          </div>
          <div class="bottom_prod_box_big"></div>
        </div>
        <div class="prod_box_big">
            <div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">

              <div class="details_big_box">
                <form action="{{ route('seller_product_update',$product) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                <div class="contact_form">
                  <div class="form_row">
                    <label class="contact"><strong>Product name:</strong></label>
                    <input type="text" name="name" class="contact_input @error('name')
                    border-danger
                @enderror" value="{{ $product->name }}"/>
                    <div class="text-danger text-sm">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form_row">
                    <label class="contact"><strong>New Image:</strong></label>
                    <input type="file" name="image" class="contact_input @error('image')
                    border-danger
                @enderror"  />
                    <div class="text-danger text-sm">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form_row">
                    <label class="contact"><strong>Price:</strong></label>
                    <input type="text" name="price" class="contact_input @error('price')
                    border-danger
                @enderror" value="{{ $product->price }}" />
                    <div class="text-danger text-sm">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form_row">
                    <label class="contact"><strong>stock:</strong></label>
                    <input type="text" name="stock" class="contact_input @error('stock')
                    border-danger
                @enderror" value="{{ $product->stock }}"/>
                    <div class="text-danger text-sm">
                        @error('stock')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>

                  <div class="form_row">
                    <label class="contact"><strong>Category:</strong></label>

                   <select name="category_id" id="" style="width: 70%" class="@error('category_id')
                   border-danger
               @enderror">
                    <option value="">select</option>
                    @foreach ( $categories as $category )
                    <option  value="{{ $category->id }}" @if( $category->id == $product->category_id )
                        selected
                    @endif>{{ $category->name }}</option>
                    @endforeach
                   </select>
                   <div class="text-danger text-sm">
                    @error('category_id')
                        {{ $message }}
                    @enderror
                </div>
                  </div>
                  <div class="form_row">
                    <label class="contact"><strong>Brand:</strong></label>
                   <select   name="brand_id" id="" style="width: 70%" class="@error('brand_id')
                   border-danger
               @enderror">
                    <option value="">select</option>
                    @foreach ( $brands as $brand )
                    <option  value="{{ $brand->id }}" @if( $brand->id == $product->brand_id )
                      selected
                  @endif>{{ $brand->name }}</option>
                    @endforeach
                   </select>
                   <div class="text-danger text-sm">
                    @error('brand_id')
                        {{ $message }}
                    @enderror
                </div>
                  </div>
                  <div class="form_row">
                    <label class="contact"><strong>Details:</strong></label>
                    <textarea  class="@error('details')
                    border-danger
                @enderror" name="details" id="" cols="37" rows="3" >
                      {{ $product->details }}
                    </textarea>
                  </div>
                  <div class="text-danger text-sm">
                    @error('details')
                        {{ $message }}
                    @enderror
                </div>
                  <div class="form_row"> <button class="btn btn-secondary btn-block" type="submit">Update</button> </div>
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
