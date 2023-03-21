<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hotels</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style1.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->

		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
							<li class="current"><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
								<li><a href="{{route('places')}}">Places</a></li>
								<li><a href="{{route('blog')}}">BLOG</a></li>
								<li><a href="{{route('hotel')}}">Hotels</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_8">
					<h3>Hotels for Stay</h3>
					@foreach ($hotels as $hotel)
					<div class="block2">
						<img src="{{asset('thumbnails/'.$hotel->thumbnail)}}" alt="" class="card-img-top img-fluid">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">{{$hotel->hotel_name}}</a></div>
                            <div class="text1 col1"><a href="#">{{$hotel->type}}</a></div>
                            <div class="text1 col1"><a href="#">{{$hotel->city}} {{$hotel->province}}</a></div>
							<p>{{$hotel->description}}</p>
							<a href="{{Route('hotel.show',$hotel->id)}}" class="link1">LEARN MORE</a>
							<br>
						</div>
					</div>
					@endforeach
					
					
				</div>
				<div class="grid_3 prefix_1">
					<h5>CHOOse the country</h5>
					<ul class="list">
						<li><a href="#">Albania</a></li>
						<li><a href="#">American Samoa</a></li>
						<li><a href="#">Antarctica</a></li>
						<li><a href="#">Argentina</a></li>
						<li><a href="#">Armenia</a></li>
						<li><a href="#">Australia</a></li>
						<li><a href="#">Austria</a></li>
						<li><a href="#">Bahrain</a></li>
						<li><a href="#">Barbados</a></li>
						<li><a href="#">Belgium</a></li>
						<li><a href="#">Belize</a></li>
						<li><a href="#">Bermudas</a></li>
					</ul>
					<a href="#" class="link1">VIEW A<span class="low">ll</span></a>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by TemplateMonster.com
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>