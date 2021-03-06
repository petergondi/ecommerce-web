 <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets/css/theme-color/default-theme.css')}}" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700')}}" rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

  </head>
  <body>
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
   <!-- jQuery library -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="{{asset('assets/js/slick.js')}}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{asset('assets/js/waypoints.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.counterup.js')}}"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
  
  
  <!-- Custom js -->
  <script src="{{asset('assets/js/custom.js')}}"></script> 

  </body>