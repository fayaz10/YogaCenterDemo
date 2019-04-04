
{{-- ======================================================================== --}}
@extends('layouts.manage')

@section('content')
<div class="container ">
<div class="row">
    <div class="card mb-8 col-md-8">
           <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{action('PostController@update',$posts->id)}}">
                    {{csrf_field()}}
                      {{csrf_field()}}
                         <div class="form-group">
                             <label>Title</label>
                             <input type="text" name="title" class="form-control" value="{{$posts->title}}" required>
                         </div>
                            <div class="form-group">
                             <label>Slug</label>
                             <input type="text" name="slug" class="form-control" value="{{$posts->slug}}" required>
                         </div>
                            <div  class="form-group">
                           <label>Category</label>
                           <select class="form-control" name="category_id">
                               @foreach($cats as $cat)
                                   <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                @endforeach
                          </select>
                          </div>
                         <div class="row">
                            <div class="form-group">
                            <label>Image</label><br>
                            <input type="file" name="cover_image" value="{{$posts->cover_image}}">
                          </div>
                           <div class="form-group">
                            <label>Cureent image</label><br>
                            <img src="/storage/cover_image/{{$posts->cover_image}}" style="height:100px;alt="Card image cap">
                          </div>
         
                          </div>
                         <div class="form-group">
                            <label>Body</label>
                             <textarea id="article-ckeditor" class="form-control" name="article" rows="15">{!!$posts->article!!}</textarea>
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
                <small class="text-muted"><b>Created at: </b>{{$posts->created_at->diffForHumans()}}</small><br>
                <small class="text-muted"><b>last update: </b>{{$posts->updated_at->diffForHumans()}}</small><br>
              </p><hr>
            <div class="row"> 
                <input type="hidden" name="_method" value="PATCH">
                <button type="submit" class="btn btn-outline-success btn-sm">Update Post</button>
                </form>
                <a href="/manage/posts/{{$posts->id}}">
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

