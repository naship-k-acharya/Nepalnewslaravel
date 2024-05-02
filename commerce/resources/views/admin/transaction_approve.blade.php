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
                        <h6 class="mb-0">{{ $transaction->type }} <span>Notification</span> </h6>
                        <a href="{{ route('admin_transaction_view') }}">Show All</a>
                    </div>

                       <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">

                            <p>Date: <span class="text-info">{{ $transaction->created_at }}</span></p>
                            <h6>Amount: <span class="text-success">${{ $transaction->amount }}</span></h6>
                             @if ( $transaction->type == "Withdrawal")

                               <p>Bank: <span class="text-white">{{ $profile->bank }}</span></p>
                               <p>Account number: <span class="text-white">{{ $profile->acct_number }}</span></p>
                             @else

                             <p>Teller ID:
                                @if ( $teller_check->count() > 1)
                                <span class="text-danger"> {{  $transaction->teller_number }} <span>(Used)</span></span>

                               @else

                               <span class="text-white"> {{  $transaction->teller_number }}</span>
                            @endif

                        </p>

                             @endif
                            <p>@if ( $transaction->status == 'Successful' )
                                <span class="text-success">{{ $transaction->status }}</span>

                                @elseif ($transaction->status == 'Pending')
                                <span class="text-warning">{{ $transaction->status }}</span>

                                @else
                                <span class="text-danger">{{ $transaction->status }}</span>

                            @endif
                         </p>
                            <hr>



                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            @if ( $transaction->status == 'Successful')
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-white">

                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Approve</th>

                                    </tr>
                                </thead>
                                <tbody
                                <tr>
                                 <td>{{ $transaction->user->name }}</td>
                                 <td>{{ $transaction->user->email }}</td>

                                    <td>
                                        <button type="submit" class="btn btn-success btn-sm">Verified</button>

                                    </td>

                                </tr>
                                </tbody>
                            </table>


                            @else


                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-white">

                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Approve</th>
                                        <th scope="col">Decline</th>
                                    </tr>
                                </thead>
                                <tbody
                                <tr>
                                 <td>{{ $transaction->user->name }}</td>
                                 <td>{{ $transaction->user->email }}</td>

                                    <td>
                                        @if ( $transaction->type == "Withdrawal")
                                     <form action="{{ route('admin_withdrawal_verified',$transaction) }}" method="POST">
                                        @csrf

                                        <button type="submit" class="btn btn-success btn-sm">Click</button>
                                    </form>

                                     @else

                                     <form action="{{ route('admin_transaction_verified',$transaction) }}" method="POST">
                                        @csrf

                                        <button type="submit" class="btn btn-success btn-sm">Click</button>
                                    </form>
                                     @endif



                                    </td>
                                    <td>
                                        <form action="{{ route('admin_transaction_decline',$transaction) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Click</button>
                                        </form>
                                    </td>

                                </tr>
                                </tbody>
                            </table>



                            @endif


                        </div>
                    </div>

                </div>




                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
