@extends('layout.admin')
@section('cont')


            <!-- Sale & Revenue Start -->

            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->

            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Products List</h6>

                    </div>
                    <div class="table-responsive">
                        @if ($products->count() > 0)

                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Category</th>
                            <th scope="col">Manufacturers</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>


                @foreach ( $products as $product )

                <tr>
                   <td><input class="form-check-input" type="checkbox"></td>
                   <td>{{ $product->name }}</td>
                   <td>${{ $product->price}}</td>
                   <td>{{ $product->stock }}</td>
                   <td>{{ $product->category->name }}</td>
                   <td>{{ $product->brand ? $product->brand->name : '' }}</td>
                   <td>

                    <a class="btn-sm btn-warning" href="{{ route('products.show',$product) }}">View</a>

                   </td>

                </tr>
                @endforeach

                    </tbody>
                </table>
             <div class="mt-3">
                {{ $products->links() }}
             </div>

                @else


                <h4>No Product Posted </h4>
                @endif

                <div class="mt-2">

                </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
