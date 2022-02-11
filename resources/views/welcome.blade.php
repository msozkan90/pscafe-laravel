@extends('layout')
<?php
$datas=['images/arapas/116243605_316779713061423_8399979231582531272_n.jpg',
    'images/arapas/222227b6f48b48e59e770630cfdd5.jpg',
        'images/arapas/116798712_575489933075826_6930599028945176845_n.jpg',
    'images/arapas/555556FpH.jpg',
    'images/arapas/117357477_295488088572877_66956445537525910_n.jpg',
    'images/arapas/RDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg',
    'images/arapas/ea4625_05a8e4303c4c4ecd98b8e8edec52db66_mv2.jpg',
    'images/arapas/55555default.jpg',
    'images/arapas/ea4625_20a3e35cb04a4ca2994168e51a506ce4_mv2.jpg',
  'images/arapas/nba-2k20-v97-0-2-mod-apk-para-hileli.jpg',
    'images/arapas/ea4625_d1592f52444d425e9fecb2336c2f94db_mv2.jpg','images/arapas/IMG_1399_JPG.jpg',
    'images/arapas/1624537530546-1.jpg',
    'images/arapas/maxresdefault-2-590x300.jpg',
    'images/arapas/IMG_1411_JPG.jpg','images/arapas/nsplsh_324643634c42694b526f34_mv2_d_4804_3610_s_4_2.jpg']
?>

@section('style')
    <style>
        /*.item{*/
        /*    position: relative;*/
        /*}*/
        /*.buton-fee{*/
        /*    position: absolute;*/
        /*    right: 10px;*/
        /*    bottom: 20px;*/
        /*}*/
        /*.fb-page{*/
        /* height: 1000px!important;*/
        /*}*/
        .hp-pic{
            max-height: 280px!important;
            max-width: 380px!important;
            min-height: 280px!important;
            min-width: 380px!important;
            border-radius: 15px;
        }

        .hp-pic:hover {
            opacity: 0.8 ;

        }

    </style>
@endsection
@section('content')

{{--    @if (session('status'))--}}
{{--        <div class="alert alert-success" role="alert">--}}
{{--            {{ session('status') }}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--{{ __('You are logged in!') }}--}}

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('admin_css/assets/images/arapas_intro.mp4')}}" type="video/mp4" />
    </video>



    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>HOŞGELDİNİZ</h6>
                        <h2>arapas playstation cafe & KİRALAMA</h2>
{{--                        <p>This is an edu meeting HTML CSS template provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_blank">TemplateMo website</a>. This is a Bootstrap v5.1.3 layout. The video background is taken from Pexels website, a group of young people by <a rel="nofollow" href="https://www.pexels.com/@pressmaster" target="_blank">Pressmaster</a>.</p>--}}
                        <div class="main-button-red">
                            @if( Auth::user() !== null)
                            <div class="scroll-to-section"><a href="{{route('contact')}}">Hemen KİRALA</a></div>
                            @else
                                <div class="scroll-to-section"><a href="{{route('login')}}">Hemen BİZE Katıl</a></div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    @foreach($datas as $data)

                            <img class="hp-pic" src="{{asset($data)}}" alt="">


                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>GÜNCEL DUYURULAR</h2>
                </div>
            </div>
            <div class="row">
            <div class="fb-page col-lg-4"  data-href="https://www.facebook.com/arapasplaystation/" data-tabs="timeline"  data-width="300px" data-height="825px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <div cite="https://www.facebook.com/arapasplaystation/" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/arapasplaystation/">ArapasPlaystationCafe</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($announcements as $announcement)
                    <div class="col-lg-6" >
                        <div class="meeting-item">
                            <div class="thumb" >
                                <div class="price">
                                    <span>{{$announcement['created_at']->format('d/m/y')}}</span>
                                </div>
                                <a href="{{route('announcement-detail',['id'=>$announcement['id']])}}"><img style="max-height: 250px!important;min-height: 250px!important;" src="{{asset($announcement['image'])}}" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <a href="{{route('announcement-detail',['id'=>$announcement['id']])}}"><h4>{{Str::limit($announcement->title, 32, $end='...')}}</h4></a>
                                <p>{{Str::limit($announcement->content, 52, $end='...')}}</p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                        <div class="main-button-red" >
                        <div class="scroll-to-section"><a href="{{route('announcement')}}" style="float: right!important;">Tüm Duyurular>>></a></div></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>



<section class="our-courses" id="courses"  >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 style="color: black">Popüler Paket Kampanyalarımız</h2>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="owl-courses-item owl-carousel" >
                    @foreach($prices as $price)
                    <div class="item" style="">
                        <img src="{{asset($price['image'])}}" alt="Course One">
                        <div class="col-lg-12" >
                            <div class="down-content">
                                <div class="col-lg-12 " >
                             <h4 class="">{{Str::limit($price->content, 45, $end='...')}}</h4>
                                </div>
                                <div class="col-lg-12 " >
                                    <div class="info ">
                                        <div class="row ">
                                            <div class="col-lg-12">
                                                <p class=""> <b> {{$price['category']}}</b>  </p>
                                            </div>

                                            <div class="col-lg-6">
                                                <p><b>{{$price['price']}}₺</b></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info"  ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>





@endsection


{{--<div class="item" style="min-height: 400px!important;max-height: 400px!important;background-size: cover">--}}

{{--    <img src="{{asset($price['image'])}}" alt="Course One">--}}
{{--    <div class="down-content">--}}
{{--        <h4 class="pt-0">{{$price['content']}}</h4>--}}
{{--        <div class="info ">--}}
{{--            <div class="row pb-2 mt-0">--}}
{{--                <div class=" pt-0 mt-0">--}}
{{--                    <p class="pt-0 mt-0"> <b> {{$price['category']}}</b>  </p>--}}
{{--                </div>--}}
{{--                <div class="pt-0 mt-0">--}}
{{--                    <p><b>{{$price['price']}}₺</b></p>--}}
{{--                    <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="fb-page col-lg-4"  data-href="https://www.facebook.com/arapasplaystation/" data-tabs="timeline"  data-width="" data-height="825px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">--}}
{{--    <div cite="https://www.facebook.com/arapasplaystation/" class="fb-xfbml-parse-ignore">--}}
{{--        <a href="https://www.facebook.com/arapasplaystation/">ArapasPlaystationCafe</a>--}}
{{--    </div>--}}
{{--</div>--}}
