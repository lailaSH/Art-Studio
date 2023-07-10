
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Contact Us </title>
	<meta name="description" content="Contact Us">

	<!-- External CSS -->
	<link rel="stylesheet" href="../resources/css/themify-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../resources/css/main.css">
	<link rel="stylesheet" href="../resources/css/colors.css">
	<link rel="stylesheet" href="../resources/css/responsive.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display%7CDM+Serif+Text%7CMontserrat:400,500%7CMuli:400,600,700&display=swap" rel="stylesheet">
	<link rel="icon" href="../resources/images/art.png">
</head>
<body>
	<!--  Header -->	
	<header class="header">
		<div class="container">
 		 <img src="../resources/images/inspiration.png" alt="Faure Logo" class="logo"> 
			<nav class="navigation">
				<ul>
					<li><a href="{{route('main')}}">home</a></li>
						<li><a href="{{route('about')}}">about us</a></li>
						<li><a href="{{route('projects')}}">projects</a></li>
						<li><a href="{{route('contact')}}">contact</a></li>
				</ul>
			</nav> <!-- /.navigation -->
		</div> <!-- /.container -->
	</header> <!-- /.header -->
	<!-- ========== Main ========== -->
	<main class="contact">
		<div class="contact-image"></div>
		<div class="container">
			<div class="contact-form-container">
				<h1>contact us</h1>
					<form method="POST" class="contact-form" enctype="multipart/form-data"  action="{{route('SendEmail')}}" >
						@csrf
					<input name="name" placeholder="Name *" type="text" required>
					<input name="email" placeholder="Email *" type="email" required>
					<textarea name="message" placeholder="Tell us a bit about your thoughts *" required></textarea>
					<input type="submit" value="send message" class="btn">
					<div class="clearfix"></div>
				</form> <!-- /.contact-form -->
			</div>
		</div> <!-- /.container -->
		<div class="clearfix"></div>
	</main> <!-- /main -->
	<!--  Footer  -->
	<footer>
		<div class="container">
			<div class="footer-details">
				<ul>
					<li>links</li>
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
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- /.container -->
	</footer> <!-- /.footer -->
	<!-- ========== Responsive Navigation ========== -->
	<div class="responsive-nav-container">
		<a href="#" class="close-nav"><i class="ti-close"></i></a>
		<nav class="responsive-nav">
			<ul>
					<li><a href="{{route('about')}}">about us</a></li>
					<li><a href="{{route('projects')}}">projects</a></li>
					<li><a href="{{route('contact')}}">contact</a></li>
				</ul>
			</ul>
			<div class="container">			
				<div class="contact-form-container">					
					<h1>contact us</h1>
					<form action="#" class="contact-form">
						<input name="name" placeholder="Name *" type="text" required>
						<input name="email" placeholder="Email *" type="email" required>
						<textarea name="message" placeholder="Tell us a bit about your project" required></textarea>
						<input type="submit" value="send message" class="btn">
						<div class="clearfix"></div>
					</form> <!-- /.contact-form -->
				</div>
			</div> <!-- /.container -->
		</nav> <!-- /.responsive-nav -->
		<ul class="social-links">
			<li><a href="{{$info->FB}}">facebook</a></li>
			<li><a href="#">twitter</a></li>
			<li><a href="{{$info->IG}}">instagram</a></li>
		</ul>
	</div> <!-- /.responsive-nav-container -->
	<script src="../resources/js/main.js"></script>
</body>
</html>