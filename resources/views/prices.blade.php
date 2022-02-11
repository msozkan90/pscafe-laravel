@extends('layout2')
@section('style')
    <style>
    .price-item{
        background-color: white;
        margin: 50px;
        min-height: 430px;
        border-radius: 5px;
    }
    .item{
        position: relative;
    }
    .buton-fee{
        position: absolute;
        right: 10px;
        bottom: 20px;
    }
    .info-fee{
        position: absolute;
        left: 10px;
        bottom: 20px;
    }
    .info-fee2{
        position: absolute;
        left: 10px;
        bottom: 50px;
    }
    </style>
@endsection
@section('content')

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>FİYATLAR</h2>
                    </div>
                </div>
                <div class="col-lg-12" >
                    <div class="row" >
                        @foreach($prices as $price)
                            <div class="col-lg-3 price-item " style="position: relative">
                                <div class="thumb">
                                    <img src="{{asset($price['image'])}}" alt="Course One">
                                <div class="down-content">
                                    <h4 class="pt-0">{{$price['content']}}</h4>
                                </div>
                                    <div class="info ">
                                        <div class="row pb-2 mt-0">
                                            <div class=" pt-0 mt-0">
                                                <p class="pt-0 mt-0 info-fee"> <b> {{$price['category']}}</b>  </p>
                                            </div>
                                            <div class="pt-0 mt-0">
                                                <h4 class=" info-fee2"><b>{{$price['price']}}₺</b></h4>
                                                <a href="{{route('contact')}}" style="" class="buton-fee"><button class="btn btn-info" style="width: 115px;height: 40px;" ><p style="font-size: small;font-weight: bold">Rezervasyon </p> </button></a>

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




