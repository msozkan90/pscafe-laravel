<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>AraPasPlaystationCafe</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin_css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('admin_css/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('admin_css/assets/css/templatemo-edu-meeting.css')}}">
    <link rel="stylesheet" href="{{asset('admin_css/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('admin_css/assets/css/lightbox.css')}}">
{{--    ----------------------------------------------------------------------------------}}

    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
</head>
@yield('style')
<style>
    html{
        background-color: #0a58ca!important;
    }
    .announce-list{
        width: 1000px;

    }
    section.our-course {
        background-color: #0a58ca;
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 140px;
        padding-bottom: 130px;

    }
    .table{
        border: 2px solid white;
        color: white;
        font-weight: bold;
    }
</style>
<body style="background-color: #0f5132!important;">
<div class="sub-header ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content " >
                    <h4 style="color: white">ADMİN PANELİ</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('welcome')}}" class="logo">
                        AraPasL1
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{route('admin.dashboard')}}" class="active">Dashboard</a></li>
                        <li><a href="{{route('announcement')}}">DUYURULAR</a></li>
                        <li class="scroll-to-section"><a href="#apply">FİYATLAR</a></li>


                        {{--                        <li class="has-sub">--}}
                        {{--                            <a href="javascript:void(0)">Pages</a>--}}
                        {{--                            <ul class="sub-menu">--}}
                        {{--                                <li><a href="{{route('meetings')}}">Upcoming Meetings</a></li>--}}
                        {{--                                <li><a href="{{route('meeting-details')}}">Meeting Details</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}


                        @if( Auth::user() !== null)

                            <li class="scroll-to-section"><a href="{{ route('logout') }}">ÇIKIŞ YAP</a></li>
                            <li class="scroll-to-section"><a href="/">{{ Auth::user()->name }}</a></li>
                        @else
                            <li class=""><a href="{{ route('login') }}">GİRİŞ Yap</a></li>
                            <li class=""><a href="{{ route('register') }}">Kayıt Ol</a></li>
                        @endif


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>


@yield('content')
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('admin_css/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('admin_css/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('admin_css/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('admin_css/assets/js/lightbox.js')}}"></script>
<script src="{{asset('admin_css/assets/js/tabs.js')}}"></script>
<script src="{{asset('admin_css/assets/js/video.js')}}"></script>
<script src="{{asset('admin_css/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('admin_css/assets/js/custom.js')}}"></script>




<script>

</script>
</body>

</html>
