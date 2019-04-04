@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">  

                   
                <div class="card-header"><h1>{{$post->title}} 
                </h1><hr>
                 <img src="/storage/cover_image/{{$post->cover_image}}">
                 

               </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>{!!$post->article!!}</p>
                   <hr>
                   <small>Created at: {{ $post->created_at->diffForHumans() }}</small>
                   <small style="padding-left: 80px">URL:<a href="{{url('blog/'.$post->slug)}}">here</a></small>
                   <small style="padding-left: 100px">written: {{$post->user_name}}</small>
                   <small style="padding-left: 100px">Category: {{$post->category->name}}</small>
                   <small style="float: right">Last Update: {{$post->updated_at->diffForHumans() }}</small>
                </div>
                <hr>
                <div class="container">
                <strong>{{$post->comments()->count()}}.Comments</strong>
                </div>
                <table>
                  <tr>
                  <th style="border: 1px solid gray">name</th>
                  <th style="border: 1px solid gray">email</th>
                  <th style="border: 1px solid gray">comment</th>
                  <th style="border: 1px solid gray">action</th>
                  </tr>
               @foreach($post->comments as $com)
                     <tr>
                    <td style="border: 1px solid gray">{{$com->name}}</td>
                    <td style="border: 1px solid gray">{{$com->email}}</td>
                    <td style="border: 1px solid gray">{!!$com->comment!!}</td>
                    <td style="border: 1px solid gray">
                     @if(!Auth::guest())
                      @if(Auth::user()->id == $post->user_id)
                      <form method="get" action="{{action('commentController@edit',$com->id)}}" 
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                      <button type="submit" class="btn btn-info">ED</button>
                      </form>
                      
                   <form method="post" enctype="multipart/form-data" action="{{action('commentController@destroy',$com->id)}}">
                      {{csrf_field()}}
                       <input type="hidden" name="_method" value="DELETE">
                      
                     <div class="col-md-6">
                      <button class="btn btn-danger">DE</button>
                    </div>
                   @endif
                   @endif
                 </form>
                    </td>
                    </tr>
               @endforeach
                </table>
               <hr>
              <center> <small>Copyright|reseirved <a href="#">Fayaz nasrati</a></small></center>
            </div>
        </div>
    </div>
          
</div>
<!-- Container (Contact Section) -->

@endsection
