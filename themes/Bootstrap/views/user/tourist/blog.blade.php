<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blog</title>
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
                                <li class="current"><a href="{{route('touristWelcome')}}">Home</a></li>
								<li><a href="{{route('tourist_dashboard')}}">Dashboard</a></li>
								<li><a href="{{route('touristPlace')}}">Places</a></li>
								<li><a href="{{route('touristBlog')}}">BLOG</a></li>
								<li><a href="{{route('touristContact')}}">CONTACTS</a></li>
                                
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
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_7">
             
					<h3>Recent Posts</h3>
                    @foreach ($latest_posts as $latest)
                      <div class="blog">
                        <time datetime="2014-10-01">{{ date('Y-m-d',strtotime($latest->created_at))}}<span></span></time>
                        <div class="extra_wrapper">
                          <div class="text1 col1"><a href="#">{{$latest->title}}</a></div>Posted by
                          <a href="#">{{$latest->user->name}}</a>
                        </div>
                        <div class="clear"></div>
                        <img src="" alt="" class="img_inner">
                        <p>{{$latest->description}} </p>
                        <br>
                        <a href="{{route('posts.show',$latest->id)}}" class="link1">LEARN MORE</a>
                      </div>
                    @endforeach
                    @foreach ($posts as $post)
                      <div class="blog">
                        <time datetime="2014-10-01">17<span>Feb</span></time>
                        <div class="extra_wrapper">
                          <div class="text1 col1"><a href="#">{{$post->title}}</a></div>Posted by
                          <a href="#">{{$post->user->name}} </a>
                        </div>
                        <div class="clear"></div>
                        <img  src="{{asset('thumbnails/'.$post->thumbnail)}}" alt="" class="img_inner">
                        <p>{{$post->description}} </p>
                        <br>
                        <a href="{{route('posts.show',$post->id)}}" class="link1">LEARN MORE</a>
                      </div>
                    @endforeach
				</div>
				<div class="grid_3 prefix_1">
					<h3 class="head1">CATEGORIES</h3>
					<ul class="list">
						<li><a href="#">category 1 </a></li>
						<li><a href="#">category 2  </a></li>
						<li><a href="#">category 3  </a></li>
					
					</ul>
					<h3 class="head1">ARchives</h3>
					<ul class="list">
						<li><a href="#">November 2013</a></li>
						<li><a href="#">October 2013</a></li>
						<li><a href="#">September 2013</a></li>
						<li><a href="#">August 2013</a></li>
						<li><a href="#">July 2013</a></li>
					</ul>
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


	

