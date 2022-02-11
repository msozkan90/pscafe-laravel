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

<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">

                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a class="social-media" href="https://www.facebook.com/arapasplaystation/"><i  class="icon fa fa-facebook"></i></a></li>
                        <li><a class="social-media" href="https://www.instagram.com/arapasplaystation/"><i  class="icon fa fa-instagram"></i></a></li>
                        <li><a class="social-media" href="https://twitter.com/arapasplay"><i class="icon fa fa-twitter"></i></a></li>
                        <li><a class="social-media"  href=""><i  class="icon fa fa-linkedin"></i></a></li>
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
                    <a href="{{route('welcome')}}" class="logo">  <img class="logo-edit"  src="{{asset('images/ea4625_8f05fbac8ff24001bc34cc0143cc77aa_mv2.jpg')}}">
                        AraPasL1
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section" id="anasayfa"><a href="#" class="">ANASAYFA</a></li>
                        <li class="scroll-to-section" id="duyuru"><a href="#">DUYURULAR</a></li>
                        <li class="scroll-to-section" id="fiyatlar" ><a href="#">FİYATLAR</a></li>
                        <li class="scroll-to-section"><a href="{{route('sss')}}">S.S.S</a></li>
                        <li class="scroll-to-section"><a href="{{route('contact')}}">İLETİŞİM</a></li>



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
{{--<script src="{{asset('admin_css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}

<script src="{{asset('admin_css/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('admin_css/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('admin_css/assets/js/lightbox.js')}}"></script>
<script src="{{asset('admin_css/assets/js/tabs.js')}}"></script>
<script src="{{asset('admin_css/assets/js/video.js')}}"></script>
<script src="{{asset('admin_css/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('admin_css/assets/js/custom.js')}}"></script>
<script>

    const price=document.getElementById('fiyatlar')
    const homepage=document.getElementById('anasayfa')
    const announce=document.getElementById('duyuru')
    price.addEventListener("click", function (){
        window.scrollTo(0,2350);
    })
    homepage.addEventListener("click", function (){
        window.scrollTo(0,0);
    })
    announce.addEventListener("click", function (e){
        // window.scrollTo(1090,1090);
        window.scrollBy(0,1090)

        e.preventDefault()

    })
</script>
</body>

</html>
