@extends('layouts.app2')

@section('content2')

    <!-- //header -->
    <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- banner-bottom -->
  
    <section class="events py-5">
        <div class="container py-md-5">
            <!---728x90--->

            <h3 class="title-w3pvt text-center">Our Classes</h3>

            <div class="row ab-info second mt-lg-4 text-center">
                @foreach($ourClasses as $ourClass)
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                    <div class="ab-content-inner">
                        <a href="{{url('blog/'.$ourClass->slug)}}"><img src="/storage/cover_image/{{$ourClass->cover_image}}" 
                         alt="{{$ourClass->title}}" class="img-fluid"></a>
                    </div>
                       <div class="ab-info-con">
                            <h4> {{$ourClass->title}}</h4>
                            <p>{!! str_limit($ourClass->article,200) !!}</p><br>
                            <a href="{{url('blog/'.$ourClass->slug)}}" class="read-more two btn m-0 px-3">
                                <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!-- /services -->
    <section class="services py-5">
        <div class="container py-md-5">
            <div class="row ab-info">
                 @foreach($services1 as $service)
                <div class="col-lg-6 ab-content text-left pr-lg-5">
                    <h3 class="title-w3pvt">{{$service->title}}</h3>
                    <h5>Nulla uter sollicitudin velit</h5>
                    <p>{!!$service->article!!} </p>
                </div>
                @endforeach
                @foreach($services as $service)
                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="{{url('blog/'.$service->slug)}}"><img src="/storage/cover_image/{{$service->cover_image}}" alt="{{$service->title}}" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4> {{$service->title}}</h4>
                            <a href="{{url('blog/'.$service->slug)}}" class="read-more two btn m-0 px-3">
                                <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /services -->
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
    <!---728x90--->

    <!-- footer -->
@endsection