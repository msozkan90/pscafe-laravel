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
    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
    <style>
        .logo-edit{
            height: 65px;
            width: 65px;
            background-color: black;
            border-radius: 15px;

        }
    </style>
    @yield('style')

</head>
<body>
<!-- Sub Header -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('welcome')}}" class="logo">  <img class="logo-edit"  src="{{asset('images/ea4625_8f05fbac8ff24001bc34cc0143cc77aa_mv2.jpg')}}">
                        AraPasL1
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{route('welcome')}}" class="">ANASAYFA</a></li>
                        <li><a href="{{route('announcement')}}">DUYURULAR</a></li>
                        <li class="scroll-to-section" ><a " href="{{route('price')}}">FİYATLAR</a></li>
                        <li class="scroll-to-section"><a href="{{route('sss')}}">S.S.S</a></li>
                        <li class="scroll-to-section"><a href="{{route('contact')}}">İLETİŞİM</a></li>



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
<!-- ***** Header Area End ***** -->

@yield('content')





<section class="contact-us" id="contact">

    <div class="footer">
        <p>Telİf hakkı © 2020 AraPasPlaystation Cafe & Kİralama. Tüm hakları saklıdır.
            <br>Design: <a href="/" target="_parent" title="free css templates">DjMicCheck</a></p>
    </div>
</section>
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="NYNzQOgE"></script>
<script src="{{asset('admin_css/vendor/jquery/jquery.min.js')}}"></script>


<script src="{{asset('admin_css/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('admin_css/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('admin_css/assets/js/lightbox.js')}}"></script>
<script src="{{asset('admin_css/assets/js/tabs.js')}}"></script>
<script src="{{asset('admin_css/assets/js/video.js')}}"></script>
<script src="{{asset('admin_css/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('admin_css/assets/js/custom.js')}}"></script>
@yield('script')
<script>
    //according to loftblog tut
    // $('.nav li:first').addClass('active');
    //
    // var showSection = function showSection(section, isAnimate) {
    //     var
    //         direction = section.replace(/#/, ''),
    //         reqSection = $('.section').filter('[data-section="' + direction + '"]'),
    //         reqSectionPos = reqSection.offset().top - 0;
    //
    //     if (isAnimate) {
    //         $('body, html').animate({
    //                 scrollTop: reqSectionPos },
    //             800);
    //     } else {
    //         $('body, html').scrollTop(reqSectionPos);
    //     }
    //
    // };

    // var checkSection = function checkSection() {
    //     $('.section').each(function () {
    //         var
    //             $this = $(this),
    //             topEdge = $this.offset().top - 80,
    //             bottomEdge = topEdge + $this.height(),
    //             wScroll = $(window).scrollTop();
    //         if (topEdge < wScroll && bottomEdge > wScroll) {
    //             var
    //                 currentId = $this.data('section'),
    //                 reqLink = $('a').filter('[href*=\\#' + currentId + ']');
    //             reqLink.closest('li').addClass('active').
    //             siblings().removeClass('active');
    //         }
    //     });
    // };
    //
    // $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
    //     e.preventDefault();
    //     showSection($(this).attr('href'), true);
    // });
    //
    // $(window).scroll(function () {
    //     checkSection();
    // });

</script>
</body>

</html>
