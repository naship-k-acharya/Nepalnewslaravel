@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5"  >
            {{ session('status_a') }}
        </div>
        @endif
    <div class="center_title_bar">Contact Us

       @auth
       <a href="{{ route('message_admin') }}" class="contact">Send Message</a>
       @endauth
    </div>
    <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

         <div style="text-align: center" class="mb-5">
            <div id="logo"> <a href="#"><img src="images/teamwork-projects-logo.webp" alt="" border="0" width="237" height="140" /></a> </div>
           <p>nashipsujanmilan@gmail <span class="text-info">+977 12342323</span></p>
           <p>Nepal, Kathmandu zip code ******</p>
         </div>


        </div>
      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
