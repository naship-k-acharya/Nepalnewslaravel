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
                        <h6 class="mb-0">Message From {{  $message->name }}</h6>
                        <a href="{{ route('admin_message_view') }}">Show All</a>
                    </div>

                        <h5>Date: <span class="text-info">{{ $message->created_at }}</span></h5>
                        <h5>Sender: <span class="text-info">{{ $message->name }}</span>({{ $message->user_type }})</h5>
                        <h6>Email: <span class="text-info">{{ $message->email }}</span></h6>
                        <hr>
                        <div>
                            <h6 class="text-info">{{ $message->title }}</h6>

                            <p>Message:</p>

                            <p style="color: white">{{ $message->body }}</p>

                        </div>


                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection
