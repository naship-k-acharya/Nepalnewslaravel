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
                        <h6 class="mb-0"> New Manufacturer</h6>

                    </div>


                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">

                            <form  class="mt-3" action="{{ route('brands.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                  <label for="name">New Manufacturer:</label>
                                  <input type="text" name="name"  class="form-control @error('name')
                                      border-danger
                                  @enderror" id="email" >
                                  @error('name')
                                  <div class="text-sm text-danger">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>


                                <button type="submit" class="btn btn-outline-success mt-2">Save</button>
                              </form>
                    <div class="table-responsive">
                        @if ($brands->count() > 0)



                                <table class="table text-start align-middle table-bordered table-hover mb-0 mt-3">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                            <th scope="col">Name</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                @foreach ( $brands as $brand )

                                <tr>
                                   <td><input class="form-check-input" type="checkbox"></td>
                                   <td>{{ $brand->name }}</td>
                                 <td><a href="{{ route('brands.edit',$brand) }}" class="btn-sm btn-warning">Edit</a></td>
                                 <td>
                                    <form action="{{ route('brands.destroy',$brand) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Are you sure')">Del</button>
                                </form>
                            </td>
                                </tr>
                                @endforeach

                                    </tbody>
                                </table>


                            </div>
                        </div>



             <div class="mt-3">
                {{ $brands->links() }}
             </div>


                @endif


                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->

            <!-- Widgets End -->



          @endsection





