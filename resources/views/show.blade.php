@extends('layouts.app')

@section('content')
 <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><hr>
<div class="container" >
   <div class="card">
    <div class="card-body"style=" height: auto">

      <h1 style="font-size: 62px;text-align: center;">Welcome to My blog </h1>
      {{-- <h3 style="font-size: 32px">Thank you for visiting my blog,keep visiting us we post amizing staf here...</h3> --}}
      <h4> MISSION:</h4> <p> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		<h4>VISION:</h4> <p>Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<hr>
		<div class="row" style="text-align: center;">
			<div class="col-md-3">writen by:fayaz nasrati</div>
			<div class="col-md-3"><a href="#">Comment:23</a></div>
			<div class="col-md-3"><a href="#">Likes:203</a></div>
			<div class="col-md-3">post at: 2 days ago</div>
		</div>
		<table>
		</table>
    </div>
   </div>
   <br>
<hr>
<h1>Othe articles you may like to read </h1>
<hr>
</div><br>

<div class="container" >
   <div class="card"><br>
    <div class="card-body"style=" height: 100px">
      <a href="/show"><h1 >Welcome to My blog </h1></a>
      <h3 >Thank you for visiting my blog,keep visiting us we post amizing staf here...</h3>
    </div>
   </div>
   <br><div class="card">
    <div class="card-body"style=" height: 100px">
      <a href="/show"><h1 >Welcome to My blog </h1></a>
      <h3 >Thank you for visiting my blog,keep visiting us we post amizing staf here...</h3>
    </div>
   </div>
    <br><div class="card">
    <div class="card-body"style=" height: 100px">
      <a href="/show"><h1 >Welcome to My blog </h1></a>
      <h3 >Thank you for visiting my blog,keep visiting us we post amizing staf here...</h3>
    </div>
   </div>
    <br><div class="card">
    <div class="card-body"style=" height: 100px">
      <a href="/show"><h1 >Welcome to My blog </h1></a>
      <h3 >Thank you for visiting my blog,keep visiting us we post amizing staf here...</h3>
    </div>
   </div>
   

</div>

@endsection
