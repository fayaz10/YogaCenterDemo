@extends('layouts.app')

@section('content')

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
{{--     <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div> --}}
{{--     <div class="col-sm-7 slideanim">
      <div class="row">
        <form method="post" enctype="multipart/form-data" action="{{action('ContactController@store')}}">
          {{csrf_field()}}
        
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="user_message" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </form> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                     <form data-parsley-validate method="post" enctype="multipart/form-data" action="{{action('ContactController@store')}}">
                        {{-- <input type="hidden" name="_method" value="get"> --}}
                    {{csrf_field()}}
                       <div class="form-group">
                           <label>name</label>
                           <input type="text" name="name" class="form-control" required>
                       </div>
                       <div class="form-group">
                           <label>email</label>
                           <input type="email" name="email" class="form-control" required>
                       </div>
                       <div class="form-group">
                        <label>message</label>
                           <textarea id="article-ckeditor" class="form-control" name="user_message" rows="10" required></textarea>
                       </div>
                      
                       <button  class="btn btn-info">-Submit-</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
  </div>
</div>


{{-- Image of location/map --}}
{{-- <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%"> --}}

<footer class="container-fluid text-center"><hr>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Alright reserved |<a href="#" title="Visit w3schools">fayaz nasrati</a></p>
</footer>
@endsection
