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
                        <h6 class="mb-0">Buyer List</h6>

                    </div>
                    <div class="table-responsive">
                @if ($users->count() > 0)

                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joined</th>
                            <th scope="col">Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

         @foreach ( $users as $user )

         <tr>
            <td><input class="form-check-input" type="checkbox"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
            <td>@if ($user->status == 1)
                <div class="text-success">
                    Active
                </div>

            @endif

            @if ($user->status == 0)
                <div class="text-danger">
                    Disable
                </div>

            @endif
        </td>
        <td><a class="btn-sm btn-outline-light" href="{{ route('user_view',$user) }}">view</a></td>
            <td>
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

        </tr>
         @endforeach


                    </tbody>
                </table>

                @else

                <h4>No buyer Register</h4>

                @endif
                <div class="mt-2">
                    {{ $users->links() }}
                </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
