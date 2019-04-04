@extends('layouts.app')

@section('content')
<div class="row">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
    @if(count($tags)>0)
         @foreach($tags as $tag)    
             <div class="card"><br>
              <div class="card-body"style=" height: auto;">
                <h1 >{{$tag->name}} </h1>
              </div><hr>
                 <div class="row" style="text-align: center;">
                     <div class="col-md-6">
                 <form method="get" enctype="multipart/form-data" action="{{action('tagController@edit',$tag->id)}}">
                   <a href=""><button class="btn btn-info">Edit</button></a>
                     </form></div>
                     <form enctype="multipart/form-data" method="post" action="{{action('tagController@destroy',$tag->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Delete</button>
                            
                        </form>
                 </div>

               <br>
             </div>
             <br>
       @endforeach
       @else
<h5>you have no post yet</h5>
@endif
   
</div>

  <div class="col-md-4">

            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <form method="post" enctype="multipart/form-data" action="{{action('tagController@store')}}">
                        {{-- <input type="hidden" name="_method" value="get"> --}}
                    {{csrf_field()}}
                       <div class="form-group">
                           <label>Name</label>
                           <input type="text" name="name" class="form-control" required>
                       </div>
              
                      
                       <button  class="btn btn-info">-Submit-</button>
                   </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection
