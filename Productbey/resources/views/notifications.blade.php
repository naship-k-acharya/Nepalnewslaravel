<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Admin Dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app"> 
<h1>Notifications</h1>

@if ($notifications->isNotEmpty())
    <div class="container">
        <ul class="list-group">
            @foreach ($notifications as $notification)
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img class="profile-image" src="assets/images/profiles/profile-2.png" alt="">
                        </div>
                        <div class="col">
                            <div class="desc">
                                <p>Hi, user({{ $notification->data['name'] }}), {{ $notification->data['message'] }}</p>
                            </div>
                            <div class="meta"> {{ $notification->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@else
    <p>No notifications found.</p>
@endif
   <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 