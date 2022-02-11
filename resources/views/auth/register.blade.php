@extends('layout2')

@section('content')
    <style>
        .form-auth{

            font-weight: bold;
            font-size: large;
            color: white;
            border: 1px solid black;
            background: linear-gradient(rgba(225,225,225,0.1), rgba(225,225,225,0.1)), url(../../../images/background/321.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .accordions{
            /*background-image:linear-gradient(rgba(255,255,255,0.1), rgba(255,255,255,0.1)), url(../../../images/background/9f3fefe825700bd6eaf0e307b016c381.jpg);*/
        background-color: #353535;
        }
        .btn-primary{
            font-weight: bold;
            font-size: large;
            color: white;
        }
        .deneme{
            visibility: hidden;
        }
    </style>

    <section class="apply-now" id="apply">
        <br><br><br>
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="accordions is-first-expanded">

                        <div class="card form-auth ">
                            <div class="card-header ">{{ __('KAYIT OL') }}</div>

                            <div class="card-body ">
                                <form method="POST" action="{{ route('register') }}" class="" >
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Ad Soyad') }}</label>

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
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Adresi') }}</label>

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
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Şifre') }}</label>

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
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Şifreyi Onayla') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Kayıt Ol') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <span class="deneme">VIP ODALARIMIZ İLE BAYRAMIN 3. GÜNÜ DE SİZ DEĞERLİ MÜŞTERİLERİMİZE HİZMET VERMEYE DEVAM EDİYORUZ.. 🎮 #playstation #playstation4 #playstation5 #fifa20 #pes20 #nba2k20 #ufc3 #rdr2 #uncharted4 #gta5 #ankara #keçiören #sanatoryum #ankaraplaystation #ankaraplstationcafe #ankaraplaystationkirala #ps4 #ps5 #arapasplaystation
        1y</span>
    </section>





@endsection
