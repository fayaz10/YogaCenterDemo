
{{-- =============================================================== --}}
@extends('layouts.manage')

@section('content')
<div class="container ">
<div class="row">
  <div class="card mb-8" style="max-width: 50rem" >
  <img class="card-img-top" src="/storage/cover_image/{{$post->cover_image}}" style="height:400px;width: auto;"alt="Card image cap">
  <hr>
  <div class="card-body">
    <h3 class="card-title">{{$post->title}}</h3>
    <p class="card-text">{!!$post->article!!}<p><br><br><br><hr> 
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
                     {{-- @if(!Auth::guest()) --}}
                      {{-- @if(Auth::user()->id == $post->user_id) --}}
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
                   {{-- @endif --}}
                   {{-- @endif --}}
                 </form>
                    </td>
                    </tr>
               @endforeach
                </table>
               <hr>
  </div>
</div>

  <div class="col-md-3">
      <div class="card bg-light mb-3" style="width: 18rem;">
          <div class="card-header">Actions 
              <a href="/manage/post"><button style="float: right"  type="button" class="btn btn-outline-info btn-sm">Go Back</button></a>
          </div>
          <div class="card-body">
            <h5 class="card-title"><b>Slug:</b> {{$post->slug}}</h5>
            <p class="card-text">
              <small class="text-muted"><b>Created at: </b>{{$post->created_at->diffForHumans()}}</small><br>
              <small class="text-muted"><b>last update: </b>{{$post->updated_at->diffForHumans()}}</small><br>
            </p><hr>
            <div class="row">
             <form method="get" enctype="multipart/form-data" action="{{action('PostController@edit',$post->id)}}">
            <button type="submit" class="btn btn-outline-success btn-sm">Edit post</button>
               </form>
                  <form  method="post" enctype="multipart/form-data" action="{{action('PostController@destroy',$post->id)}}">
                              {{csrf_field()}}
                               <input type="hidden" name="_method" value="DELETE">
              <button   style="margin-left: 50px" type="submit" class="btn btn-outline-danger btn-sm">Delete post</button>
            </form>
            </div>
          </div>
      </div>

  </div>
  </div>
</div><br><br><br>
 <hr>

@endsection
