@extends('admin_panel.layout_panel')
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
                        <td><a href="" class="white-text templatemo-sort-by">QUESTION<span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">ANSWER <span class="caret"></span></a></td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcements as $announcement)
                        <tr>
                            <td>{{$announcement['id']}}</td>
                            <td>{{$announcement['question']}}</td>
                            <td>{{$announcement['answer']}}</td>
                            <td><a href="{{route('admin.sss.edit',['id'=>$announcement['id']])}}" class="templatemo-edit-btn">Edit</a></td>
                            <td><a href="{{route('admin.sss.delete',['id'=>$announcement['id']])}}" class="templatemo-edit-btn">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
            {{$announcements->links()}}
        </div>
        <div class="col-1">
            <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2 class="text-uppercase">S.S.S DÜZENLE</h2></div>
                <div class="panel-body">
                    <form action="{{route('admin.sss.edit.post',['id'=>$data[0]['id']])}}" enctype="multipart/form-data" method="POST" class="templatemo-login-form">
                        {{csrf_field()}}
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Soru</label>
                            <input type="text" name="question" value="{{$data[0]['question']}}" class="form-control">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Cevap</label>
                            <textarea name="answer" id="" cols="30" rows="10"
                                      class="form-control">{{$data[0]['answer']}}</textarea>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="templatemo-blue-button">Soruyu Ekle</button>
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
        /* Google Chart
        -------------------------------------------------------------------*/
        // Load the Visualization API and the piechart package.
        google.load('visualization', '1.0', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 3],
                ['Onions', 1],
                ['Olives', 1],
                ['Zucchini', 1],
                ['Pepperoni', 2]
            ]);

            // Set chart options
            var options = {'title':'How Much Pizza I Ate Last Night'};

            // Instantiate and draw our chart, passing in some options.
            var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
            pieChart.draw(data, options);

            var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
            barChart.draw(data, options);
        }

        $(document).ready(function(){
            if($.browser.mozilla) {
                //refresh page on browser resize
                // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
                $(window).bind('resize', function(e)
                {
                    if (window.RT) clearTimeout(window.RT);
                    window.RT = setTimeout(function()
                    {
                        this.location.reload(false); /* false to get page from cache */
                    }, 200);
                });
            } else {
                $(window).resize(function(){
                    drawChart();
                });
            }
        });

    </script>
@endsection


