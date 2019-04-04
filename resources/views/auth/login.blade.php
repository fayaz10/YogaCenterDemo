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

            <h3 class="title-w3pvt text-center">Signin Now</h3>
            <!---728x90--->

            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" method="POST" action="{{ route('login') }}">

                        @csrf
                    <div class="form-group">
                        <label class="mb-2">Email Address</label>
                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       {{--  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required=""> --}}
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                
                    </div>
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label><br>
                    <button type="submit" class="btn btn-primary submit mt-2 read-more">Sign In</button>
                    <p class="text-center mt-4">
                        <a href="/register2"> Don't have an sdfg Account?</a>
                    </p>
                      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </form>
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