@extends('layouts.app')

@section('content')
 
<h1 style="text-align: center;">Dashboard page</h1><hr>
<div class="container" >
    @if(count($ourClass)>0)
         @foreach($ourClass as $ourClass)
             @if(Auth::user()->id == $ourClass->user_id)
      
             <div class="card"><br>
              <div class="card-body"style=" height: auto;">
                <a href="/user-post/{{$ourClass->id}}"><h1 >{{$ourClass->title}} </h1></a>
                <h3 >{!!str_limit($event->article,300)!!}</h3>
              </div><hr>
              @if(!Auth::guest())
                @if(Auth::user()->id == $ourClass->user_id)
                 <div class="row" style="text-align: center;">
                     <div class="col-md-6">
                 <form method="get" enctype="multipart/form-data" action="{{action('ourClassController@edit',$ourClass->id)}}">
              <button class="btn btn-info">Edit</button>
                     </form></div>
                     <form method="post" enctype="multipart/form-data" action="{{action('ourClassController@destroy',$ourClass->id)}}">
                      {{csrf_field()}}
                       <input type="hidden" name="_method" value="DELETE">
                      
                     <div class="col-md-6">
                      <button class="btn btn-danger">Delete</button>
                    </div>
                   
                 </form>



                 </div>
                 @endif
               @endif
               <br>
             </div>
             <br>
             @else

              @endif
       @endforeach
   
</div>
@else
<h5>you have no about yet</h5>
@endif

@endsection
