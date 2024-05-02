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
                        <h6 class="mb-0">Message List</h6>

                    </div>
                    <div class="table-responsive">
                @if ($allmessages->count() > 0)

                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

         @foreach ( $allmessages as $allmessage )

         <tr>
            <td><input class="form-check-input" type="checkbox"></td>
            <td>{{ $allmessage->name }}</td>
            <td>{{ $allmessage->email }}</td>
            <td>{{ $allmessage->title }}</td>
            <td>{{  $allmessage->created_at->diffForHumans() }}</td>
            <td>@if ( $allmessage->status == 'unread')
                <form action="{{ route('admin_message_read', $allmessage) }}" method="POST">
                    @csrf

                    <button class="btn btn-sm btn-danger" type="submit">Read</button>
                </form>
                @else
                <form action="{{ route('admin_message_read', $allmessage) }}" method="POST">
                    @csrf

                    <button class="btn btn-sm btn-success" type="submit">Read</button>
                </form>

            @endif


        </td>

        </tr>
         @endforeach


                    </tbody>
                </table>

                @else

                <h4>No Message available</h4>

                @endif
                <div class="mt-2">
                    {{ $allmessages->links() }}
                </div>

                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
