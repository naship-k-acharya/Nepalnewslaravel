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
                        <h6 class="mb-0">Edit Category</h6>

                    </div>
                    <div class="table-responsive">



                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="h-100 bg-secondary rounded p-4">

                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                            <th scope="col">Name</th>

                                        </tr>
                                    </thead>



                                <tr>
                                   <td><input class="form-check-input" type="checkbox"></td>
                                   <td>{{ $category->name }}</td>

                                </tr>


                                    </tbody>
                                </table>

                                <div>
                                    <form  class="mt-3" action="{{ route('categories.update',$category) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                          <label for="name">Edit Name:</label>
                                          <input type="text" name="name"  class="form-control" id="email" value="{{ $category->name }}">
                                        </div>


                                        <button type="submit" class="btn btn-dark mt-2">Update</button>
                                      </form>
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





