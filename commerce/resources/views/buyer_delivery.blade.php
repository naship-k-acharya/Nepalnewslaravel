@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="bg-success text-sm border ml-5"  >
            {{ session('status_a') }}
        </div>
        @endif
    <div class="center_title_bar">Delivery </div>
    <div class="center_title_bar"> Duration:48hrs From Order Time</div>
    <div class="prod_box_big" >

      <div class="center_prod_box_big">


            <table class="table table-condensed table">
                <thead>
                        <th>Seller</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                        <th>Time</th>
                        <th>Status</th>
                </thead>
                <tbody>
                   @if ( $buyer_delivery->count() > 0)

                   @foreach ($buyer_delivery as $order )
                   <tr>
                    <td>{{ $order->seller_name }}</td>
                    <td>{{ $order->product_name}}</td>
                    <td>${{ $order->amount}}</td>
                    <td>{{ $order->quantity}}</td>
                    <td>{{ $order->created_at->diffForHumans() }}</td>
                    <td>
                        @if ( $order->status == 'Delivered')
                            <span class="text-success">{{ $order->status}}</span>
                        @else
                        <span class="text-warning">{{ $order->status}}</span>
                        @endif
                    </td>
                   </tr>

                   @endforeach
                   @else
                       <p>NO Order Available</p>
                   @endif
                </tbody>
            </table>

{{ $buyer_delivery->links() }}

      </div>

    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
