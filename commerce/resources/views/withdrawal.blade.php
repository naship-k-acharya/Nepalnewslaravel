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
        <div style="text-align: center ; width:70% " class="alert-danger text-sm border ml-5 "  >
            {{ session('status') }}
        </div>
        @endif

    <div class="center_title_bar">Withdrawal</div>
    <div class="center_title_bar">Duration: 24hrs</div>
    <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

         <div style="text-align: center" class="mb-5">
            <div id="logo"> <a href="#"><img src="images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
           <p>Acct Name: <span class="text-info">{{ $profile->fullname }}</span></p>
           <p>Acct Number: <span class="text-info">{{ $profile->acct_number }}</span></p>
           <p>Bank Name: <span class="text-info">{{ $profile->bank }}</span></p>

         </div>
         <hr>
   <h6>Withdrawal Form</h6>

         <form action="{{ route('user_withdrawal_store') }}" method="POST">
            @csrf
            <input type="hidden" name="acct_available" value=" {{ $account }}">
        <div class="contact_form">
          <div class="form_row">
            <label class="contact"><strong>Amount:</strong></label>
            <input type="number" name="amount" class="contact_input @error('amount')
            border-danger
        @enderror" />
            <div class="text-danger text-sm">
                @error('amount')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Password:</strong></label>
            <input type="password" name="password" class="contact_input @error('password')
            border-danger
        @enderror" placeholder="Enter Password"/>
            <div class="text-danger text-sm">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
          </div>



        <button type="submit" class="btn-sm -block btn-outline-dark  mt-2 ">Withdrawal</button>
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
