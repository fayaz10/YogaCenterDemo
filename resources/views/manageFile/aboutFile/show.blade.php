@extends('layouts.manage')

@section('content')
<div class="container ">
<div class="row">
  <div class="card mb-8" style="max-width: 50rem" >
  <img class="card-img-top" src="/storage/cover_image/{{$about->cover_image}}" style="height:400px;width: auto;"alt="Card image cap">
  <hr>
  <div class="card-body">
    <h3 class="card-title">{{$about->title}}</h3>
    <p class="card-text">{!!$about->article!!}<p><br><br><br><hr> 
  </div>
</div>
  <div class="col-md-3">
      <div class="card bg-light mb-3" style="width: 18rem;">
          <div class="card-header">Actions 
              <a href="/manage/about"><button style="float: right"  type="button" class="btn btn-outline-info btn-sm">Go Back</button></a>
          </div>
          <div class="card-body">
            <h5 class="card-title"><b>Slug:</b> {{$about->slug}}</h5>
            <p class="card-text">
              <small class="text-muted"><b>Created at: </b>{{$about->created_at->diffForHumans()}}</small><br>
              <small class="text-muted"><b>last update: </b>{{$about->updated_at->diffForHumans()}}</small><br>
            </p><hr>
            <div class="row">
             <form method="get" enctype="multipart/form-data" action="{{action('aboutController@edit',$about->id)}}">
            <button type="submit" class="btn btn-outline-success btn-sm">Edit post</button>
               </form>
                  {{-- <form  method="post" enctype="multipart/form-data" action="{{action('aboutController@destroy',$about->id)}}"> --}}
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
@endsection
