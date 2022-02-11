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
        <div class="templatemo-content-widget no-padding" >
            <div class="panel panel-default table-responsive">
                <table class="table table-striped table-bordered templatemo-user-table">
                    <thead>
                    <tr>
                        <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">SUBJECT<span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">CONTENT <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">NUMBER <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">E-MAIL <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">DATE <span class="caret"></span></a></td>


                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcements as $announcement)
                        <tr>
                            <td>{{$announcement['id']}}</td>
                            <td>{{$announcement['subject']}}</td>
                            <td>{{$announcement['message']}}</td>
                            <td>{{$announcement['number']}}</td>
                            <td>{{$announcement['email']}}</td>
                            <td>{{$announcement->created_at->format('Y-m-d-H:i')}}</td>
                            <td><a href="{{route('admin.mail.delete',['id'=>$announcement['id']])}}" class="templatemo-edit-btn">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
            {{$announcements->links()}}
        </div>

        <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name
                | Design: Template Mo</p>
        </footer>
    </div>

@endsection
@section('script')



@endsection


