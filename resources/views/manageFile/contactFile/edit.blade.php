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
                         action="{{action('PostController@update',$posts->id)}}">
                    {{csrf_field()}}
                       <div class="form-group">
                           <label>Title</label>
                           <input type="text" name="title" class="form-control" value="{{$posts->title}}" required>
                       </div>
                         <div class="form-group">
                           <label>slug</label>
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
                          <div class="form-group">
                          <label>Image</label><br>
                          <input type="file" name="cover_image" value="{{$posts->cover_image}}">
                        </div>
                       {{-- {{Form::lable('category_id','Category:')}} --}}
                        {{--   <div class="form-group">
                           <label>Category</label>
                           <input type="text" name="slug" class="form-control" value="{{$posts->slug}}" required>
                       
                       </div> --}}
                       <div class="form-group">
                        <label>Body</label>
                           <textarea id="article-ckeditor" class="form-control" name="article" rows="10">{!!$posts->article!!}</textarea>
                       </div>
                       <input type="hidden" name="_method" value="PATCH">
                       
                      
                       <button  class="btn btn-info">-Update-</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- 
{{$posts->title}}     
<div  class="form-group">
                           <label>Category</label>
                       
                       </div>
{{$posts->article}} --}}
@endsection
