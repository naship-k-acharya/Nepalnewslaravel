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
                        <h6 class="mb-0">{{ $profile->fullname }}</h6>

                    </div>

                       <div style="text-align: center">

                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-7">
                                <div class="card bg-dark" >
                                    <div class="card-header">
                                        <img src="{{ asset('profile') }}/{{ $profile->image }}" alt="" srcset="" width="100px" height="100px">
                                    </div>
                                    <div class="card-body ">
                                        <table class="table table-hover">
                                            <thead class="text-white">
                                              <tr>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Bank Details</th>
                                                <th>Phone</th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                              <tr>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $profile->address }}</td>
                                                <td>{{ $profile->bank }} <span>{{ $profile->acct_number }}</span></td>
                                                <td>{{ $profile->phone }}</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>
                                    <div class="card-footer">
                                        @if ($user->status == 1)
                                        <form action="{{ route('disable_user',$user) }}" method="POST">
                                            @csrf

                                            <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                                        </form>
                                    @endif

                                    @if ($user->status == 0)
                                    <form action="{{ route('activate_user',$user) }}" method="POST">
                                        @csrf

                                        <button class="btn btn-sm btn-success" type="submit">Active</button>
                                    </form>


                                    @endif


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
