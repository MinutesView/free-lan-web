<!DOCTYPE html>
<html>
<head>
	<title>FreeLanWeb</title>
  
  <!-- Bootstrap (css) & Javascript source links -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- Custom css link from public folder name with "admin-style.css"  -->


  <link rel="stylesheet" href="{{ URL::asset('css/registerSeller.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/stepOne.css') }}" />
    @include('partials_home.styles')

</head>
<body>


@include('partials_home.navreg')


  <div class="page">
    <div class="sidebar">
      <h3></h3>
      <div class="links">
        <ul>
          <li><a href="form-2.html">Dashboard</a></li>
          <li><a href="form-2.html">Order</a></li>
          <li><a class="active" href="form-2.html">Gig Panel</a></li>
          <li><a href="form-2.html">Tools</a></li>
        </ul>
      </div>
    </div>
    <div class="content-area">
    
    <h3 class="headline">Your are 2-Step away...</h3>
      <div class="content"><form  action="{{ route('views.stepOneController')}}" method="post" enctype="multipart/form-data">
      @csrf
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
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
  </div>

          <div class="personal-information">
            <h3>Personal Information</h3>
            <div>
            <label class="special" for="user">Profile Photo</label>
            <img id="image" class="smaller-image thick-green-border" src="https://png.pngitem.com/pimgs/s/30-307416_profile-icon-png-image-free-download-searchpng-employee.png" alt="photo">
            
            <input type="file" name="profilePic" id="profilePic" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"  required>
            </div>
            <div>
              <label class="special" for="user">My Bio</label>
              <input id="user" type="text" name="bio" placeholder="Enter bio" required>
            </div>
            <div>
            <label for="gender">Gender</label>
              <select id="gender" name="gender"  required>
                <option value="" style="display:none">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div>
             <br><br>
          </div>
          <div class="experience">
            <h3>Experience</h3>
            <div>
              <label class="special" for="skill">Skill</label>
            <select id="category" name="category" required>
            <option value="" style="display:none">Select Category</option>
            <option value="wevdev">Website Development</option>
            <option value="design">Design & Creative</option>
            <option value="finance">Finance & Accounting</option>
            <option value="engin">Engineering & Architecture</option>
            <option value="sales">Sales & Marketing</option>
            <option value="writing">Creative Writing</option>
            <option value="translation">Translation</option>
            <option value="customer">Customer Service</option>
            <option value="digitalmarket">Digital Marketing</option>
            <option value="videoedit">Video Editing</option>
            <option value="productdesign">Product Designing</option>
            <option value="artpaint">Art & Painiting</option>
            <option value="advertisement">Advertisement</option>
            <option value="service">Services</option>
            <option value="other">other</option>
            </select>
            

            </div>
            
            <div>
              <label for="back">Work Experience</label>
              <select id="experience" name="experience" required>
              <option value="" style="display:none">0 Year</option>
                <option value="zero">No Experience</option>
                <option value="one">1 year</option>
                <option value="two">2 years</option>
                <option value="three">3 years</option>
                <option value="five">5 years</option>
                <option value="eight">8 years</option>
                <option value="eightmore">more than 8 years</option>
              </select>
            </div>
          </div>



          <input class="submit" type="submit" value="Next">
        </form>
      </div>
    </div>
  </div>
<!-- 
<div class="bg-img">
  <form class="container"  action="{{ route('views.createSeller')}}" method="post">
  @csrf
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

    <h3 class="head">Seller Signup</h3>

	<label for="cname"><b>User Name</b></label>
    <input type="text" placeholder="Enter Fullname" name="username" required value="{{ old( 'username') }}">


	<label for="pso"><b> Email Id</b></label>
    <input type="text" placeholder="Enter Email Id" name="email" required>

    <span class="text-danger"> @error('email'){{ $message }} @enderror </span>
<br>

<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required value="{{ old( 'address') }}">

    <label for="upassword"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="password" required>
    <i class="far fa-eye" id="togglePassword"></i>


    <button type="submit" class="btn">Signup</button>
    <br><br>

    <a href="login">I already have an account!</a>
    
    <br>
    <a href="login">I am a Buyer!</a>
  </form>

</div> -->

<script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>

</body>
</html>
