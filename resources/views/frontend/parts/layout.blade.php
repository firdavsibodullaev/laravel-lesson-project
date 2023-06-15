
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Magazine &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="/magazine/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="/magazine/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/magazine/css/bootstrap.css">

	<link rel="stylesheet" href="/magazine/css/style.css">


	<!-- Modernizr JS -->
	<script src="/magazine/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
    @include('frontend.parts.sidebar')
    @include('frontend.parts.header')
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
@yield('content')
		</div>
	</div>

	@include('frontend.parts.footer')


	
	<!-- jQuery -->
	<script src="/magazine/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/magazine/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/magazine/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/magazine/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="/magazine/js/main.js"></script>
	@stack('script')
	</body>
</html>

