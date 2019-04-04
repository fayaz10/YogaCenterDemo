@extends('layouts.manage')

@section('content')
<div class="row">
<div class="container " style="border: 0.5px solid lightgray;background-color: white;border-radius: 5px"><br>
  <div class="table-header" style="background-color: lightgray;color: white;text-align: center; border-radius: 5px;">
    <h2>Anout Index page</h2>
  </div>
  @if(count($posts)>0)
         @foreach($posts as $post)          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Tilte</th>
        <th>slug</th>
        <th>Articale</th>
        <th>image</th>
        <th>Category</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</a></td>
        <td>{{$post->slug}}</td>
        <td>{!!str_limit($post->article,300)!!}</td>
        <td><img src="/storage/cover_image/{{$post->cover_image}}" style="height: 100px;width: 200px"></td>
        <td>
         {{$post->category_id}}
         </td>

       <td>{{$post->created_at->diffForHumans() }}</td>
       <td>{{$post->updated_at->diffForHumans() }}</td>
        <td> <a href="post/{{$post->id}}"><h1>=></h1></a></td>
      </tr>
    </tbody>
  </table>
  @endforeach

</div>
</div>
  <div class="row offset-5"><br>
    {{-- {{$posts->links()}} --}}
  </div>
</div>
@else


<h5>you have no post yet</h5>
@endif
@endsection
