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
<div class="container">
<div class="row" style="margin-top:45px">
<div class="col-md-6 col-md-offset-3" style="background-color: lightgray; color: Black">
<h4>Profile</h4>
<hr>
<table class="table table-hover">
<thead>
<th>ID</th>
<th>Name</th>
</thead>
<tbody>
<tr>
<td>{{$LoggedUserInfo->email}}</td>
<td>{{$LoggedUserInfo->name}}</td>
<td><a href="logout">Logout</a></td>
</tr>
</tbody>
</table>

</div>

</div>

</div>

<script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>

</body>
</html>