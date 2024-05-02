@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="bg-success text-sm border ml-5"  >
            {{ session('status_a') }}
        </div>
        @endif
    <div class="center_title_bar">Transactions


    </div>
    <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

            <table class="table table-condensed">
                <thead>

                    <th>Type</th>
                    <th>Amount</th>
                    <th>Transaction Date</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
                    @if ( $transactions->count() > 0)


                   @foreach ( $transactions as $transaction )


                   <tr>

                    <td>{{ $transaction->type }}</td>
                    <td>
                        @if ($transaction->type == 'Send' )
                            <span class="text-danger">${{ $transaction->amount }}</span>
                        @else
                        <span class="text-success">${{ $transaction->amount }}</span>
                        @endif
                    </td>
                    <td>{{ $transaction->created_at->diffForHumans() }}</td>
                    <td>@if ( $transaction->status == 'Successful' )
                        <span class="text-success">{{ $transaction->status }}</span>

                        @elseif ($transaction->status == 'Pending')
                        <span class="text-warning">{{ $transaction->status }}</span>

                        @else
                        <span class="text-danger">{{ $transaction->status }}</span>

                    @endif</td>
                    @if ( $transaction->status == 'Successful' )
                    <td ><form action="{{ route('user_transaction_destroy',$transaction) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn-sm btn-danger " type="submit" onclick="return confirm('Are you sure')">Del</button>
                    </form>
                </td>
                    @endif

                </tr>
                   @endforeach


                    @else
                    <p>  No Transaction</p>
                    @endif

                </tbody>
             </table>
{{ $transactions->links() }}


        </div>
      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
