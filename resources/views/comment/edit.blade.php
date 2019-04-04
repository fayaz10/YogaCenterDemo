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
                   
                     <form method="post" enctype="multipart/form-data" 
                         action="{{action('commentController@update',$com->id)}}">
                    {{csrf_field()}}
                       <div class="form-group">
                           <label>name</label>
                           <input type="text" name="name" disabled class="form-control" value="{{$com->name}}" required>
                       </div>
                        <div class="form-group">
                           <label>email</label>
                           <input type="text" name="email"disabled class="form-control" value="{{$com->email}}" required>

                       </div>
                        <div class="form-group">
                           <label>commernt</label>
                           <textarea type="text" name="comment" class="form-control">{{$com->comment}}</textarea>
                       </div>
                    <button type="submit" class="btn btn-info form-control">Update</button>
                          <input type="hidden" name="post_id" value="{{$com->post_id}}">
                          <input type="hidden" name="_method" value="PUT">

                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
 @endsection
         
