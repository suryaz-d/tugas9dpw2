<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Minics</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style --> 
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  
    <!-- header section strats -->
    @include('template.minics.header')
    <!-- end header section -->
    <!-- slider section -->
    @yield('slider')
    <!-- end slider section -->
    @yield('content')
  


  <!-- product section -->
  

  <!-- end product section -->

  <!-- about section -->


  <!-- end about section -->

  <!-- why us section -->


  <!-- end why us section -->


  <!-- client section -->
  
  <!-- end client section -->

  <!-- info section -->

  <!-- end info_section -->


  <!-- footer section -->
  @include('template.minics.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{url('public')}}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{url('public')}}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{url('public')}}/js/custom.js"></script>


</body>

</html>