{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}

{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="TemplateMo">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">--}}

{{--    <title>AraPasPlaystationCafe</title>--}}

{{--    <!-- Bootstrap core CSS -->--}}
{{--    <link href="{{asset('admin_css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}


{{--    <!-- Additional CSS Files -->--}}
{{--    <link rel="stylesheet" href="{{asset('admin_css/assets/css/fontawesome.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin_css/assets/css/templatemo-edu-meeting.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin_css/assets/css/owl.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin_css/assets/css/lightbox.css')}}">--}}
{{--    <!----}}

{{--    TemplateMo 569 Edu Meeting--}}

{{--    https://templatemo.com/tm-569-edu-meeting--}}

{{--    -->--}}
{{--</head>--}}
{{--<style>--}}
{{--    html{--}}
{{--        background-color: #0a53be!important;--}}
{{--    }--}}
{{--    .announce-list{--}}
{{--        width: 1000px;--}}

{{--    }--}}
{{--    section.our-course {--}}
{{--        background-color: #0a58ca;--}}
{{--        background-position: center center;--}}
{{--        background-attachment: fixed;--}}
{{--        background-repeat: no-repeat;--}}
{{--        background-size: cover;--}}
{{--        padding-top: 140px;--}}
{{--        padding-bottom: 130px;--}}

{{--    }--}}
{{--    .table{--}}
{{--        border: 2px solid white;--}}
{{--        color: white;--}}
{{--        font-weight: bold;--}}
{{--    }--}}
{{--</style>--}}
{{--<body>--}}
<!-- Sub Header -->
@extends('admin.adminlayout')
@section('style')
    <style>

        /*svg.w-5{*/
        /*    height: 25px;*/
        /*    width: 25px;*/

        /*}*/
        /*nav.items-center{*/
        /*    display: inline-block;*/

        /*}*/
        /*p.text-sm{*/
        /*    color: white;*/

        /*    padding: 10px;*/

        /*    font-size: 16px;*/
        /*    text-align: center;*/
        /*}*/

        /*span.relative{*/
        /*    margin: 0px!important;*/

        /*}*/
    </style>
@endsection
@section('content')


<section class="our-course">

    @if(session("status"))

        <div class="alert alert-warning container" role="alert">
            {{session("status")}}
        </div>

    @endif
<div class="container announce-list">
    <a href="{{route('admin.announcement.add')}}"   class="btn btn-danger">ADD</a>
    <br><br>
<table class="table">


    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">TITLE</th>
        <th scope="col">DATE</th>
        <th scope="col">EDIT</th>
        <th scope="col">DELETE</th>
    </tr>
    </thead>
    <tbody>
    @foreach($announcements as $announcement)
    <tr>
        <th scope="row">{{$announcement['id']}}</th>
        <td>{{$announcement['title']}}</td>
        <td>{{$announcement->created_at->format('Y-m-d-H:i')}}</td>
        <td> <a href="{{route('admin.announcement.edit',['id'=>$announcement['id']])}}"   class="btn btn-danger">EDIT</a> </td>
        <td><a href="{{route('admin.announcement.delete',['id'=>$announcement['id']])}}" class="btn btn-danger">DELETE</a></td>
    </tr>
    @endforeach
    </tbody>

</table>
    {{$announcements->links()}}


</div>
</section>
@endsection
{{--<!-- Scripts -->--}}
{{--<!-- Bootstrap core JavaScript -->--}}
{{--<script src="{{asset('admin_css/vendor/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}

{{--<script src="{{asset('admin_css/assets/js/isotope.min.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/assets/js/owl-carousel.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/assets/js/lightbox.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/assets/js/tabs.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/assets/js/video.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/assets/js/slick-slider.js')}}"></script>--}}
{{--<script src="{{asset('admin_css/assets/js/custom.js')}}"></script>--}}
{{--<script>--}}

{{--</script>--}}
{{--</body>--}}

{{--</html>--}}
