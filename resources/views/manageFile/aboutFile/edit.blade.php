@extends('layouts.manage')

@section('content')
<div class="container ">
<div class="row">
    <div class="card mb-8 col-md-8">
           <div class="card-body">
               <form method="post" enctype="multipart/form-data" action="{{action('aboutController@update',$about->id)}}">
                      {{csrf_field()}}
                         <div class="form-group">
                             <label>Title</label>
                             <input type="text" name="title" class="form-control" value="{{$about->title}}" required>
                         </div>
                            <div class="form-group">
                             <label>Slug</label>
                             <input type="text" name="slug" class="form-control" value="{{$about->slug}}" required>
                         </div>
                         <div class="row">
                            <div class="form-group">
                            <label>Image</label><br>
                            <input type="file" name="cover_image" value="{{$about->cover_image}}">
                          </div>
                           <div class="form-group">
                            <label>Cureent image</label><br>
                            <img src="/storage/cover_image/{{$about->cover_image}}" style="height:100px;alt="Card image cap">
                          </div>
         
                          </div>
                         <div class="form-group">
                            <label>Body</label>
                             <textarea id="article-ckeditor" class="form-control" name="article" rows="15">{!!$about->article!!}</textarea>
                         </div>                     
                     <br><br><br><hr> 
                  </div>
              </div>
    <div class="col-md-3">
        <div class="card bg-light mb-3" style="width: 18rem;">
            <div class="card-header">Actions </div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">
                <small class="text-muted"><b>Created at: </b>{{$about->created_at->diffForHumans()}}</small><br>
                <small class="text-muted"><b>last update: </b>{{$about->updated_at->diffForHumans()}}</small><br>
              </p><hr>
            <div class="row"> 
                <input type="hidden" name="_method" value="PATCH">
                <button type="submit" class="btn btn-outline-success btn-sm">Update Post</button>
                </form>
                <a href="/manage/about/{{$about->id}}">
                  <button   style="margin-left: 50px"  class="btn btn-outline-danger btn-sm">Cancel </button>
                </a>  
           </div>
         </div>
        </div>
      </div>   
</div>
</div>
<br><br><br>
@endsection

