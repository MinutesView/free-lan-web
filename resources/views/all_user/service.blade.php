<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/seller/service.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/seller/sellerboard.css') }}" />
    

    <title>FreeLanWeb</title>

    <style>

    
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">FreeLanWeb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Make Order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Shipping Service</a>
                </li>
            </ul>
            <div class=" d-flex justify-content-center margin-r">

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <ul class="navbar-nav ">

                <li class="nav-item ">
                    <a class="nav-link " href="#">Link</a>
                </li>

                <li class="nav-item dropdown mr-r">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i> User</a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-flex justify-content-center" href="#">Profile</a>
                        <a class="dropdown-item d-flex justify-content-center" href="#">support</a>
                        <div class="dropdown-divider d-flex justify-content-center"></div>
                        <a class="dropdown-item d-flex justify-content-center" href="logout">Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <div class="sidebarMain">
  <a class="active" href="sellerdash">Dashboard</a>
  <a href="#">Order</a>
  <a href="#">Message</a>
</div>

<div class="container">

@yield('content')
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>