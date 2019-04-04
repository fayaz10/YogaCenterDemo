@extends('layouts.app2')

@section('content2')
    <!-- //header -->
    <div class="main-content inner" style="background: url(../images/banner1.jpg) no-repeat center;">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <section class="events py-5">
        <div class="container py-md-5">
            <!---728x90--->
            <h3 class="title-w3pvt text-center">News & Events</h3>
            <!---728x90--->
         @foreach($events as $event)
            <div class="row mid-grids mt-5">
                <div class="col-md-5 content-w3pvt-img">
                    <a href="{{url('blog/'.$event->slug)}}" ><img src="/storage/cover_image/{{$event->cover_image}}"  alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1"><a href="single.html">{{$event->title}}</a></h5>
                    {{-- <small>Feb 06.2019</small> --}}
                    <p class="mt-2 text-left">{!!str_limit($event->article,500)!!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- //banner-bottom -->

    <!-- //banner-bottom -->
    <!---728x90--->

    <!--/help-line -->
    <section class="help-line-w3layouts py-5">
        <div class="container">
            <div class="row help-line-grid">
                <div class="col-sm-6">
                    <h3>Contact Us</h3>
                    <p>Call us, we are 24/7 Helpline</p>
                </div>
                <div class="col-sm-6 text-sm-right mt-sm-0 mt-3">
                    <h3><span class="fa fa-phone" aria-hidden="true"></span> +11 2345 6789</h3>
                </div>
            </div>
        </div>
    </section>
    <!--//help-line -->
    <!-- footer -->

@endsection