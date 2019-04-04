

@extends('layouts.manage')

@section('content')
<div class="container ">
<div class="row">
    <div class="card mb-8 col-md-8">
           <div class="card-body">
               
                     <form method="post" enctype="multipart/form-data" action="{{action('PostController@store')}}">
                      {{csrf_field()}}
                         <div class="form-group">
                             <label>Title</label>
                             <input type="text" name="title" class="form-control" required>
                         </div>
                            <div class="form-group">
                             <label>Slug</label>
                             <input type="text" name="slug" class="form-control" required>
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
                            <input type="file" name="cover_image">
                          </div>
                         <div class="form-group">
                            <label>article</label>
                          <textarea  class="form-control" name="article" rows="10"></textarea>
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
              </p><hr>
            <div class="row"> 
                <button type="submit" class="btn btn-outline-success btn-sm">Create post</button>
                </form>
                <a href="/manage/about">
                  <button   style="margin-left: 50px"  class="btn btn-outline-danger btn-sm">Cancel </button>
                </a>  
           </div>
         </div>
        </div>
      </div>   
</div>
</div>
<br><br><br>




<script type="text/javascript">
$('. select2-multiple').select2();
</script>

@endsection
