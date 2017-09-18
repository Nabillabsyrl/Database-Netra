
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
<link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{url('css/style-responsive.css')}}" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{url('css/font.css')}}" type="text/css"/>
<link href="{{url('css/font-awesome.css')}}" rel="stylesheet" /> 
<link rel="stylesheet" href="{{url('css/monthly.css')}}" />
<script src="{{url('js/jquery2.0.3.min.js')}}"></script>
<script src="{{url('js/raphael-min.js')}}"></script>



</head>
<body>
	<section id="container">
    @if (Auth::guard('admin')->check())
			@include("layout.header")
			@include("layout.sidebar")
			@yield("layout.content")
	@else
			@yield('content')
	@endif


	</section>

<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{url('js/scripts.js')}}"></script>
<script src="{{url('js/jquery.slimscroll.js')}}"></script>
<script src="{{url('js/jquery.nicescroll.js')}}"></script>
<script src="{{url('js/jquery.scrollTo.js')}}"></script>


</body>
</html>
