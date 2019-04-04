@extends('layouts.manage')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create contact page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               

                
                     <form method="post" enctype="multipart/form-data" action="{{action('ContactController@store')}}">
                        {{-- <input type="hidden" name="_method" value="get"> --}}
                    {{csrf_field()}}
                     
                        <div class="form-group">
                          <label>Image</label><br>
                          <input type="file" name="cover_image">
                        </div>
                       <div class="form-group">
                        <label>Location</label>
                           <textarea  class="form-control" name="location" rows="10"></textarea>
                       </div>
                       <div class="form-group">
                        <label>Emails</label>
                           <textarea  class="form-control" name="email" rows="10"></textarea>
                       </div>
                       <div class="form-group">
                        <label>Phone Numbers</label>
                           <textarea  class="form-control" name="phone" rows="10"></textarea>
                       </div>
                      
                       <button  class="btn btn-info">-Submit-</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
$('. select2-multiple').select2();
</script>

@endsection
