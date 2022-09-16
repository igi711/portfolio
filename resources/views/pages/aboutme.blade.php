@extends('layouts.app')

@section('content')



<div class="container-fluid">
  <div class="row"> 
<img class="mx-auto img-fluid col-4 col-xs-4 col-md-3 col-lg-3" src="images/photo.jpg" style="margin-top: 10px;">
</div>
</div>   


<br>
<button onclick="typeWriter()" class="btn btn-outline-dark text-center" style="margin: 15px;">Who am I?</button>
<br> 
<p id="aboutme"  class="text-center text-white p-2 my-2"></p>

<a href={{ url("work") }}><button class="btn btn-outline-dark text-center"> Check out my work! </button>
<script language="javascript" type="text/JavaScript" src="js/txt.js"></script>
<script src="https://js.cx/libs/animate.js"></script>
@endsection