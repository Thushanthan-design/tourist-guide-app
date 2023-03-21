@extends('layouts.hotel')

@section('content')



  
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    
    
    


  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-0d38"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="{{asset('thumbnails/'.$hotel->thumbnail)}}" data-image-width="1124" data-image-height="1500" id="sec-7fdc">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">{{$hotel->hotel_name}}</h1>
        <p class="u-large-text u-text u-text-variant u-text-2">{{$hotel->description}}</p>
      </div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-4783">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <h2 class="u-custom-font u-font-playfair-display u-text u-text-black u-text-1">We are directly involved in the process</h2>
                  <div class="u-border-6 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <p class="u-text u-text-black u-text-2">&nbsp; &nbsp;With 10 years industry experience, Ashley Maddison is the creative founder of AM Interior Studio and has experience within the residential and commercial sector. With a degree and diploma in Interior Design,
                                    she has worked with Architects, builders and kitchen designers, designing and managing projects from boutique commercial office fitouts to high end luxury homes. <br>
                    <br>&nbsp; &nbsp;AM Interior Studio provide
                                    fully resolved interior and styling solutions and no matter the size of the project, in all stages of the design there is a high level of detail and functionality. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-15 u-lightbox u-section-3" id="sec-3915">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
        
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <h3 class="u-text u-text-default u-text-3">Sample Headline</h3>
                <div class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-2"></div>
                <img src="{{asset('thumbnails/'.$hotel->thumbnail)}}" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-2" data-image-width="2000" data-image-height="1333" src="images/4.svg">
                <p class="u-text u-text-default u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-btn u-button-style u-palette-3-base u-btn-2">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <h3 class="u-text u-text-default u-text-5">Sample Headline</h3>
                <div class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-3"></div>
                <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-3" data-image-width="2000" data-image-height="1333" src="images/4.svg">
                <p class="u-text u-text-default u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-btn u-button-style u-palette-3-base u-btn-3">learn more</a>
              </div>
            </div>
            
           
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-f50c">
      <div class="u-expanded u-grey-10 u-map">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyTWFuaGF0dGFuJTIyJTJDJTIyem9vbSUyMiUzQW51bGwlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCU3RA=="></iframe>
        </div>
      </div>
      <div class="u-align-left u-container-style u-group u-white u-group-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <h2 class="u-text u-text-1">{{$hotel->address}}</h2>
        
          <p class="u-text u-text-3">1 212-736-3100</p>
          <p class="u-text u-text-4">
            
          </p>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_d79b">
      <div class="u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-size-28">
              <div class="u-layout-col">
                <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-1" data-image-width="150" data-image-height="102">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>
              </div>
            </div>
            <div class="u-size-32">
              	<div class="u-layout-row">
                	<div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-2">
                  		<div class="u-container-layout u-valign-top u-container-layout-2">
                    		<h2 class="u-text u-text-default u-text-1">Make your reservation</h2>
								<div class="u-expanded-width u-form u-form-1">
								<div class="container">
				<div class="">
					<div class="booking-form">
						<div class="form-header">
							
						</div>
						<form method="POST" action="{{ route('bookhotel') }}"id="bookingForm">
						@if(Session::get('success'))
							<div class="alert alert-success">
								{{Session::get('success')}}
								</div>
							@endif
						
							@if(Session::get('fail'))
							<div class="alert alert-danger">
								{{Session::get('fail')}}
								</div>
							@endif
						@csrf
						
							<div class="form-group">
							<span class="form-label">Name</span>
								<input name="tourist_name" class="form-control" type="text" placeholder="Enter your name...">
								
							</div>
							<div class="form-group">
							<span class="form-label">Country</span>
								<input name="country"  class="form-control" type="text" placeholder="Country...">
							
							</div>
							
								
									<div class="form-group">
									<span class="form-label">Email</span>
										<input  name="email" class="form-control" type="email" placeholder="Enter your Email">
									
									</div>
							
								<input  name="hotel_id" class="form-control" type="hidden" value="{{$hotel->id}}">
								
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<span class="form-label">Check In</span>
										<input name="checkin" class="form-control" type="date" required>
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<span class="form-label">Check out</span>
										<input name="checkout" class="form-control" type="date" required>
								
									</div>
								</div>
							</div>
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="comfort" value="Cheap" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' checked/>
								<span>Cheap</span>
								<input name="comfort" value="Standart"type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
								<span>Standart</span>
								<input name="comfort" value="Lux" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							<div class="row">
							<div class="col-md-4">
									<div class="form-group">
										<select name="adults" class="form-control" required>
											<option value="" selected hidden>no of adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
							</div>

								<div class="col-md-4">
									<div class="form-group">
										<select name="childrens" class="form-control" required>
											<option value="" selected hidden>no of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select name="rooms" class="form-control" required>
											<option value="" selected hidden>no of rooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
							</div>
							
							
							<div class="form-group">
								<textarea  name="message"  class="form-control"placeholder="send us message..."></textarea>
								<span class="form-label">Message</span>
							</div>
							
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>    		
								</div>
						</div>
					</div>
				</div>
			</div>
			</div>
					</div>
				</div>
			</div>
			
			
    </section>

			


    <section class="u-align-center u-clearfix u-white u-section-6" id="sec-ca0a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="716"></div>
                <p class="u-large-text u-text u-text-variant u-text-1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
                <h4 class="u-text u-text-default u-text-2">Connor Quinn<br>
                </h4>
                <h6 class="u-text u-text-default u-text-3">President, CEO</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" data-image-width="1280" data-image-height="716"></div>
                <p class="u-large-text u-text u-text-variant u-text-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
                <h4 class="u-text u-text-default u-text-5"> Jack Alvarez<br>
                </h4>
                <h6 class="u-text u-text-default u-text-6">Sales Manager</h6>
              </div>
            </div>
          </div>

     
    </section>
    <section class="u-clearfix u-section-7" id="carousel_1ec7">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="" target="_blank">
        <span>Tourist Guid</span>
      </a>
      <p class="u-text">
        <span></span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span></span>
      </a>. 
    </section>
  
</body></html>
		
   
@endsection