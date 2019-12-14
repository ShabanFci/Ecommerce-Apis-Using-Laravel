<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Products</title>
  <link rel="stylesheet" href="{{asset('Dashboard/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('Dashboard/css/custom.css')}}">
  <script src="{{asset('Dashboard/javascript/sweetalert.min.js')}}"></script>
  <script src="{{asset('Dashboard/javascript/jquery.min.js')}}"></script>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right hide-print" id="sidebar-wrapper">
      <div class="sidebar-heading text-center"><strong>Dashboard</strong></div>
      <div class="links">
        <ul class="sidebar-menu list-unstyled" >
           <li class="" style="font-weight: bolder;">
            <a href="">
              <i class="fa fa-home"></i>
              <span>Dashboard</span>   
            </a>
          </li>

          <li class="menu-open">
            <a href="#">
              <i class="fa fa-question-circle"></i>
              <span>Categories</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-down pull-right"  id="change-icon1"></i>
              </span>
            </a>
            <ul class="child-menu1 show">
              <li>
                <a href="{{route('categories.index')}}"><i class="fa fa-asterisk mr-2"></i>All Categories   
                </a>
              </li> 
            </ul>
          </li>
        </ul>
        <ul class="sidebar-menu list-unstyled" style="list-style-type:circle;">
          <li class="menu-open">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>SubCategory</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-down pull-right" id="change-icon2"></i>
              </span>
            </a>
            <ul class="child-menu2 show">
              <li>
                <a href="{{route('subCategories.index')}}"><i class="fa fa-asterisk mr-2"></i>All SubCategories</a>
              </li>
              
            </ul>
          </li>
        </ul>
        <ul class="sidebar-menu list-unstyled" style="list-style-type:circle;">
          <li class="menu-open">
            <a href="#">
              <i class="fa fa-level-down"></i>
              <span>Products</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-down pull-right"  id="change-icon3"></i>
              </span>
            </a>
            <ul class="child-menu3 show">
              <li>
                <a href="{{route('products.index')}}"><i class="fa fa-asterisk mr-2"></i>All Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg border-bottom scroll">
        <a id="menu-toggle"><i class="fa fa-align-justify"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{Auth::user()->username}}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container" style="padding-top: 70px">
       @yield('content')
    </div>
  </div>
  </div>
  <script src="{{asset('Dashboard/javascript/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Dashboard/javascript/fontawesome.min.js')}}"></script>
  <script src="{{asset('Dashboard/javascript/custom.js')}}"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</body>
</html>
