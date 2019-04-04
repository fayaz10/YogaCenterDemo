@extends('layouts.app')

@section('content')
 <h1 style="text-align: center;">Welcome to my blog </h1>
<hr>
    @foreach($posts_1 as $post)
<div class="container" >
   <br>
   @endforeach
      @foreach($posts as $post)

   <div class="card"><br>
    <div class="card-body"style=" height: auto;">
        <h1 >{{$post->title}} </h1>
      <p >{!! str_limit($post->article , 100)!!} </p>
      <small><a href="{{url('blog/'.$post->slug)}}">Read more...</a></small>
    </div>
   </div>
   <br>
      @endforeach
</div>

@endsection
