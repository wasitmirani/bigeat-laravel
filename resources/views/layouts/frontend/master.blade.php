
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BigEat - Food Ordering, Delivery & Restuarent Laravel Template  </title>
    <!--fivicon icon-->
    <link rel="icon" href="assets/img/fevicon-1.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/magnific.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery-ui.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/nice-select.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick-slide.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome.min-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/remixicon/remixicon-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive-1.css')}}">

    <!--Google Fonts-->
    <link href="../../css2-1.css?family=Barlow:wght@300;400;500;600;700;800&family=Bebas+Neue&family=Satisfy&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">


</head>
<body class='sc5'>
    <!-- preloader area start -->
    {{-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> --}}
    <!-- preloader area end -->

    <!-- search popup area start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="{{route('index')}}" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- navbar start -->
        @include('layouts.frontend.components.header')
    <!-- navbar end -->

    <!-- Banner Area Start-->

    <!-- Banner Area End -->

    <!-- category Area Start-->
    @yield('content')

    <!-- footer area start -->
    @include('layouts.frontend.components.footer')
    <!-- footer area end -->

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>



    <!-- all plugins here -->
    <script src="{{asset('assets/js/jquery.3.6.min-1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min-1.js')}}"></script>
    <script src="{{asset('assets/js/imageloded.min-1.js')}}"></script>
    <script src="{{asset('assets/js/counterup-1.js')}}"></script>
    <script src="{{asset('assets/js/waypoint-1.js')}}"></script>
    <script src="{{asset('assets/js/magnific.min-1.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min-1.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min-1.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.min-1.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.min-1.js')}}"></script>
    <script src="{{asset('assets/js/owl.min-1.js')}}"></script>
    <script src="{{asset('assets/js/slick-slider.min-1.js')}}"></script>
    <script src="{{asset('assets/js/wow.min-1.js')}}"></script>
    <script src="{{asset('assets/js/tweenmax.min-1.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('assets/js/main-1.js')}}"></script>
</body>
</html>
