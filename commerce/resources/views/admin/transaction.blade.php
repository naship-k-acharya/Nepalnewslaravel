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
                        <h6 class="mb-0">Transactions History</h6>

                    </div>
                    <div class="table-responsive">
                @if ($alltransactions->count() > 0)

                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Type</th>
                            <th scope="col">Username</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
         @php
             $sn = 0
         @endphp
         @foreach ( $alltransactions as $alltransaction )

         <tr>
            <td><input class="form-check-input" type="checkbox"></td>
            <td>{{ $alltransaction->type }}</td>
            <td>{{ $alltransaction->user->name }}</td>
            <td>${{ $alltransaction->amount }}</td>
            <td>{{  $alltransaction->created_at->diffForHumans() }}</td>
            <td>@if ( $alltransaction->status == 'Pending')
               <a class="btn btn-sm btn-warning" href="{{ route('admin_transaction_approve',$alltransaction) }}">Verify</a>
                @elseif ($alltransaction->status == 'Successful')
                <a class="btn btn-sm btn-success" href="{{ route('admin_transaction_approve',$alltransaction) }}">Verified</a>
                 @else
                 <a class="btn btn-sm btn-danger" href="{{ route('admin_transaction_approve',$alltransaction) }}">Decline</a>

            @endif


        </td>

        </tr>
         @endforeach


                    </tbody>
                </table>

                @else

                <h4>No Transaction made</h4>

                @endif
                <div class="mt-2">
                    {{ $alltransactions->links() }}
                </div>

                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
