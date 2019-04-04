@extends('layouts.app')

@section('content')
 <div class="row">
    <div class="col-md-2"></div>
     <div class="col-md-8">
         

<div class="container" >
    <h1>Blog</h1>
      @foreach($posts as $post)

   <div class="card"><br>
    <div class="card-body"style=" height: auto">
      <h1 >{{$post->title}} </h1>
      <p >{!! str_limit($post->article , 300)!!} </p>
      <small><a href="{{url('blog/'.$post->slug)}}">Read more...</a></small>
    </div>
   </div>
   <br>
   {{-- {{url('blog/'.$posts->slug)}} --}}
                   {{-- <small style="padding-left: 80px">URL:<a href="{{url('blog/'.$post->slug)}}">here</a></small> --}}

      @endforeach
    
</div>
     </div>
 </div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8">
    {{$posts->links()}}
  </div>
</div>
@endsection
