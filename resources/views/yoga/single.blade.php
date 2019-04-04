@extends('layouts.app2')

@section('content2')
  <!-- //header -->
    <div class="main-content inner" style="background: url(../images/banner1.jpg) no-repeat center;">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">

        <div class="container py-md-4 ">
            <!---728x90--->

            <div class="header-w3layouts text-center mb-5">
                <h3 class="title-w3pvt mb-5">{{$posts->title}}</h3>
            </div>
            <!---728x90--->

            <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
                <div class="content-sing-w3layouts px-lg-5">
                    <img class="img-fluid" src="/storage/cover_image/{{$posts->cover_image}}" alt=""><br><hr>
                    <small style="float: right;font-size: 12px">Last Update: {{$posts->updated_at->diffForHumans() }}</small>
                  <p>{!!$posts->article!!}</p>
                    <ul class="social_section_1info">
                        <li class="lead">
                            Catch On Social :
                        </li>
                     <li class="mb-2 facebook"><a href="#"><span class="fab fa-facebook-f"></span> facebook</a></li>
                    <li class="mb-2 twitter"><a href="#"><span class="fab fa-twitter"></span> twitter</a></li>
                    <li class="google"><a href="#"><span class="fab fa-google-plus"></span> google</a></li>
                    <li class="linkedin"><a href="#"><span class="fab fa-linkedin"></span> linkedin</a></li>
                    </ul>


                </div>
                <div class="row my-lg-5 my-3 mx-0">
                    <div class="col-md-6 text-info pl-0">
                        <p>Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor elementum id enim volutpat...</p>
                    </div>
                    <div class="col-md-6 team-img">
                        <div class="row">
                            <div class="col-lg">
                                <img src="../images/n2.jpg" class="img-fluid" alt="user-image">
                            </div>
                            <div class="col-lg">
                                <img src="../images/n3.jpg" class="img-fluid" alt="user-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-sec-w3layouts">
                    <h4 class="leave-w3layouts">{{$posts->comments()->count()}} Comments</h4>
                    <ul class="list-unstyled">

                   @foreach($posts->comments as $comment)
                        <li class="media">
                            {{-- <img class="mr-3 img-fluid" src="../images/te1.jpg" alt=""> --}}

                            <div class="media-body">
                                <h5 class="mt-0 mb-1">{{$comment->name}}  <small style="font-size: 12px">{{$comment->created_at->diffForHumans()}}</small></h5>
                            {{-- <small style="font-size: 12px">{{$comment->created_at->diffForHumans()}}</small> --}}
                                <p class="mt-3">{!!$comment->comment!!}</p>
                            </div>
                        </li>

                  @endforeach
                    {{--     <li class="media my-5 ml-3">
                            <img class="mr-3 img-fluid" src="images/te2.jpg" alt="">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Jacke Masito</h5>
                                <p class="mt-3">Integer pulvinar leo id viverra feugiat. Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod magna.</p>
                            </div>
                        </li>
                        <li class="media ml-5">
                            <img class="mr-3 img-fluid" src="images/te3.jpg" alt="">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">William James</h5>
                                <p class="mt-3">Integer pulvinar leo id viverra feugiat. Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod magna.</p>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="comment-bottom w3pvt_mail_grid_right p-0 my-lg-5 my-4">
                    <h4 class="leave-w3layouts">Leave a Reply</h4>
                    <form method="post" enctype="multipart/form-data" action="{{action('commentController@store',$posts->id)}}">
                    {{csrf_field()}}


                        <div class="form-group">
                            <label>Write Message</label>
                            <textarea class="form-control" name="comment" placeholder="" required=""></textarea>
                        </div>
                   {{--      <div class="row leave-comment">
                            <div class="col-lg-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                        </div> --}}

                        <button type="submit" class="btn submit mt-3">Submit</button>
                    </form>
                </div>

            </div>
        </div>


    </section>
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
@endsection
{{-- =========================================================================== --}}

