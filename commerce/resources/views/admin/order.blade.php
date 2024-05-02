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
                        <h6 class="mb-0">Orders History</h6>

                    </div>
                    <div class="table-responsive">
                @if ($orders->count() > 0)

                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Buyer</th>
                            <th scope="col">Product</th>
                            <th scope="col">Seller</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
         @php
             $sn = 0
         @endphp
         @foreach ( $orders as $order )

         <tr>
            <td><input class="form-check-input" type="checkbox"></td>
            <td>{{ $order->buyer_name }}</td>
            <td>{{ $order->product_name }}</td>
            <td>{{ $order->seller_name }}</td>
            <td>${{ $order->amount }}</td>
            <td>{{  $order->created_at->diffForHumans() }}</td>
            <td>@if ($order->status == 'Inprogress')
            <p class="btn-sm btn-warning">{{ $order->status}}</p>

            @else
           <p class="btn-sm btn-success">{{ $order->status}}</p>
            @endif</td>


        </tr>
         @endforeach


                    </tbody>
                </table>

                @else

                <h4>No Order Available</h4>

                @endif
                <div class="mt-2">
                    {{ $orders->links() }}
                </div>

                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
