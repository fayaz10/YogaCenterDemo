@extends('layouts.app')

@section('content')

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">E-CONTACT</h2>
  <div class="row">


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

                  
                     <form data-parsley-validate method="POST" enctype="multipart/form-data" action="{{ url('EContact') }}">
          
                        {{-- <input type="hidden" name="_method" value="get"> --}}
                    {{csrf_field()}}
                      
                       <div class="form-group">
                           <label>E-mail</label>
                           <input type="email" name="email" class="form-control" required>
                       </div>
                         <div class="form-group">
                           <label>Name</label>
                           <input type="text" name="name" class="form-control" required>
                       </div>
                         <div class="form-group">
                           <label>Phone</label>
                           <input type="text" name="phone" class="form-control" required>
                       </div>
                        <div class="form-group">
                           <label>Subject</label>
                           <input type="text" name="subject" class="form-control" required>
                       </div>
                       <div class="form-group">
                        <label>Message</label>
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
