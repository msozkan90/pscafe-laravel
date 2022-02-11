@extends('layout2')

@section('content')
    <style>
        .form-auth{

            font-weight: bold;
            font-size: larger;
            color: white;
            border: 1px solid black;
            background-image:linear-gradient(rgba(225,225,225,0.1), rgba(225,225,225,0.1)), url(../../../images/background/321.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .accordions{
            /*background-image:linear-gradient(rgba(255,255,255,0.1), rgba(255,255,255,0.1)), url(../../../images/background/9f3fefe825700bd6eaf0e307b016c381.jpg);*/
            background-color: #191919;
        }
        .btn-primary{
            font-weight: bold;
            font-size: large;
            color: white;

        }
        .for-pw{
            color: white;
            font-weight: bold;
            font-size: large;
        }
    </style>

    <section class="apply-now" id="apply">
        <br><br><br>
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="accordions is-first-expanded">

                        <div class="card form-auth">
                            <div class="card-header">{{ __('GİRİŞ YAP') }}</div>

                            <div class="card-body ">
                                <form method="POST"  action="{{ route('login') }}">
                                    @csrf
                                    <br>
                                    <div class="row mb-3 form-inputs">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Adresi') }}</label>

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
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Şifre') }}</label>

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
                                                    {{ __('Beni Hatırla') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0 form-inputs">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary" style="font-weight: bold;width: 150px;">
                                                {{ __('Giriş') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link for-pw" href="{{ route('password.request') }}">
                                                    {{ __('Şifreni mi unuttun?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
