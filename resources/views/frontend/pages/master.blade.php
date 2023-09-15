<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <base>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keyword" content="Home Page">
    <meta name="description" content=" - School Management System With CMS">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../uploads/frontend/images/fav_icon1.png">
    <title>Home</title>


    <link rel="stylesheet" href="{{ asset('common/assets/css/font-awesome.min.css.css') }}">
    <link rel="stylesheet" href="{{ asset('common/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('common/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/assets/css/style.css')}}">

    <script src="{{ asset('common/assets/js/jquery.min.js') }}"></script>

    <style>
        .item {
            margin-bottom: -15px;
        }

        .navbar-toggler-icon {
            /*background: auto !important;*/
            margin-top: 10px;
        }
    </style>
    <script type="text/javascript">
        let base_url = "https://mkm.edu.bd/";
        let csrfData = {"school_csrf_name": "d5099b8229f619a23c8b148f07d8395c"};
        $(function ($) {
            $.ajaxSetup({
                data: csrfData
            });
        });
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
<div class="body-wrap overflow-hidden">
    <!-- back-to-top start -->
    <div class="backtotop position-fixed">
        <a href="#" class="scroll d-flex justify-content-center align-items-center position-relative">
            <i class="fas fa-arrow-up fw-bold text-white"></i>
        </a>
    </div>
    <!-- back-to-top end -->
    <div class="container site-main">

        <!-- header area start -->
        <header>
            <div class="logo-area">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo/logo.jpg') }}" alt="Logo">

                </a>
            </div>
            <!-- Navbar area start -->
            @include('frontend.navbar')
        </header>      <!-- Main Slider Section Starts -->

        <main>
           <div style="min-height: 100vh">
               @yield('content')
           </div>
        </main>
    </div>

    @include('frontend.footer')
</div>

<script src="{{ asset('common/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('common/assets/js/aos.js') }}"></script>
<script src="{{ asset('common/assets/js/custom.js') }}"></script>
<div id="fb-root"></div>

<script>
    (function (d, s, id) {
        let js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
