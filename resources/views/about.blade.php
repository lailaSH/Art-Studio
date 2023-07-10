
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>About US</title>
	<meta name="description" content="About US">

	<!-- External CSS -->
	<link rel="stylesheet" href="../resources/css/themify-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../resources/css/main.css">
	<link rel="stylesheet" href="../resources/css/colors.css">
	<link rel="stylesheet" href="../resources/css/responsive.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display%7CDM+Serif+Text%7CMontserrat:400,500%7CMuli:400,600,700&display=swap" rel="stylesheet">


	<!-- Favicon -->
	<link rel="icon" href="../resources/images/art.png">
</head>
<body class="about-page">

	<!-- ========== Header ========== -->
	
	<header class="header">
		
		<div class="container">
			
			<a href="main.html">
<!-- 				<img src="#" alt="Faure Logo" class="logo">
 -->			</a>

			<a href="#" class="open-nav"><i></i></a>

			<nav class="navigation">
				
				<ul>
					<li><a href="{{route('main')}}">home</a></li>
					<li><a href="{{route('about')}}">about</a></li>
					<li><a href="{{route('projects')}}">projects</a></li>
					<li><a href="{{route('contact')}}">contact</a></li>
				</ul>

			</nav> <!-- /.navigation -->

			<div class="clearfix"></div>

		</div> <!-- /.container -->

	</header> <!-- /.header -->


	<main>
					
		<div class="container">
			
			<div class="info">	

				<header>
					<h2>who we are</h2>
					<h1>we are full service<br> interior &amp; art<br> design studio</h1>
				</header>

				<div class="content">
					<p>Podcasting operational change management of  strong workflows to establish a framework. Taking seamless key performance with their indicators offline to the long tail. Keeping your eye on the performing a deep dive on the start-up with mentality to derive convergence on cross-platform integration.</p>
				</div>

				<div class="clearfix"></div>

			</div> <!-- /.info -->

			<img src="../resources/images/about.jpg" alt="" class="about-page-img img-cover" >

			<div class="info">	

				<header>
					<h2>what we do</h2>
					<h1>we design beautiful &amp; <br> functional art</h1>
				</header>

				<div class="content">
					<p>Podcasting operational change management of  strong workflows to establish a framework. Taking seamless key performance with their indicators offline to the long tail. Keeping your eye on the performing a deep dive on the start-up with mentality to derive convergence on cross-platform integration.</p>
				</div>

				<div class="clearfix"></div>

			</div> <!-- /.info -->
			
		</div> <!-- /.container -->


	</main> <!-- /main -->


	<footer>
		
		<div class="container">
			
			<div class="footer-details">
				<ul>
					<li>links</li>
					<li><a href="{{route('main')}}">home</a></li>
				
						<li><a href="{{route('about')}}">about us</a></li>
						<li><a href="{{route('projects')}}">projects</a></li>
						<li><a href="{{route('contact')}}">contact</a></li>
					
				</ul>
			</div>

			<div class="footer-details">
				<ul>
					<li>follow us</li>
					<li><a href="{{$info->FB}}">facebook</a></li>
					<li><a href="#">twitter</a></li>
					<li><a href="{{$info->IG}}">instagram</a></li>
				</ul>
			</div>
			
			<div class="footer-details">
				<ul>
					<li>contact</li>
					<li>{{$info->number}}</li>
					<li class="footer-email">{{$info->email}}</a></li>
					<li>Oak Street 7, London</li>
				</ul>
			</div>

			<div class="footer-details">

			</div>

			<div class="clearfix"></div>


		</div> <!-- /.container -->

	</footer> <!-- /.footer -->


	<!-- ========== Responsive Navigation ========== -->
	
	<div class="responsive-nav-container">
		
		<a href="#" class="close-nav"><i class="ti-close"></i></a>

		<nav class="responsive-nav">

			<ul>
				<li><a href="{{route('main')}}">home</a></li>
				<li><a href="{{route('about')}}">about us</a></li>
				<li><a href="{{route('projects')}}">projects</a></li>
				<li><a href="{{route('contact')}}">contact</a></li>
			</ul>

		</nav> <!-- /.responsive-nav -->

		<ul class="social-links">
			<li><a href="{{$info->FB}}">facebook</a></li>
			<li><a href="#">twitter</a></li>
			<li><a href="{{$info->IG}}">instagram</a></li>
		</ul>

	</div> <!-- /.responsive-nav-container -->


	<script src="../resources/assets/js/main.js"></script>
</body>
</html>