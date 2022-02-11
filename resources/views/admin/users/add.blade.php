
@extends('admin.adminlayout')
@section('style')

    <style>
        html{
            background-color: #0a53be!important;
        }
        .announce-list{
            width: 1000px;

        }
        section.our-course {
            background-color: #0a58ca;
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 140px;
            padding-bottom: 130px;


        }
        .table{
            border: 2px solid white;
            color: white;
            font-weight: bold;
        }
        .form-add{
            width: 1000px!important;
            margin-left: 330px;
        }
        div.row{
            padding: 10px;
        }
    </style>
@endsection
@section('content')

    <section class="our-course">
        <div class="card form-add">


            @if(session("status"))

                <div class="alert alert-warning" role="alert">
                    {{session("status")}}
                </div>

            @endif
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Duyuru Ekle</h4>
                <p class="category">Duyuru Oluşturunuz</p>
            </div>
            <div class="card-content">
                <form class="" enctype="multipart/form-data" action="{{route('admin.announcement.add.post')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Duyuru Başlığı</label>
                                <input type="text" name="title" class="form-control">
                                <span class="material-input"></span>
                            </div>
                        </div>
                    </div>
                    {{--            <div class="row">--}}
                    {{--                <div class="col-md-12">--}}
                    {{--                    <div class="form-group label-floating is-empty">--}}
                    {{--                        <input style="opacity: 1;position:inherit" type="file" name="image">--}}
                    {{--                        <span class="material-input"></span>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--            </div>--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Duyuru İçeriği</label>
                                <textarea name="content" id="" cols="30" rows="10"
                                          class="form-control"></textarea>
                                <span class="material-input"></span>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="image" placeholder="Choose image" id="image">
                                {{--                    @error('image')--}}
                                {{--                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
                                {{--                    @enderror--}}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Duyuru Ekle</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </section>
@endsection
