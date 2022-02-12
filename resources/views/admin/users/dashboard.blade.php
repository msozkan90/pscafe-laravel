@extends('admin_panel.layout_panel')
@section('style')
    <style>

    </style>
@endsection
@section('content')
    <div class="templatemo-content-container">
        @if(session("status"))

            <div class="alert alert-warning container" role="alert">
                {{session("status")}}
            </div>

        @endif
        <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
                <table class="table table-striped table-bordered templatemo-user-table">
                    <thead>
                    <tr>
                        <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">NAME<span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">EMAIL <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">PERMISSION <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">DATE <span class="caret"></span></a></td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcements as $announcement)
                        <tr>
                            <td>{{$announcement['id']}}</td>
                            <td>{{$announcement['name']}}</td>
                            <td>{{$announcement['email']}}</td>
                            <td>{{$announcement['permission']}}</td>
                            <td>{{$announcement->created_at->format('Y-m-d-H:i')}}</td>
                            <td><a href="{{route('admin.users.edit',['id'=>$announcement['id']])}}" class="templatemo-edit-btn">Edit</a></td>
                            <td><a href="{{route('admin.users.delete',['id'=>$announcement['id']])}}" class="templatemo-edit-btn">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
            {{$announcements->links()}}
        </div>
        <div class="col-1">
            <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2 class="text-uppercase">Kullanıcı Kayıt</h2></div>
                <div class="panel-body">
                    <form action="{{route('admin.users.add.post')}}" enctype="multipart/form-data" method="POST" class="templatemo-login-form">
{{--                        {{csrf_field()}}--}}
                        @csrf
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Kullanıcı Adı</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <span class="material-input"></span>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">E-mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span class="material-input"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Şifre</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span class="material-input"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Şifre Tekrar</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="templatemo-blue-button">Kullanıcı Ekle</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name
                | Design: Template Mo</p>
        </footer>
    </div>

@endsection
@section('script')
    <script>


    </script>
@endsection


