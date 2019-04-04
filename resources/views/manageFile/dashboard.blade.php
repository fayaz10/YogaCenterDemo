@extends('layouts.manage')

@section('content')
<div class="row">
<div class="container " style="border: 0.5px solid lightgray;background-color: white;border-radius: 5px"><br>
  <div class="table-header" style="background-color: lightgray;color: white;text-align: center; border-radius: 5px;">
  	<h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p> 
  </div>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


</div>

@endsection