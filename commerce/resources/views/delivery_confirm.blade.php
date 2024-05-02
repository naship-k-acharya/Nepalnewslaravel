@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="bg-success text-sm border ml-5"  >
            {{ session('status_a') }}
        </div>
        @endif
    <div class="center_title_bar">Order


    </div>
    <div class="prod_box_big" >

      <div class="center_prod_box_big">


            <table class="table table-condensed table">
                <thead>
                        <th>Buyer</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                        <th>Status</th>
                </thead>
                <tbody>
                   @if ( $delivery_confirm->count() > 0)

                   @foreach ($delivery_confirm as $order )
                   <tr>
                    <td>{{ $order->buyer_name }}</td>
                    <td>{{ $order->product_name}}</td>
                    <td>${{ $order->amount}}</td>
                    <td>{{ $order->quantity}}</td>
                    <td>@if ($order->status == 'Inprogress')

                        <a href="{{ route('delivered',$order) }}" class="btn-sm btn-warning">{{ $order->status}}</a>

                    @else
                   <p class="btn-sm btn-success">{{ $order->status}}</p>
                    @endif</td>

                   </tr>

                   @endforeach
                   @else
                       <p>NO Order Available</p>
                   @endif
                </tbody>
            </table>

            {{ $delivery_confirm->links() }}

      </div>

    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
