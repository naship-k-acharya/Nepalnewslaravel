@extends('layout.admin')
@section('cont')


            <!-- Sale & Revenue Start -->

            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->

            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                @if (session('status_a'))
                <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5"  >
                    {{ session('status_a') }}
                </div>
                @endif
                <div class="bg-secondary text-center rounded p-4">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">{{ $product->name }}</h6>
                        <a href="{{ route('products.index') }}">Show All</a>
                    </div>

                       <div style="text-align: center">

                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-7">
                                <div class="card bg-dark" >
                                    <div class="card-header">
                                        <img src="{{ asset('product_image') }}/{{ $product->image }}" alt="" srcset="" width="100px" height="100px">
                                    </div>
                                    <div class="card-body ">
                                        <table class="table table-hover">
                                            <thead class="text-white">
                                              <tr>
                                                <th>Manufacturer</th>
                                                <th>Price</th>
                                                <th>Details</th>
                                                <th>Category</th>
                                                <th>Post on</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $product->brand->name }}</td>
                                                <td>${{ $product->price}}</td>
                                                <td>{{ $product->details}}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                            </tr>
                                            </tbody>
                                          </table>
                                    </div>
                                    <div class="card-footer">
                                        <form action="{{ route('products.update',$product) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                         <button class="btn-sm-block btn-danger" type="submit" >Remove from stock</button>
                                        </form>
                                    </div>
                                  </div>
                            </div>
                        </div>



                       </div>


                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
