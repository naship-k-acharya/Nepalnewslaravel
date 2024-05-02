@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5 "  >
            {{ session('status_a') }}
        </div>
        @endif
    <div class="center_title_bar">Deposit


    </div>
    <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

         <div style="text-align: center" class="mb-5">
            <div id="logo"> <a href="#"><img src="images/teamwork-projects-logo.webp" alt="" border="0" width="237" height="140" /></a> </div>
            <p>Make your payment into :</p>
           <p>Acct Name: <span class="text-info">Naship milan sujan</span></p>
           <p>Acct Number: <span class="text-info">0106254964</span></p>
           <p>Bank Name: <span class="text-info">wirldBank</span></p>

         </div>
         <hr>
   <h6>Confirm Your Deposit</h6>

         <form action="{{ route('user_deposit_store') }}" method="POST">
            @csrf
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
            <label class="contact"><strong>Teller ID:</strong></label>
            <input type="text" name="teller_number" class="contact_input @error('teller_number')
            border-danger
        @enderror" value="{{ old('teller_number') }}"/>
            <div class="text-danger text-sm">
                @error('teller_id')
                    {{ $message }}
                @enderror
            </div>
          </div>



        <button type="submit" class="btn-sm -block btn-info mt-2 ">Confirm</button>
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
