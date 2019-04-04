@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">about</div>

                
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
</div>

@endsection
