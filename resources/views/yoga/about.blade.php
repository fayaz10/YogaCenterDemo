@extends('layouts.app2')

@section('content2')
    <!-- //header -->
    <div class="main-content inner" style="background: url(../images/banner1.jpg) no-repeat center;">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- //about -->
    <section class="banner-bottom py-5" >
        <div class="container py-md-5">
            <!---728x90--->

            <div class="row banner-grids mb-lg-5">

                 @foreach($abouts as $about)
                <div class="col-lg-7 content-right">
                    <h3 class="title-w3pvt">{{$about->title}}</h3>
                    <p>{!!$about->article!!} </p>
                    @endforeach
                    <div class="row stats text-left mt-5">
                        <div class="col-lg-4 counter">
                            <span class="fa fa-users"></span>
                            <div class="counter-info">
                                 <h5> {{count( $users) }}+</h5>
                                 <p>Members</p>
                            </div>
                        </div>
                        <div class="col-lg-4 counter two">
                            <span class="fa fa-user-md"></span>
                            <div class="counter-info">
                                 <h5>{{ count($ourClassesno) }}+</h5>
                                <p>Classes</p>

                            </div>
                        </div>
                        <div class="col-lg-4 counter">
                            <span class="fas fa-gem"></span>
                            <div class="counter-info">
                                <h5>{{ count($comments) }}+</h5>
                                <p>Experience</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 content-left">

                 @foreach($abouts as $about)
                    <img src="/storage/cover_image/{{$about->cover_image}}" alt="" class="img-fluid">
                    @endforeach
                </div>

            </div>
            <!---728x90--->

        </div>
    </section>
    <!-- /about -->


    <!-- /last-content -->

     <!-- /last-content -->
    <section class="last-content py-5" style="background: url(../images/banner3.jpg) no-repeat center;">

        <div class="container text-center py-md-5">
            <div class="last-w3pvt-inner-content row">

                <div class="col-md-6">

                    {{-- <form action="#" class="booking" method="post"> --}}
                    <form data-parsley-validate method="POST"class="booking" 
                        enctype="multipart/form-data" action="{{ url('APindex2') }}">
                    {{csrf_field()}}
                        <h3 class="mb-4">Make a Appointment</h3>
                        <div class="form-group">
                            <input placeholder="Your Name" name="name" type="text" required="">
                            <input placeholder="Contact Number" name="phone" type="text" required="">
                            <input placeholder="E-mail" type="email" name="email" required="">
                            <input placeholder="Subject" type="text" name="subject" required="">
                            <input placeholder="Timing" type="text" name="time" required="">
                            <button class="book-appo btn mt-3">Quick Appointment </button>

          
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
    <!-- //last-content -->
    <!-- //last-content -->
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
                     {{--    <div class="ab-info-con">
                            <h4>{{$ourClass->title}}</h4>
                            <h1>{!! str_limit($ourClass->article , 100)!!}</h1><br>
                            <a href="#" class="read-more two btn m-0 px-3">
                            <i class="fas fa-long-arrow-alt-right"></i></a>
                         </div> --}}
                          <div class="ab-info-con">
                            <h4> {{$ourClass->title}}</h4>
                            <p>{!! $ourClass->article !!}</p><br>
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
     <!-- /team-content -->
    <section class="services py-5" id="team">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center mb-5">Our Trainers</h3>
            <div class="row team-grids text-left mt-md-5 mt-4">
                  @foreach($trainers as $trainer)
                <div class="col-lg-4 team-main">

                    <div class="team-img"><img src="/storage/cover_image/{{$trainer->cover_image}}"
                     alt="{{$trainer->title}}" class="img-fluid"> </div>
                    <div class="team-info">

                        <h4>{{$trainer->title}}</h4>
                        {{-- <small>Feb 03.2019</small> --}}
                        <p>{!! str_limit($trainer->article , 500)!!}</p>
                    </div>
                </div>
              @endforeach
            </div>

        </div>
    </section>
    <!-- //team-content -->

    <!--/testimonials -->
    <section class="testimonials py-5" id="testimonials" style="background: url(../images/banner2.jpg) no-repeat center;">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="title-w3pvt two mb-lg-5 mb-4"> Client Reviews<span>.</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>
                    <div class="test-img text-right mb-3">
                        <img src="images/te2.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

                    <ul class="list-unstyled w3layouts-icons clients text-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>

                    <div class="test-img text-right mb-3">
                        <img src="images/te3.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right"> Abraham Smith</h3>

                    <ul class="list-unstyled w3layouts-icons clients text-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>

                    <div class="test-img text-right mb-3">
                        <img src="images/te1.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

                    <ul class="list-unstyled w3layouts-icons clients text-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials -->
@endsection