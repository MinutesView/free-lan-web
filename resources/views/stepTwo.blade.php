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
    <link rel="stylesheet" href="{{ URL::asset('css/stepTwo.css') }}" />
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

            <h3 class="headline">Almost Done...</h3>
            <div class="content">

                <form action="{{ route('views.stepTwoController')}}" method="post" enctype="multipart/form-data">
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
                        <h3>Published Your First Service</h3>
                        <br>
                        <div>
                            <label class="special" for="user">Service Title</label>
                            <input id="user" type="text" name="title" placeholder="Enter Title" required>

                            <!-- 
            <img id="image" class="smaller-image thick-green-border" src="https://png.pngitem.com/pimgs/s/30-307416_profile-icon-png-image-free-download-searchpng-employee.png" alt="photo">
            <input type="file" name="profilePic" id="profilePic" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"  required> -->

                        </div>



                        <div>
                            <label class="special" for="user">Description</label>
                            <textarea class="input-field" name="description" rows="10" cols="30"></textarea>
                        </div>




                        <label class="special" for="user">Service Photos</label>
                        <div class="row">
                            <div class="column2">


                                <img id="image" class="smaller-image thick-green-border" src="https://www.freeiconspng.com/uploads/photo-album-icon-png-14.png" alt="photo">
                                <input class="file-input" type="file" name="servicePhoto[]" id="profilePic" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" required>

                            </div>



                            <div class="column">

                                <img id="image2" class="thick-green-border image-input" src="https://static.thenounproject.com/png/187803-200.png" alt="photo">
                                <input class="file-input" type="file" name="servicePhoto[]" id="profilePic2" onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])" required>

                                <img id="image3" class="thick-green-border image-input" src="https://static.thenounproject.com/png/187803-200.png" alt="photo">
                                <input class="file-input" type="file" name="servicePhoto[]" id="profilePic3" onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])" required>


                            </div>

                            <div class="column">

                                <img id="image4" class="thick-green-border image-input" src="https://static.thenounproject.com/png/187803-200.png" alt="photo">
                                <input class="file-input" type="file" name="servicePhoto[]" id="profilePic4" onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])" required>

                                <img id="image5" class="thick-green-border image-input" src="https://static.thenounproject.com/png/187803-200.png" alt="photo">
                                <input class="file-input" type="file" name="servicePhoto[]" id="profilePic5" onchange="document.getElementById('image5').src = window.URL.createObjectURL(this.files[0])" required>

                            </div>

                        </div>




                        <div>
                            <label class="special" for="user">Price (BDT)</label>
                            <input id="user" type="number" step="10.00" min="500" name="price" placeholder="From 500 Taka" required>
                        </div>

                        <div>
                            <label for="back">Delivery Time</label>
                            <select id="delivery" name="delivery" required>
                                <option value="" style="display:none">0 Day</option>
                                <option value="1">1 Day</option>
                                <option value="3">3 Days</option>
                                <option value="7">7 Days</option>
                                <option value="14">14 Days</option>
                                <option value="28">28 Days</option>
                                <option value="60">2 Months</option>
                                <option value="180">6 Months</option>
                            </select>
                        </div>


                        <div>
                            <label for="back">Total Revision</label>
                            <select id="revision" name="revision" required>
                                <option value="" style="display:none">Select At least 1 Revision</option>
                                <option value="one">1</option>
                                <option value="three">3</option>
                                <option value="five">5</option>
                                <option value="ten">10</option>
                                <option value="unlimited">Unlimited</option>
                            </select>
                        </div>


                        <div>
                            <label for="back">I Will Provide</label>
                            <select id="file" name="file" required>
                                <option value="" style="display:none">File Include</option>
                                <option value="yes">Source File</option>
                                <option value="no">No Source File</option>
                            </select>
                        </div>

                        <div>
                            <label class="special" for="user">Keyword (Optional)</label>
                            <input id="user" type="text" name="keyword" placeholder="Enter a Keyword. ex: wordpress" required>
                        </div>

                        <br>
                        <br>


                        <input class="submit" type="submit" value="Submit">
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