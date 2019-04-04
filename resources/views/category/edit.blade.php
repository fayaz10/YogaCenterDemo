@extends('layouts.manage')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                         <form method="post" enctype="multipart/form-data" action="{{action('categoryController@update',$cats->id)}}">
                    {{csrf_field()}}
                       <div class="form-group">
                           <label>Name</label>
                           <input type="text" name="name" class="form-control" value="{{$cats->name}}" required>
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
{{$posts->article}} --}}
@endsection
