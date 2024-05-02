@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="bg-success text-sm border ml-5"  >
            {{ session('status_a') }}
        </div>
        @endif

    <div class="center_title_bar">Profile


    </div>
    @if ( $profile_check->count() == 1)

    <div class="prod_box_big" >
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form" >



           <div style="text-align: center" class="mb-5">

              <div class="row">
                  <div class="col-sm-4">
                      <img src="{{ asset('profile') }}/{{ $profile->image }}" alt="" srcset="" width="100px" height="100px">
                  </div>
                  <div class="col-sm-6">
                      <h6 class="mt-3 text-primary">{{ $profile->fullname }}</h6>
                      <p class="text-info">{{ $profile->address }}   <span class="text-dark">{{ $profile->phone }}</span></p>

                  </div>

                  <table class="table mt-3">
                      <thead>
                          <tr>
                          <th>Bank</th>
                          <th>Account number </th>
                      </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>{{ $profile->bank }}</td>
                          <td>{{ $profile->acct_number }}</td>
                      </tr>
                      </tbody>
                  </table>

              </div>




           </div>


          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>

    @endif
       <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

          @if ( $profile_check->count() == 1)

          <form action="{{ route('user_profile_update',$profile) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="contact_form">
          <div class="form_row">
            <label class="contact"><strong>Fullname:</strong></label>
            <input type="text" name="fullname" class="contact_input @error('fullname')
            border-danger
        @enderror" value="{{ $profile->fullname }}" />
            <div class="text-danger text-sm">
                @error('fullname')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>New Image:</strong></label>
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
            <label class="contact"><strong>Address:</strong></label>
            <input type="text" name="address" class="contact_input @error('address')
            border-danger
        @enderror" value="{{ $profile->address }}"/>
            <div class="text-danger text-sm">
                @error('address')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Phone:</strong></label>
            <input type="text" name="phone" class="contact_input @error('phone')
            border-danger
        @enderror" value="{{ $profile->phone }}"/>
            <div class="text-danger text-sm">
                @error('phone')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Bank:</strong></label>
            <input type="text" name="bank" class="contact_input @error('bank')
            border-danger
        @enderror" value="{{ $profile->bank }}"/>
            <div class="text-danger text-sm">
                @error('bank')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Account Number:</strong></label>
            <input type="text" name="acct_number" class="contact_input @error('acct_number')
            border-danger
        @enderror" value="{{ $profile->acct_number }}"/>
            <div class="text-danger text-sm">
                @error('acct_number')
                    {{ $message }}
                @enderror
            </div>
          </div>



        <button type="submit" class="btn-sm -block btn-outline-warning  mt-2 ">Update</button>
        </div>
    </form>


          @else

          <form action="{{ route('user_profile_store') }}" method="POST" enctype="multipart/form-data">

            @csrf

        <div class="contact_form">
          <div class="form_row">
            <label class="contact"><strong>Fullname:</strong></label>
            <input type="text" name="fullname" class="contact_input @error('fullname')
            border-danger
        @enderror" />
            <div class="text-danger text-sm">
                @error('fullname')
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
            <label class="contact"><strong>Address:</strong></label>
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
            <label class="contact"><strong>Phone:</strong></label>
            <input type="text" name="phone" class="contact_input @error('phone')
            border-danger
        @enderror" value="{{ old('phone') }}"/>
            <div class="text-danger text-sm">
                @error('phone')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Bank:</strong></label>
            <input type="text" name="bank" class="contact_input @error('bank')
            border-danger
        @enderror" value="{{ old('bank') }}"/>
            <div class="text-danger text-sm">
                @error('bank')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="form_row">
            <label class="contact"><strong>Account Number:</strong></label>
            <input type="text" name="acct_number" class="contact_input @error('acct_number')
            border-danger
        @enderror" value="{{ old('acct_number') }}"/>
            <div class="text-danger text-sm">
                @error('acct_number')
                    {{ $message }}
                @enderror
            </div>
          </div>



        <button type="submit" class="btn-sm -block btn-outline-primary  mt-2 ">Save</button>
        </div>
    </form>

          @endif


        </div>
      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
