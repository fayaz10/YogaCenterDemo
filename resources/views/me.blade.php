@extends('layouts.app')

@section('content')
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

                  
                     <form method="post" enctype="multipart/form-data" action="{{action('ContactController@store')}}">
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
                           <textarea id="article-ckeditor" class="form-control" name="user_message" rows="10"></textarea>
                       </div>
                      
                       <button  class="btn btn-info">-Submit-</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
