
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>welcome</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style1.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
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
	<body class="page1" id="top">
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
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg">
					<div class="caption fadeIn">
						<h2>LONDON</h2>
						<!-- <div class="price">
							FROM
							<span>$1000</span>
						</div> -->
						<a href="{{ route('create_tourist') }}">START YOUR JOURNEY</a><br>
						<a href="{{ route('loginpage') }}">LOG IN HERE</a>
					</div>
				</div>
				<div data-src="images/slide1.jpg">
					<div class="caption fadeIn">
						<h2>Maldives</h2>
						<!-- <div class="price">
							FROM
							<span>$2000</span>
						</div> -->
						<a href="{{ route('create_tourist') }}">START YOUR JOURNEY</a><br>
						<a href="{{ route('loginpage') }}">LOG IN HERE</a>
					</div>
				</div>
				<div data-src="images/slide2.jpg">
					<div class="caption fadeIn">
						<h2>Venice</h2>
						<!-- <div class="price">
							FROM
							<span>$1600</span>
						</div> -->
						<a href="{{ route('create_tourist') }}">START YOUR JOURNEY</a><br>
						<a href="{{ route('loginpage') }}">LOG IN HERE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
<style>


* {
  box-sizing: border-box;
}



.wrapper {
  display: flex;
  width: 90%;
  justify-content: space-around;
}

.card {
  width: 280px;
  height: 360px;
  border-radius: 15px;
  padding: 1.5rem;
  background: white;
  position: relative;
  display: flex;
  align-items: flex-end;
  transition: 0.4s ease-out;
  box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
}
.card:hover {
  transform: translateY(20px);
}
.card:hover:before {
  opacity: 1;
}
.card:hover .info {
  opacity: 1;
  transform: translateY(0px);
}
.card:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 15px;
  background: rgba(0, 0, 0, 0.6);
  z-index: 2;
  transition: 0.5s;
  opacity: 0;
}
.card img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 15px;
}
.card .info {
  position: relative;
  z-index: 3;
  color: white;
  opacity: 0;
  transform: translateY(30px);
  transition: 0.5s;
}
.card .info h1 {
  margin: 0px;
  color: #ea82b8;
}
.card .info p {
  letter-spacing: 1px;
  font-size: 15px;
  margin-top: 8px;
}
.card .info button {
  padding: 0.6rem;
  outline: none;
  border: none;
  border-radius: 3px;
  background: white;
  color: black;
  font-weight: bold;
  cursor: pointer;
  transition: 0.4s ease;
}
.card .info button:hover {
  background: dodgerblue;
  color: white;
}

    </style>
		<div class="content"><div class="ic"></div>
			<div class="container_12">
			@foreach ($latest_place as $place)
				<div class="grid_4">
					<div class="wrapper">

						<div class="card"><img src="{{asset('thumbnails/'.$place->thumbnail)}}" />
							<div class="info">
							<h1>{{$place->place_name}}</h1>
							<p>{{$place->description}}</p>
							
							<button><a  href="{{Route('place.show',$place->id)}}" >See more</a></button>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Booking Form</h3>
					<form method="POST" action="{{ route('bookhotel') }}"id="bookingForm">
						@csrf
						<div class="fl1">
							<div class="tmInput">
								<input name="tourist_name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="country" placeHolder="Country:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							
						</div>
						<div class="fl1 fl2">
							<em>Select Hotel</em>

							<select name="hotel_id" class="tmSelect2" data-class="tmSelect tmSelect2" data-constraints="">
							@foreach ($hotel as $hotel )
								<option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
							
							@endforeach
								
							</select>
						
							
							
						</div>
						<br>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmDatepicker">
							<input type="text" name="checkin" placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmDatepicker">
							<input type="text" name="checkout" placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort</p>
							<input name="comfort" value="Cheap" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' checked/>
							<span>Cheap</span>
							<input name="comfort" value="Standart"type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
							<span>Standart</span>
							<input name="comfort" value="Lux" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
							<span>Lux</span>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="childrens" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>0</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=3,max=999)'></textarea>
						</div>
						<button>submit</button>
					</form>
				</div>
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>Lorem ipsum dolor sit ere amet, consectetur ipiscin.</p>
						In mollis erat mattis neque facilisis, sit ametiol
					</div>
					<div class="clear cl1"></div>
					<p>Proin pharetra luctus diam, a scelerisque eros convallis </p>
				  <h4>Clients’ Quotes</h4>
					<blockquote class="bq1">
						<img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p>Duis massa elit, auctor non pellentesque vel, aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh. </p>
							<div class="alright">
								<div class="col1">Miranda Brown</div>
								<a href="#" class="btn">More</a>
							</div>
						</div>
					</blockquote>
				</div>
				<div class="grid_12">
					<h3 class="head1">Latest News</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">10<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Aliquam nibh</a></div>
							Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">21<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Etiam dui eros</a></div>
							Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">15<span>Feb</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
							Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
						</div>
					</div>
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
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>
