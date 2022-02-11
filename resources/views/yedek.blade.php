<section class="section main-banner" id="top" data-section="section1">
    <img src="https://teckers.com/wp-content/uploads/2021/11/z27311700IERFIFA-22.jpg" class="img-bg">
    <div class="container">
        <div class="row justify-content-center video-overlay">
            <div class="col-md-8">
                <div class="card form-auth">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    //BURASI LOGİN BOLUMU--}}
    <section class="section main-banner" id="top" data-section="section1">
        <img src="https://teckers.com/wp-content/uploads/2021/11/z27311700IERFIFA-22.jpg" class="img-bg">

        <div class="container  ">
            <div class="row justify-content-center video-overlay ">
                <div class="col-md-8  ">
                    <div class="card form-auth ">
                        <div class="card-header ">{{ __('REGISTER') }}</div>

                        <div class="card-body ">
                            <form method="POST" action="{{ route('register') }}" class="" >
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    //BURASI REGİSTER BOLUMU--}}

    <section class="section main-banner" id="top" data-section="section1">
        <img src="https://teckers.com/wp-content/uploads/2021/11/z27311700IERFIFA-22.jpg" class="img-bg">
        <div class="container">
            <div class="row justify-content-center video-overlay">
                <div class="col-md-8">
                    <div class="card form-auth">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body ">
                            <form method="POST"  action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3 form-inputs">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 form-inputs">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 form-inputs">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0 form-inputs">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary" style="font-weight: bold;width: 150px;">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link for-pw" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    //BURASI login BOLUMU--}}
    <style>
        html{
            background-color: #0a58ca!important;
        }
        body{
            background-color: #0a58ca!important;
            max-height: 100%!important;
        }
        .form-auth{
            font-weight: bold;
            font-size: large;
            color: white;
            /*border: 2px solid black;*/
            /*box-shadow: black;*/
            max-width: 900px;
            margin-left: 100px;
            background-color: #172A81;

        }
        .img-bg{
            opacity: 0.6;
        }
        .video-overlay{
            margin-top: 150px;
            background-color:transparent ;
            opacity: 0.92;
        }
    </style>



{{--    ANASAYAFA SLİDER--}}
    <div class="item">
        <div class="icon">
            <img src="{{asset('admin_css/assets/images/service-icon-02.png')}}" alt="">
        </div>
        <div class="down-content">
            <h4>Best Teachers</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
        </div>
    </div>

    <div class="item">
        <div class="icon">
            <img src="{{asset('admin_css/assets/images/service-icon-03.png')}}" alt="">
        </div>
        <div class="down-content">
            <h4>Best Students</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
        </div>
    </div>

    <div class="item">
        <div class="icon">
            <img src="{{asset('admin_css/assets/images/service-icon-02.png')}}" alt="">
        </div>
        <div class="down-content">
            <h4>Online Meeting</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
        </div>
    </div>

    <div class="item">
        <div class="icon">
            <img src="{{asset('admin_css/assets/images/service-icon-03.png')}}" alt="">
        </div>
        <div class="down-content">
            <h4>Best Networking</h4>
            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
        </div>
    </div>



