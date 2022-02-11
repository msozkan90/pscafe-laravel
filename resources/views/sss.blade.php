@extends('layout2')
@section('style')
    <style>
.title-section{

    text-align: center;
    padding: 10px;

    border-radius: 5px;

}
    </style>
@endsection
@section('content')



    <section class="apply-now" id="apply">
        <br>
        <div class="container  title-section" style=""> <h3 style="font-weight: bolder;"> SIKÇA SORULAN SORULAR</h3></div>
        <br><br>
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="accordions is-first-expanded">
                        @foreach($questions as $question)
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>{{$question['question']}}</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>{{$question['answer']}} </p>
                                    <br>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection

{{--<article class="accordion last-accordion">--}}
{{--    <div class="accordion-head">--}}
{{--        <span>Share this to your colleagues</span>--}}
{{--        <span class="icon">--}}
{{--                        <i class="icon fa fa-chevron-right"></i>--}}
{{--                    </span>--}}
{{--    </div>--}}
{{--    <div class="accordion-body">--}}
{{--        <div class="content">--}}
{{--            <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>--}}
{{--                Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</article>--}}
