
<!DOCTYPE html>
<html lang="ar">
<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title></title>
 	<meta name="description" content="Art Studio">

	<!-- External CSS -->
	<link rel="stylesheet" href="../resources/css/themify-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../resources/css/main.css">
	<link rel="stylesheet" href="../resources/css/colors.css">
	<link rel="stylesheet" href="../resources/css/responsive.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display%7CDM+Serif+Text%7CMontserrat:400,500,600%7CMuli:400,600,700&display=swap" rel="stylesheet">

	<!-- Favicon -->
 	<link rel="icon" href="../resources/images/art.png">
</head>
<body>

	<!-- ========== Main ========== -->

	<main>
					
		<div class="main-hero">

			<!-- ========== Header ========== -->
			
			<header class="header">
					
				<div class="container">
					<a href="#" class="open-nav open-nav-inverse"><i></i></a>
					<nav class="navigation">	
						<ul>
                            <li><a href="{{route('about')}}">about us</a></li>
							<li><a href="{{route('projects')}}">projects</a></li>
							<li><a href="{{route('contact')}}">contact</a></li>
						</ul>
					</nav> <!-- /.navigation -->
					<div class="clearfix"></div>
				</div> <!-- /.container -->
			</header> <!-- /.header -->

            <div class="container">
				<div class="block-1">
					<div class="content">
						<h1> Hello, my name is Blake Garcia </h1><br>
						<h1> welcome to my place <br></h1>
						<p>Let me show my work</p>
						{{-- <a href="#" class="btn-inverse">our projects</a> --}}
					</div>
				</div>
			</div> <!-- /.container -->

			<div class="main-hero-image"></div>
			<div class="clearfix">	</div>
		</div> <!-- /.main-hero -->

		<div class="about-us">			
			<div class="container">
				<div class="block-1">
					<div class="content">
						<p>I take inspiration from everything around me and spend In my studio where I try to find creativity and embody it in my sculptures, pieces and paintings...</p>
						<a href="{{route('about')}}" class="btn">about us</a>
					</div>
				</div> <!-- /.block-1 -->
				<div class="block-2">
					<div class="about-image"><img src="../resources/images/art studio.jpg" alt="" class="img-cover"></div>		
				</div> <!-- /.block-2 -->
				<div class="clearfix"></div>
			</div> <!-- /.container -->
		</div> <!-- /.about-us -->

                <div class="featured-works">			
			<div class="container">
				@php
				$i=0;
				@endphp
	               @foreach ($images as $image)	
			        @php
			     	$i++;
			        @endphp			  
				<a href="#">	
					@auth
					<a href={{route('admin.Main_Image_Control',['id'=>$i])}} >
						<div class="content">
						Change this picture 
						</div>
					</a>
					@endauth
					<div class="featured-works-item">
						<img src="{{ asset('storage/images/main/'.$i.'.jpg') }}" alt="" class="img-cover">
						<div class="overlay">
							<div class="content">
								<span>{{$image->name}}</span><span>2019</span>
								<h2>{{$image->title}}</h2>
							</div>
						</div>
					</div>
				</a>
				{{-- <a href="#">	
					@auth
					<a href={{route('admin.Main_Image_Control',['id'=>2])}} >Change this picture </a>
					@endauth
					<div class="featured-works-item">
						<img src="{{ asset('storage/images/main/2.jpg') }}" alt="" class="img-cover">
						<div class="overlay">
							<div class="content">
								<span>residenital</span><span>2019</span>
								<h2>oakstreet guest house</h2>
							</div>
						</div>
					</div>
				</a>--}}
				@endforeach
				<div class="clearfix"></div>
			</div> <!-- /.container -->

		</div> <!-- /.featured-works -->
		
        <div class="contact-us">			
			<div class="block-1">
				<div class="content">
					<h2>Get in touch </h2>
					<p>If you have any idea in your mind to add artistic touches to your home office or clinic
					don`t hesitate to contact me </p>
					<a href="{{route('contact')}}" class="btn-inverse">contact us</a>
				</div>
			</div>
			<div class="block-2"></div>
			<div class="clearfix"></div>
		</div> <!-- /.contact-us -->
	    </main> <!-- /main -->

<!-- ========== Footer ========== -->

	<footer>
		
		<div class="container">
			
			<div class="footer-details">
				<ul>
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
					<li>Contact</li>
					<li>{{$info->number}}</li>
					<li class="footer-email">{{$info->email}}</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- /.container -->
	</footer> <!-- /.footer -->

<!-- ==========  Navigation ========== -->
	
	<div class="responsive-nav-container">
		
		<a href="#" class="close-nav"><i class="ti-close"></i></a>
		<nav class="responsive-nav">
			<ul>
				<li><a href="{{route('main')}}">home</a></li>
					<li><a href="{{route('about')}}">about us</a></li>
					<li><a href="{{route('projects')}}">projects</a></li>
					<li><a href="{{route('contact')}}">contact</a></li>
			</ul>
		</nav> <!-- nav -->
		<ul class="social-links">
			<li><a href="{{$info->FB}}">facebook</a></li>
			<li><a href="#">twitter</a></li>
			<li><a href="{{$info->IG}}">instagram</a></li>
		</ul>
	</div> <!-- /.responsive-nav-container -->
	<script src="../resources/js/main.js"></script>
			</body>