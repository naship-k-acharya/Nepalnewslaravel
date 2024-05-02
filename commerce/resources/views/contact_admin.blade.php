@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    <div class="center_title_bar">Contact Us</div>
    <div class="prod_box_big">
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">




       @auth
       <form action="{{ route('message_admin_store') }}" method="POST">
        @csrf
    <div class="contact_form">
      <div class="form_row">
        <label class="contact"><strong>Name:</strong></label>
        <input type="text" name="name" class="contact_input @error('name')
        border-danger
    @enderror" value="{{ auth()->user()->name }}" />
        <div class="text-danger text-sm">
            @error('name')
                {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Email:</strong></label>
        <input type="email" name="email" class="contact_input @error('email')
        border-danger
    @enderror" value="{{ auth()->user()->email }}"/>
        <div class="text-danger text-sm">
            @error('email')
                {{ $message }}
            @enderror
        </div>
      </div>
      @guest
      <div class="form_row">
        <label class="contact"><strong>User Type:</strong></label>
       <select name="user_type" id="" style="width: 70%" class="@error('user_type')
       border-danger
   @enderror">
        <option value="">Select</option>
        <option value="seller">Seller</option>
        <option value="buyer">Buyer</option>
       </select>
       <div class="text-danger text-sm">
        @error('user_type')
            {{ $message }}
        @enderror
    </div>
      </div>
      @endguest

      <div class="form_row">
        <label class="contact"><strong>Message Title:</strong></label>
        <input type="text" name="title" class="contact_input @error('title')
        border-danger
    @enderror" value="{{ old('title') }}" />
        <div class="text-danger text-sm">
            @error('title')
                {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Message Body:</strong></label>
        <textarea name="body" class="contact_textarea @error('body')
        border-danger
    @enderror" ></textarea>
        <div class="text-danger text-sm">
            @error('body')
                {{ $message }}
            @enderror
        </div>
      </div>
    <button type="submit" class="btn-sm -block btn-info mt-2 ">send</button>
    </div>
</form>
       @endauth





       @guest
       <form action="{{ route('message_admin_store') }}" method="POST">
        @csrf
    <div class="contact_form">
      <div class="form_row">
        <label class="contact"><strong>Name:</strong></label>
        <input type="text" name="name" class="contact_input @error('name')
        border-danger
    @enderror" value="{{ old('name') }}"/>
        <div class="text-danger text-sm">
            @error('name')
                {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Email:</strong></label>
        <input type="email" name="email" class="contact_input @error('email')
        border-danger
    @enderror" value="{{ old('email') }}"/>
        <div class="text-danger text-sm">
            @error('email')
                {{ $message }}
            @enderror
        </div>
      </div>

      <div class="form_row">
        <label class="contact"><strong>User Type:</strong></label>
       <select name="user_type" id="" style="width: 70%" class="@error('user_type')
       border-danger
   @enderror">
        <option value="">Select</option>
        <option value="seller">Seller</option>
        <option value="buyer">Buyer</option>
       </select>
       <div class="text-danger text-sm">
        @error('user_type')
            {{ $message }}
        @enderror
    </div>
      </div>


      <div class="form_row">
        <label class="contact"><strong>Message Title:</strong></label>
        <input type="text" name="title" class="contact_input @error('title')
        border-danger
    @enderror" value="{{ old('title') }}" />
        <div class="text-danger text-sm">
            @error('title')
                {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form_row">
        <label class="contact"><strong>Message Body:</strong></label>
        <textarea name="body" class="contact_textarea @error('body')
        border-danger
    @enderror" ></textarea>
        <div class="text-danger text-sm">
            @error('body')
                {{ $message }}
            @enderror
        </div>
      </div>
    <button type="submit" class="btn-sm -block btn-info mt-2 ">send</button>
    </div>
</form>
       @endguest




      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
