

@if(count($errors)>0)
 <div class="container" >
	@foreach($errors->all() as $error)

<div class="alert alert-danger" alert-dismissible fade in>
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> {{$error}}
</div>
@endforeach
@endif    


  @if(session('success'))
  
  	<div class="alert alert-success" alert-dismissible fade in>
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  	<strong>Success!.</strong>	{{session('success')}}
  	</div>
  @endif

    @if(session('errors'))
  
  	<div class="alert alert-danger" alert-dismissible fade in>
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  	<strong>Error!.</strong>	{{session('error')}}
  	</div>
 @endif
</div>  
{{--    <div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div> --}}