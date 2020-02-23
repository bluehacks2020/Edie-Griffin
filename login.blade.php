<!DOCTYPE html>
<html>
 <head>

  <title>HOME</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="KarTribo">
<meta name="author" content="Edie Griffin">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
 </head>
 <body style="background-image: url('assets/images/amazon.png');">
  <br />
  <div class="container box">
   <h3 align="center">  <div class="card bg-dark text-white">
    <div class="card-body">KarTribo</div>
  </div></h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/main/checklogin') }}">
    {{ csrf_field() }}
    <div class="container" align="right" style="position:absolute; top: 300px; right: 180px">
    <div class="card" style="width: 300px";>
    <div class="card-body">

    <div class="form-group" style="border-radius: !important "align="left">
      <div  style="background-color:lavender;">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" />
     <br>
    </div>
    </div>
    <div class="form-group" style="border-radius:!important" align="left">
      <div  style="background-color:lavender;">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />
     <br>
   </div>
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
    <div>
        <a href="/register" class="btn btn-default">REGISTER</a>
    </div>
   </form>
 </div></div></div>
  </div>
  <div class="container" align="float:left" style="position:absolute; top: 120px;left: 100px">
    <a class="navbar-brand" href="/"><img src="assets/images/phph.png" height="1000"></a>
  </div>
  <div class="container" style="position:absolute; left: 530px">
    <a class="navbar-brand" href="/"><img src="assets/images/logo.png" height="200"></a>
  </div>
 </body>
</html>