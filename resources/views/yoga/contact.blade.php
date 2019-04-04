@extends('layouts.app2')

@section('content2')

    <!-- //header -->
    <div class="main-content inner" style="background: url(../images/banner1.jpg) no-repeat center;">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- banner-bottom -->
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <!---728x90--->

            <h3 class="title-w3pvt text-center">Contact Us </h3>
            <!---728x90--->

            <div class="comment-top mt-5 row">
                <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                    <img class="img-fluid" src="images/contact.jpg" alt="">
                </div>
                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                     <form data-parsley-validate method="POST" enctype="multipart/form-data" action="{{ url('EContact') }}">
                    {{csrf_field()}}
                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                               <div class="col-lg-6 form-group">
                                <label>Email</label>
                               <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                       
                              <div class="col-lg-6 form-group">
                                <label>Subject</label>
                                  <input type="text" name="subject" class="form-control" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Write Message</label>
                            <textarea class="form-control" name="user_message"  placeholder="" required=""></textarea>
                        </div>
                        <button type="submit" class="read-more btn submit mt-3">Submit</button>
                    </form>
                </div>

            </div>

            <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                            
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>The company name
                                <br>California, USA </p>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="far fa-envelope-open"></span>
                            <!-- <i class="far fa-envelope-open"></i> -->
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">mail@example.com</a>
                            <br>
                            <a href="mailto:info@example.com">mail2@example.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Phone Number</h6>
                            <p>+ 1234567890</p>
                            <p>+ 0987654321</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="map-fo mt-lg-5 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen=""></iframe>
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
