@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">  

                   
                <div class="card-header"><h1>{{$posts->title}}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>{{$posts->article}}</p>
                   <hr>
                   <small>Created at: {{ $posts->created_at->diffForHumans() }}</small>
                   <small style="padding-left: 80px">URL:<a href="{{url('blog/'.$posts->slug)}}">here</a></small>
                   <small style="padding-left: 100px">written: {{$posts->user_name}}</small>
                   <small style="float: right">Last Update: {{$posts->updated_at->diffForHumans() }}</small>
                </div>

            
                 
               <div class="container">
                   <h3>{{$posts->comments()->count()}}.Comments</h3>    <hr>

                   @foreach($posts->comments as $comment)
                    <strong>{{$comment->name}}</strong> <br>
                     <small>{{$comment->created_at->diffForHumans()}}</small>

                    <p>{!!$comment->comment!!}</p>

                  @endforeach
               </div>

               <hr>
                <form method="post" enctype="multipart/form-data" action="{{action('commentController@store',$posts->id)}}">
                    {{csrf_field()}}
                    <div class="row container">

                      <div class="col-md-6 ">
                   {{--      <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control">
                    </div> --}}
                    {{-- <input type="hidden" name="__method" value="{{$posts->id}}"> --}}
                   {{--    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                      <label>E-mail</label>
                      <input type="text" name="email" class="form-control">
                    </div> --}}
                      </div>
                    </div>
                    <div class="form-group container">
                      <label>Comment</label>
                      <textarea name="comment" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-info form-control">Submit</button>

                </form>
            </div>
        </div>
    </div>

</div>
<!-- Container (Contact Section) -->

@endsection
