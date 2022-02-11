@extends('layout2')
@section('style')
    <style>
        .form-auth{

            font-weight: bold;
            font-size: larger;
            color: white;
            border: 1px solid black;
            background-image:linear-gradient(rgba(225,225,225,0.3), rgba(225,225,225,0.3)), url(../../../images/background/9f3fefe825700bd6eaf0e307b016c381.jpg);
            /*background-repeat: no-repeat;*/
            /*background-size: auto;*/
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
        html{
            background-color:#101010;
        }
        body{
            background-color:#101010;
        }
    </style>
@endsection
@section('content')
    <br><br><br>
    <section class="upcoming-meetings " id="meetings">
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card form-auth ">
                <div class="card-header">{{ __('ŞİFRE DEĞİŞTİRME') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Şifre Değiştirme Linki Gönder') }}
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
@endsection
