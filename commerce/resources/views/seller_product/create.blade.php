@extends('layout.app')
@section('content')


@include('side_bar')




<div class="center_content">
    <div class="center_title_bar">Products</div>
    <div class="prod_box_big">
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <form action="{{ route('seller_product_store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
        <div class="contact_form">
          <div class="form_row">
            <label class="contact"><strong>Product name:</strong></label>
            <input type="text" name="name" class="contact_input @error('name')
            border-danger
        @enderror" value="{{ old('name') }}" />
            <div class="text-danger text-sm">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Image:</strong></label>
            <input type="file" name="image" class="contact_input @error('image')
            border-danger
        @enderror" />
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
        @enderror" value="{{ old('price') }}" />
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
        @enderror" value="{{ old('stock') }}" />
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
            <option  value="{{ $category->id }}">{{ $category->name }}</option>
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
            <option  value="{{ $brand->id }}">{{ $brand->name }}</option>
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
            <textarea class="@error('details')
            border-danger
        @enderror" name="details" id="" cols="37" rows="3" value="{{ old('details') }}" >

            </textarea>
          </div>
          <div class="text-danger text-sm">
            @error('details')
                {{ $message }}
            @enderror
        </div>
          <div class="form_row"> <button class="btn btn-success btn-block" type="submit">Submit</button> </div>
        </div>
    </form>
      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->
@include('right_bar')

  @endsection

