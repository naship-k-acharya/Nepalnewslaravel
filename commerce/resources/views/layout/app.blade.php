<!DOCTYPE >
<html >

<head>
<title>Project Ecommerce</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container" >
  <div class="top_bar">

  <div id="header">
    <div id="logo"> <a href="#"><img style="margin-right:30px" src="images/teamwork-projects-logo.webp" alt="" border="0" width="250" height="160" /></a> </div>
    <div class="oferte_content">
      
      <div class="oferta">
        <div class="oferta_content"> <img src="images/team-removebg-preview.png" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title">Project Ecommerce</div>
            <div class="oferta_text"> Unlock a World of Possibilities - Start Shopping Now!  </div>
            
        </div>

      </div>
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!-- end of oferte_content-->
  </div>


  <div id="main_content" >

  <div id="menu_tab">
    <div class="left_menu_corner"></div>
    <ul class="menu">
      <li><a href="{{ route('home') }}" class="nav1"> Home</a></li>
      <li class="divider"></li>
      @auth

      <li><div class="dropdown">
        <a data-toggle="dropdown" href="" class="nav4">
        @if ($account > 0)

        <span class="text-success"> ${{ $account }}</span>
        @else
        <span class="text-danger"> $0</span>
        @endif
         My account</a>
        <span class="caret"></span></button>
  <ul class="dropdown-menu ">


    <div style="text-align: center">

        <li ><a href="{{ route('user_profile') }}">Profile</a></li>


        <li><a href="{{ route('user_deposit') }}">Fund</a></li>
        <li><a href="{{ route('user_withdrawal') }}">Withdrawal</a></li>
        <li><form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="btn-sm btn-danger" type="submit">Logout</button>
        </form></li>
    </div>




  </ul>
    </div></li>

    @if ( auth()->user()->user_type == "seller")
    <li class="divider"></li>
    <li><a href="{{ route('seller_product_index') }}" class="nav2">Products</a></li>
    <li class="divider"></li>
    <li>
        <a href="{{ route('delivery_confirm') }}" class="nav5">
            @if ( $seller_order->count() > 0  )

            <span class="badge alert-danger" >{{ $seller_order->count() }}</span>
          @endif
          Orders</a></li>
    @endif
    @if ( auth()->user()->user_type == "buyer")
    <li class="divider"></li>
      <li><a href="{{ route('delivery') }}" class="nav5">
        @if ( $buyer_order->count() > 0  )

            <span class="badge alert-danger" >{{ $buyer_order->count() }}</span>
          @endif
         Delivery</a></li>
      @endif
      @endauth



      @guest
      <li><a href="{{ route('login') }}" class="nav3">Sign In</a></li>
      <li class="divider"></li>

      <li><div class="dropdown">
        <a data-toggle="dropdown" href="" class="nav4">Sign Up</a>
        <span class="caret"></span></button>
  <ul class="dropdown-menu ">
    <li><a href="{{ route('register_buyer') }}">Buyer</a></li>
    <li><a href="{{ route('register_seller') }}">Seller</a></li>


  </ul>
    </div></li>

      @endguest
      <li class="divider"></li>
      <li><a href="{{ route('login_admin') }}" class="nav4">Admin</a></li>
      <li class="divider"></li>
      @auth
      <li><a href="{{ route('user_transaction') }}" class="nav2">Transaction</a></li>
      <li class="divider"></li>
      @endauth

      <li><a href="{{ route('contact') }}" class="nav6">Contact Us</a></li>
      <li class="divider"></li>
      <li class="currencies">Currencies
        <select>
          <option>Nepali</option>
          <option>US Dollar</option>
        </select>
      </li>
    </ul>
    <div class="right_menu_corner"></div>
  </div>
  <!-- end of menu tab -->



  @yield('content')





  <div class="footer">
    <div class="left_footer"> <img src="images/teamwork-projects-logo.webp" alt="" width="170" height="49"/> </div>
    <div class="center_footer">Group Project e-commerce. All Rights Reserved 2024<br />
      <a href=""><img src="images/csscreme.jpg" alt="GroupProject" border="0" /></a><br />
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="{{ route('home') }}">home</a> <a href="{{ route('contact') }}">contact us</a> </div>
  </div>
  </div>
</div>
<!-- end of main_container -->
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>
