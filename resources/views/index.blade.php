<!DOCTYPE html>
<html lang="en">

<head>
  <title>Freelancing Website</title>
  <meta charset="utf-8">
@include('partials_home.styles')

</head>

<body>
 <!-- navbar -->
 @include('partials_home.nav')

 <!-- slideshow -->

@include('partials_home.slider')


    <!-- gig body -->
@include('partials_home.gig')

    <!-- Footer -->

@include('partials_home.footer')
    
<script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>

</body>

</html>