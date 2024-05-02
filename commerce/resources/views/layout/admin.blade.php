<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Project Ecommerce Dashboard - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ route('admin_index') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>Admin Panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">

                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin_index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <i class="fa fa-user-circle" aria-hidden="true"></i><span class="d-none d-lg-inline-flex "> Users</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('seller_user') }}" class="dropdown-item">Seller</a>
                            <a href="{{ route('buyer_user') }}" class="dropdown-item">Buyers</a>


                        </div>
                    </div>


                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <i class="fa fa-laptop me-2"></i><span class="d-none d-lg-inline-flex">Products</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('products.index') }}" class="dropdown-item">Products</a>
                            <a href="{{ route('categories.index') }}" class="dropdown-item">Categories</a>
                            <a href="{{ route('brands.index') }}" class="dropdown-item">Manufacturers</a>


                        </div>
                    </div>




                    <a href="{{ route('admin_order') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Orders</a>

                    <a href="{{ route('admin_transaction_view') }}" class="nav-item nav-link"><i class="fa fa-credit-card" aria-hidden="true" ></i> Transaction <P>Reports </P> </a>





                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item">
                        <a href="{{route('home')}}" class="nav-link ">WebPage
                        </a>
                    </div>
    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">



                            @if ( $unreadcount->count() > 0  )
                            <span class="badge alert-danger" >{{ $unreadcount->count() }}</span>
                            @endif

                            <i class="fa fa-envelope me-lg-2"></i>

                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                           @if (  $unreadcount->count() > 0 )



                         @foreach ( $unread as $unread )

                         <a href="{{ route('admin_message_read_m',$unread) }}" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-envelope me-lg-2"></i>
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">{{  $unread->name }} send you a message</h6>
                                    <small>{{  $unread->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                         @endforeach

                           @else
                               <p class="text-infor" style="text-align: center">No message</p>
                           @endif





                            <a href="{{ route('admin_message_view') }}" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            @if ( $transactions_count->count() > 0  )
                            <span class="badge alert-danger" >{{ $transactions_count->count() }}</span>
                            @endif
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                            @if ( $transactions_count->count() > 0  )


                            @foreach ( $transactions as $transaction )
                            <a href="{{ route('admin_transaction_approve',$transaction) }}" class="dropdown-item">
                                <h6 class="fw-normal mb-0">{{ $transaction->type  }}</h6>
                                <small>{{ $transaction->created_at->diffForHumans()  }}</small>
                            </a>
                            <hr class="dropdown-divider">
                            @endforeach


                            @else

                            <p class="text-infor" style="text-align: center">No Notification</p>

                            @endif


                            <a href="{{ route('admin_transaction_view') }}" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <h6 class="text-primary"></h6>
                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <i class="fa fa-user-edit me-2 "></i><span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                            <form action="{{ route('logout_admin') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Log Out</button>
                            </form>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

@yield('cont')


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Practicalgroup.com</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">Sujan Milan Naship</a>
                            <br>Distributed to: <a href="#" target="_blank">AmbitiionGroup</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/lib/chart/chart.min.js"></script>
    <script src="/admin/lib/easing/easing.min.js"></script>
    <script src="/admin/lib/waypoints/waypoints.min.js"></script>
    <script src="/admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/js/jquery.js"></script>

    <!-- Template Javascript -->
    <script src="/admin/js/main.js"></script>
</body>

</html>
