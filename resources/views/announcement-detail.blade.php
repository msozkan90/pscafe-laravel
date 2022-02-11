@extends('layout2')
@section('style')
    <style>


    </style>
@endsection
@section('content')

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($announcements as $announcement)
                            <div class="col-lg-12 ann-detail"  style="position: relative;min-height: 1300px!important;max-width: 1300px!important;">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>{{$announcement['created_at']->format('d/m/y')}}</span>
                                        </div>
                                        <a href=""><img src="{{asset(\App\Helper\imageUpload::largeImage($announcement['image']))}}" alt="Student Training"></a>
                                    </div>
                                    <div class="down-content" style="min-height: 150px!important;max-height: 150px!important;padding-top: 5px">

                                        <div style="padding-left: 0px!important;padding-top: 30px!important;float:left">
                                            <a href="meeting-details.html"><h4>{{$announcement->title}}</h4></a>

                                        </div>

                                                                                <div style="padding-left: 0px!important;padding-top: 0px!important;float:left">
                                                                            {{$announcement->content}}
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
