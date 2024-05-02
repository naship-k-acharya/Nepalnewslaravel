@extends('layout.app')
@section('content')

@include('side_bar')



    <!-- end of left content -->


    <div class="center_content">
        @if (session('status_a'))
            <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5"  >
                {{ session('status_a') }}
            </div>
            @endif
        <div class="center_title_bar">{{ auth()->user()->name }} Products


        </div>
        <div class="prod_box_big" >
          <div class="top_prod_box_big"></div>
          <div class="center_prod_box_big">
            <div class="table-responsive">
            <div class="contact_form" >
                <a class="btn-sm btn-block btn-outline-info" href="{{ route('seller_product_create') }}">Add Product</a>

                <table class="table table-condensed table">
                    <thead>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Category</th>

                            <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        @foreach ( $products as $product )
                      <tr>

                        <td>{{ $product->name }}</td>
                        <td> @if ( $product->stock == 0 )
                            <span class="text-danger text-sm">out of stock</span>
                        @else
                            {{ $product->stock }}
                        @endif</td>
                        <td>Rs{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>

                        <td>

                              <a href="{{ route('seller_product_show',$product) }}" class="btn btn-secondary">View</a>
                        </td>
                        <td>
                                  <form action="{{ route('seller_product_destroy', $product) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn-sm btn-danger" onclick="return confirm('Are you sure')">Del</button>
                                  </form>
                                </td>



                        </td>
                      </tr>

                      @endforeach



                    </tbody>
                 </table>

                 {{ $products->links() }}


            </div>
          </div>
          <div class="bottom_prod_box_big"></div>
          </div>
        </div>
      </div>


      <!-- end of center content -->
      @include('right_bar')
          <!-- end of right content -->


        <!-- end of main content -->
        @endsection



