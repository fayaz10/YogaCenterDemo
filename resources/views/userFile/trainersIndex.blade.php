{{-- @foreach($abouts as $about)

{{$about->title}}
@endforeach --}}



@extends('layouts.manage')

@section('content')
<div class="row">
<div class="container " style="border: 0.5px solid lightgray;background-color: white;border-radius: 5px"><br>
  <div class="table-header" style="background-color: lightgray;color: white;text-align: center; border-radius: 5px;">
    <h2>Our Trainers  Index page</h2>
  </div>
  @foreach($trainers as $trainer)
<table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Tilte</th>
        <th>slug</th>
        <th>Articale</th>
        <th>image</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>View</th>
      </tr>
    </thead>
<tbody>
        <tr>
        <td>{{$trainer->id}}</td>
        <td>{{$trainer->title}}</a></td>
        <td>{{$trainer->slug}}</td>
        <td>{!!str_limit($trainer->article,300)!!}</td>
        <td><img src="../storage/cover_image/{{$trainer->cover_image}}" style="height: 100px;width: 200px"></td>
       <td>{{$trainer->created_at->diffForHumans() }}</td>
       <td>{{$trainer->updated_at->diffForHumans() }}</td>
        <td> <a href="post/{{$trainer->id}}"><h1>=></h1></a></td>
      </tr>
</tbody>
  </table>
@endforeach

</div>
</div>
  <div class="row offset-5"><br>
    {{-- {{$abouts->links()}} --}}
  </div>
</div>
</div>

@endsection