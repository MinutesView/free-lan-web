<!DOCTYPE html>
<html>
<head>
	<title>FreeLanWeb</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />


  @include('partials_home.styles')

</head>
<body>


@include('partials_home.navlog')


<div class="bg-img">
  <form class="container"  action="{{ route('views.signin')}}" method="post">
  @csrf
    <h1>Login</h1>

    <div class="results">
  @if(Session::get('success'))
    <div class="alert alert-success">
    {{Session::get('success')}}
    </div>
    @endif
  @if(Session::get('fail'))
    <div class="alert alert-danger">
    {{Session::get('fail')}}
    </div>
    @endif
  </div>

	<label for="uname"><b>Email Id</b></label>
    <input type="text" placeholder="Enter your email" name="email" required>

    <label for="upassword"><b>Password</b></label>
    
    <input type="password" id="password" placeholder="Enter your password" name="password" required>
    <i class="far fa-eye" id="togglePassword"></i>

    <select  id="position" name="position" required>
  <option value=""> Select Type</option>
   <option value="buyer">Buyer</option>
   <option value="seller">Seller</option>
   
</select>


    <button type="submit" class="btn">Login</button>

    <br>
    <br>
    <a href="register">Create a new Account now!</a>
    
  </form>

  
</div>


<script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>



</body>
</html>
