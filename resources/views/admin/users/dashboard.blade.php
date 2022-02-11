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
                <div class="panel-heading"><h2 class="text-uppercase">Login Form</h2></div>
                <div class="panel-body">
                    <form action="{{route('admin.admin_panel.add.post')}}" enctype="multipart/form-data" method="POST" class="templatemo-login-form">
                        {{csrf_field()}}
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Duyuru Başlığı</label>
                            <input type="text" name="title" class="form-control">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Duyuru İçeriği</label>
                            <textarea name="content" id="" cols="30" rows="10"
                                      class="form-control"></textarea>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">

                        </div>
                        <div class="form-group">
                            <button type="submit" class="templatemo-blue-button">Submit</button>
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


