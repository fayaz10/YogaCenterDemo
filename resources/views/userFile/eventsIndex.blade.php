{{-- @foreach($abouts as $about)

{{$about->title}}
@endforeach --}}



@extends('layouts.manage')

@section('content')
<div class="row">
<div class="container " style="border: 0.5px solid lightgray;background-color: white;border-radius: 5px"><br>
  <div class="table-header" style="background-color: lightgray;color: white;text-align: center; border-radius: 5px;">
    <h2>Our Classes Index page</h2>
  </div>
  @foreach($events as $event)
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
        <td>{{$event->id}}</td>
        <td>{{$event->title}}</a></td>
        <td>{{$event->slug}}</td>
        <td>{!!str_limit($event->article,300)!!}</td>
        <td><img src="../storage/cover_image/{{$event->cover_image}}" style="height: 100px;width: 200px"></td>
       <td>{{$event->created_at->diffForHumans() }}</td>
       <td>{{$event->updated_at->diffForHumans() }}</td>
        <td> <a href="post/{{$event->id}}"><h1>=></h1></a></td>
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