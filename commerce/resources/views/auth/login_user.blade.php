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
  <div class="card mb-3 mt-3" >
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">
            @if (session('status'))
            <div style="text-align: center " class="alert-danger text-sm">
                {{ session('status') }}
                <a href="{{ route('message_admin') }}" class="contact">Send Message</a>
            </div>
            @endif
            @if (session('statuss'))
            <div style="text-align: center " class="alert-danger text-sm">
                {{ session('statuss') }}

            </div>
            @endif
          <form action="{{ route('user_store') }}" method="POST">
            @csrf
            <h5>Login</h5>

            <div class="row">
                <div class="col-md-3">

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

                    <!-- Password input -->
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

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>

                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                </div>
                <div class="col-md-3"></div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

@endsection
