@extends('layout2')
@section('style')
    <style>

        .b_danger{
            position: absolute!important;
            right: 25px;
            bottom: 40px;
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
{{--    <section class="section main-banner" id="top" data-section="section1">--}}
{{--        <div class="video-overlay header-text">--}}
  <section class="upcoming-meetings" id="meetings">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>DUYURULAR</h2>
                    </div>
                </div>
{{--                <div class="col-lg-4">--}}
{{--                    <div class="categories">--}}
{{--                        <h4>Meeting Catgories</h4>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Sed tempus enim leo</a></li>--}}
{{--                            <li><a href="#">Aenean molestie quis</a></li>--}}
{{--                            <li><a href="#">Cras et metus vestibulum</a></li>--}}
{{--                            <li><a href="#">Nam et condimentum</a></li>--}}
{{--                            <li><a href="#">Phasellus nec sapien</a></li>--}}
{{--                        </ul>--}}
{{--                        <div class="main-button-red">--}}
{{--                            <a href="meetings.html">All Upcoming Meetings</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($announcements as $announcement)
                        <div class="col-lg-4"  style="position: relative">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>{{$announcement['created_at']->format('d/m/y')}}</span>
                                    </div>
                                    <a href="{{route('announcement-detail',['id'=>$announcement['id']])}}"><img style="max-height: 220px!important;" src="{{asset($announcement['image'])}}" alt="Student Training"></a>
                                </div>
                                <div class="down-content" style="min-height: 150px!important;max-height: 150px!important;padding-top: 5px">
{{--                                    <div class="date">--}}
{{--                                        <h9> <span></span></h9>--}}
{{--                                    </div>--}}
                                    <div style="padding-left: 0px!important;padding-top: 30px!important;float:left">
                                    <a href="{{route('announcement-detail',['id'=>$announcement['id']])}}"><h4>{{Str::limit($announcement->title, 42, $end='...')}}</h4></a>
                                        <a href="{{route('announcement-detail',['id'=>$announcement['id']])}}">  <button class="btn btn-danger b_danger"> DETAYLAR>>> </button></a>
                                    </div>

{{--                                        <div style="padding-left: 0px!important;padding-top: 0px!important;float:left">--}}
{{--                                    {{Str::limit($announcement->content, 35, $end='...')}} --}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{$announcements->links()}}
                </div>

            </div>
        </div>

    </section>




@endsection
