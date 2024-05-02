@extends('layout.app')
@section('content')




<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3 mt-3">
    <div class="row g-0 d-flex align-items-center">


      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8" >
        <div class="card-body py-5 px-md-5" >

            @if (session('status'))
            <div style="text-align: center " class="alert-danger text-sm">
                {{ session('status') }}
            </div>
            @endif
            <h5>Buyer Registration</h5>
            <form action="{{ route('store_buyer') }}" method="POST" >
                @csrf
                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-outline mb-4">
                             <input type="text" name="name" class="form-control @error('name')
                                 border-danger
                             @enderror" value="{{ old('name') }}" />
                             <label class="form-label" >Name</label>
                             <div class="text-danger text-sm">
                                 @error('name')
                                     {{ $message }}
                                 @enderror
                             </div>
                           </div>

                           <div class="form-outline mb-4">
                             <input type="password" name="password"  class="form-control @error('password')
                             border-danger
                         @enderror" />
                             <label class="form-label" >Password</label>
                             <div class="text-danger text-sm">
                                 @error('password')
                                     {{ $message }}
                                 @enderror
                             </div>
                           </div>

                     </div>



                     <div class="col-md-6">
                         <!-- Email input -->
                         <div class="form-outline mb-4">
                           <input type="email" name="email"  class="form-control @error('email')
                           border-danger
                       @enderror" value="{{ old('email') }}"/>

                           <label class="form-label" >Email address</label>
                           <div class="text-danger text-sm">
                             @error('email')
                                 {{ $message }}
                             @enderror
                         </div>
                         </div>

                         <div class="form-outline mb-4">
                             <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')
                             border-danger
                         @enderror" />
                             <label class="form-label" for="form2Example2">Password Agin</label>
                             <div class="text-danger text-sm">
                                 @error('password_confirmation')
                                     {{ $message }}
                                 @enderror
                             </div>
                           </div>

                           <!-- Password input -->

                     </div>
                 </div>

                 <!-- 2 column grid layout for inline styling -->
                 <div class="row mb-4">
                   <div class="col d-flex justify-content-center">
                     <!-- Checkbox -->

                   </div>


                 </div>

                 <!-- Submit button -->
                 <button type="submit" class="btn btn-primary  mb-4">Submit</button>

               </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

@endsection