{{--    welcomenin sonu--}}
    <section class="our-courses" id="courses"  >
        {{--    <img src="{{asset('images/116243605_316779713061423_8399979231582531272_n.jpg')}}">--}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 style="color: black">Popüler Paket Kampanyalarımız</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                            <img src="{{asset('images/fiyatlar/6456543.jpg')}}" alt="Course One">
                            <div class="down-content">
                                <h4 class="pt-0">Açılışa özel 1 hafta PlayStation + 2 Kol+ 1 oyun kiralama ücreti 200₺</h4>
                                <div class="info pt-0 mb-4">
                                    <div class="row pt-0 mb-4">
                                        <div class="col-6 pt-0 mb-4">
                                            <p class="pt-0"> <b> KİRALAMA</b>  </p>
                                        </div>
                                        <div class="col-6 mt-0">
                                            <span>200₺</span>
                                            <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                            <img src="{{asset('images/fiyatlar/7657654.jpg')}}" alt="Course One">
                            <div class="down-content">
                                <h4 class="pt-1">
                                    2 Coca Cola + 1 Cips +
                                    2 saat Oyun
                                </h4>
                                <div class="info pt-0 mb-4">
                                    <div class="row pt-0 mb-4">
                                        <div class="col-6 pt-0 mb-4">
                                            <p class="pt-0"> <b> ÜRÜN KAMPANYASI</b>  </p>
                                        </div>
                                        <div class="col-6 mt-0">
                                            <span>30₺</span>
                                            <a href="{{route('contact')}}" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                            <img src="{{asset('images/fiyatlar/IMG_1399_JPG.jpg')}}" alt="Course One">
                            <div class="down-content">
                                <h4 class="pt-1">VİP odalarımızda açılışa özel 4 kol saatlik ücret 30₺</h4>

                                <div class="info pt-2 mb-4">
                                    <div class="row pt-0 mb-4">
                                        <div class="col-6 pt-0 mb-4">
                                            <p class="pt-0"> <b> VIP</b>  </p>
                                        </div>
                                        <div class="col-6">
                                            <span>30₺</span>
                                            <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                            <img src="{{asset('images/fiyatlar/IMG_1411_JPG.jpg')}}" alt="Course One">
                            <div class="down-content">
                                <h4 class="pt-0">Localarımızda açılışa özel 2 kol saatlik ücret 12₺. 4 kol saatlik 20₺</h4>
                                <div class="info pt-0 mb-4">
                                    <div class="row pt-0 mb-4">
                                        <div class="col-6 pt-0 mb-4">
                                            <p class="pt-0"> <b> LOCA</b>  </p>
                                        </div>
                                        <div class="col-6 mt-0">
                                            <span>12₺-20₺</span>
                                            <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                            <img src="{{asset('images/fiyatlar/7657654.jpg')}}" alt="Course One">
                            <div class="down-content">
                                <h4 class="pt-1">4 Coca Cola + 1 Cips +
                                    2 saat Oyun

                                </h4>
                                <div class="info pt-0 mb-4">
                                    <div class="row pt-0 mb-4">
                                        <div class="col-6 pt-0 mb-4">
                                            <p class="pt-0"> <b> ÜRÜN KAMPANYASI</b>  </p>
                                        </div>
                                        <div class="col-6 mt-0">
                                            <span>50₺</span>
                                            <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Phone Number</h6>
                            <span>010-020-0340</span>
                        </li>
                        <li>
                            <h6>Email Address</h6>
                            <span>info@meeting.edu</span>
                        </li>
                        <li>
                            <h6>Street Address</h6>
                            <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                        </li>
                        <li>
                            <h6>Website URL</h6>
                            <span>www.meeting.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


{{--    --}}
{{--    fiyatlar ydek--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 style="color: black">Popüler Paket Kampanyalarımız</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                        <img src="{{asset('images/fiyatlar/6456543.jpg')}}" alt="Course One">
                        <div class="down-content">
                            <h4 class="pt-0">Açılışa özel 1 hafta PlayStation + 2 Kol+ 1 oyun kiralama ücreti 200₺</h4>
                            <div class="info pt-0 mb-4">
                                <div class="row pt-0 mb-4">
                                    <div class="col-6 pt-0 mb-4">
                                        <p class="pt-0"> <b> KİRALAMA</b>  </p>
                                    </div>
                                    <div class="col-6 mt-0">
                                        <span>200₺</span>
                                        <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                        <img src="{{asset('images/fiyatlar/7657654.jpg')}}" alt="Course One">
                        <div class="down-content">
                            <h4 class="pt-1">
                                2 Coca Cola + 1 Cips +
                                2 saat Oyun
                            </h4>
                            <div class="info pt-0 mb-4">
                                <div class="row pt-0 mb-4">
                                    <div class="col-6 pt-0 mb-4">
                                        <p class="pt-0"> <b> ÜRÜN KAMPANYASI</b>  </p>
                                    </div>
                                    <div class="col-6 mt-0">
                                        <span>30₺</span>
                                        <a href="{{route('contact')}}" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                        <img src="{{asset('images/fiyatlar/IMG_1399_JPG.jpg')}}" alt="Course One">
                        <div class="down-content">
                            <h4 class="pt-1">VİP odalarımızda açılışa özel 4 kol saatlik ücret 30₺</h4>

                            <div class="info pt-2 mb-4">
                                <div class="row pt-0 mb-4">
                                    <div class="col-6 pt-0 mb-4">
                                        <p class="pt-0"> <b> VIP</b>  </p>
                                    </div>
                                    <div class="col-6">
                                        <span>30₺</span>
                                        <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                        <img src="{{asset('images/fiyatlar/IMG_1411_JPG.jpg')}}" alt="Course One">
                        <div class="down-content">
                            <h4 class="pt-0">Localarımızda açılışa özel 2 kol saatlik ücret 12₺. 4 kol saatlik 20₺</h4>
                            <div class="info pt-0 mb-4">
                                <div class="row pt-0 mb-4">
                                    <div class="col-6 pt-0 mb-4">
                                        <p class="pt-0"> <b> LOCA</b>  </p>
                                    </div>
                                    <div class="col-6 mt-0">
                                        <span>12₺-20₺</span>
                                        <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="max-height: 400px!important;min-height: 400px!important;">
                        <img src="{{asset('images/fiyatlar/7657654.jpg')}}" alt="Course One">
                        <div class="down-content">
                            <h4 class="pt-1">4 Coca Cola + 1 Cips +
                                2 saat Oyun

                            </h4>
                            <div class="info pt-0 mb-4">
                                <div class="row pt-0 mb-4">
                                    <div class="col-6 pt-0 mb-4">
                                        <p class="pt-0"> <b> ÜRÜN KAMPANYASI</b>  </p>
                                    </div>
                                    <div class="col-6 mt-0">
                                        <span>50₺</span>
                                        <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',

    [
    'actionText' => $actionText,
    ]
