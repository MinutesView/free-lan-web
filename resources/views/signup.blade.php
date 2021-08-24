<!DOCTYPE html>
<html>
<head>
	<title>Online Order</title>
  
  <!-- Bootstrap (css) & Javascript source links -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{ URL::asset('css/signup.css') }}" />

</head>

<body>

@csrf

<div class="sign-img">



  <div class="mygrid">

  <h4  class="top"> Please Remember your UserID & Password</h4>

 

  <form class="forml">

    <label class="uname" for="uname"><b>UserID  </b></label>
    <input type="text" name="username" value="{{$LoggedCustomerInfo->email}}" readonly>
    <br>

    <label for="upassword"><b>Password</b></label>
    <input type="password" id="password"  name="password" value="@if(Session::get('pass'))
    {{Session::get('pass')}}
    @endif" readonly>
    <i class="far fa-eye" id="togglePassword"></i>
  </form>

  <div class="button">

  <button class="log" type="button" onclick=window.location='{{ url("login") }}'>Login Now</button>
  </div>
  </div>


</div>

<script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>

</body>
</html>