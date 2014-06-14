<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	<title>Book Your Travel - Hotel information</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/infobox.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/selectnav.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
	<script type="text/javascript">
	function initialize() {
		var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(49.47216, -123.76307),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>Best ipsum hotel</strong><br />1400 Pennsylvania Ave,<br />Washington DC<br />www.bestipsumhotel.com";

		var myOptions = {
			 content: boxText
			,disableAutoPan: false
			,maxWidth: 0
			,pixelOffset: new google.maps.Size(-140, 0)
			,zIndex: null
			,closeBoxURL: ""
			,infoBoxClearance: new google.maps.Size(1, 1)
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
		};

		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});

		var ib = new InfoBox(myOptions);
		ib.open(theMap, marker);
	}
</script>
</head>
<body>
	<!--header-->
	<header>
		<div class="wrap clearfix">
			<!--logo-->
			<h1 class="logo"><a href="index.html" title="Book Your Travel - home"><img src="images/txt/logo.png" alt="Book Your Travel" /></a></h1>
			<!--//logo-->
			
			<!--ribbon-->
			<div class="ribbon">
				<?php $this->load->view('includes/ribbon'); ?>
			</div>
			<!--//ribbon-->
			
			<!--search-->
			<div class="search">
				<form id="search-form" method="get" action="search-form">
					<input type="search" placeholder="Search entire site here" name="site_search" id="site_search" /> 
					<input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
				</form>
			</div>
			<!--//search-->
			
			<!--contact-->
			<div class="contact">
				<span>24/7 Support number</span>
				<span class="number">1- 555 - 555 - 555</span>
			</div>
			<!--//contact-->
		</div>
		
		<!--main navigation-->
		<nav class="main-nav" role="navigation" id="nav">
			<?php $this->load->view('includes/nav'); ?>
		</nav>
		<!--//main navigation-->
	</header>
	<!--//header-->
	
	<!--main-->
	<div class="main" role="main">		
		<div class="wrap clearfix">
			<!--main content-->
			<div class="content clearfix">
				<!--breadcrumbs-->
				<nav role="navigation" class="breadcrumbs clearfix">
					<!--crumbs-->
					<ul class="crumbs">
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Hotels">Hotels</a></li>
						<li><a href="#" title="United Kingdom">United Kingdom</a></li>
						<li><a href="#" title="London">London</a></li>  
						<li>Search results</li>                                       
					</ul>
					<!--//crumbs-->
					
					<!--top right navigation-->
					<ul class="top-right-nav">
						<li><a href="search_results.html" title="Back to results">Back to results</a></li>
						<li><a href="#" title="Change search">Change search</a></li>
					</ul>
					<!--//top right navigation-->
				</nav>
				<!--//breadcrumbs-->

				<!--hotel three-fourth content-->
				<section class="three-fourth">
					<!--gallery-->
					<section class="gallery" id="crossfade">
						<img src="images/slider/img.jpg" alt="" width="850" height="531" />
						<img src="images/slider/img.jpg" alt="" width="850" height="531" />
						<img src="images/slider/img.jpg" alt="" width="850" height="531" />
						<img src="images/slider/img.jpg" alt="" width="850" height="531" />
					</section>
					<!--//gallery-->
				
					<!--inner navigation-->
					<nav class="inner-nav">
						<ul>
							<li class="availability"><a href="#availability" title="Availability">Availability</a></li>
							<li class="description"><a href="#description" title="Description">Description</a></li>
							<li class="facilities"><a href="#facilities" title="Facilities">Facilities</a></li>
							<li class="location"><a href="#location" title="Location">Location</a></li>
							<li class="reviews"><a href="#reviews" title="Reviews">Reviews</a></li>
							<li class="things-to-do"><a href="#things-to-do" title="Things to do">Things to do</a></li>
						</ul>
					</nav>
					<!--//inner navigation-->
					
					<!--availability-->
					<section id="availability" class="tab-content">
						<article>
							<h1>Availability</h1>
							<div class="text-wrap">
								<a href="#" class="gradient-button right" title="Change dates">Change dates</a>
								<p>Available rooms from <span class="date">Thurs 29 Nov 2012</span> to <span class="date">Fri 30 Nov 2012</span>.</p>
							</div>
							
							<h1>Room types</h1>
							<ul class="room-types">
								<!--room-->
								<li>
									<figure class="left"><img src="images/slider/img.jpg" alt="" width="270" height="152" /><a href="images/slider/img.jpg" class="image-overlay" rel="prettyPhoto[gallery1]"></a></figure>
									<div class="meta">
										<h2>Superior Double Room</h2>
										<p>Prices are per room<br />20 % VAT Included in price</p>
										<p>Non-refundable<br />Full English breakfast $ 24.80 </p>
										<a href="javascript:void(0)" title="more info" class="more-info">+ more info</a>
									</div>
									<div class="room-information">
										<div class="row">
											<span class="first">Max:</span>
											<span class="second"><img src="images/ico/person.png" alt="" /><img src="images/ico/person.png" alt="" /></span>
										</div>
										<div class="row">
											<span class="first">Price:</span>
											<span class="second">$ 55</span>
										</div>
										<div class="row">
											<span class="first">Rooms:</span>
											<span class="second">01</span>
										</div>
										<a href="booking-step1.html" class="gradient-button" title="Book">Book</a>
									</div>
									<div class="more-information">
										<p>Stylish and individually designed room featuring a satellite TV, mini bar and a 24-hour room service menu.</p>
										<p><strong>Room Facilities:</strong> Safety Deposit Box, Air Conditioning, Desk, Ironing Facilities, Seating Area, Heating, Shower, Bath, Hairdryer, Toilet, Bathroom, Pay-per-view Channels, TV, Telephone</p>
										<p><strong>Bed Size(s):</strong> 1 Double </p>
										<p><strong>Room Size:</strong>  16 square metres</p>
									</div>
								</li>
								<!--//room-->
								
								<!--room-->
								<li>
									<figure class="left"><img src="images/slider/img.jpg" alt="" width="270" height="152" /><a href="images/slider/img.jpg" class="image-overlay" rel="prettyPhoto[gallery1]"></a></figure>
									<div class="meta">
										<h2>Deluxe Single Room</h2>
										<p>Prices are per room<br />20 % VAT Included in price</p>
										<p>Non-refundable<br />Full English breakfast $ 24.80 </p>
										<a href="javascript:void(0)" title="more info" class="more-info">+ more info</a>
									</div>
									<div class="room-information">
										<div class="row">
											<span class="first">Max:</span>
											<span class="second"><img src="images/ico/person.png" alt="" /></span>
										</div>
										<div class="row">
											<span class="first">Price:</span>
											<span class="second">$ 55</span>
										</div>
										<div class="row">
											<span class="first">Rooms:</span>
											<span class="second">01</span>
										</div>
										<a href="booking-step1.html" class="gradient-button" title="Book">Book</a>
									</div>
									<div class="more-information">
										<p>Stylish and individually designed room featuring a satellite TV, mini bar and a 24-hour room service menu.</p>
										<p><strong>Room Facilities:</strong> Safety Deposit Box, Air Conditioning, Desk, Ironing Facilities, Seating Area, Heating, Shower, Bath, Hairdryer, Toilet, Bathroom, Pay-per-view Channels, TV, Telephone</p>
										<p><strong>Bed Size(s):</strong> 1 Double </p>
										<p><strong>Room Size:</strong>  16 square metres</p>
									</div>
								</li>
								<!--//room-->
								
								<!--room-->
								<li>
									<figure class="left"><img src="images/slider/img.jpg" alt="" width="270" height="152" /><a href="images/slider/img.jpg" class="image-overlay" rel="prettyPhoto[gallery1]"></a></figure>
									<div class="meta">
										<h2>Standard Family Room</h2>
										<p>Prices are per room<br />20 % VAT Included in price</p>
										<p>Non-refundable<br />Full English breakfast $ 24.80 </p>
										<a href="javascript:void(0)" title="more info" class="more-info">+ more info</a>
									</div>
									<div class="room-information">
										<div class="row">
											<span class="first">Max:</span>
											<span class="second"><img src="images/ico/person.png" alt="" /><img src="images/ico/person.png" alt="" /><img src="images/ico/person.png" alt="" /></span>
										</div>
										<div class="row">
											<span class="first">Price:</span>
											<span class="second">$ 55</span>
										</div>
										<div class="row">
											<span class="first">Rooms:</span>
											<span class="second">01</span>
										</div>
										<a href="booking-step1.html" class="gradient-button" title="Book">Book</a>
									</div>
									<div class="more-information">
										<p>Stylish and individually designed room featuring a satellite TV, mini bar and a 24-hour room service menu.</p>
										<p><strong>Room Facilities:</strong> Safety Deposit Box, Air Conditioning, Desk, Ironing Facilities, Seating Area, Heating, Shower, Bath, Hairdryer, Toilet, Bathroom, Pay-per-view Channels, TV, Telephone</p>
										<p><strong>Bed Size(s):</strong> 1 Double </p>
										<p><strong>Room Size:</strong>  16 square metres</p>
									</div>
								</li>
								<!--//room-->
								
								<!--room-->
								<li>
									<figure class="left"><img src="images/slider/img.jpg" alt="" width="270" height="152" /><a href="images/slider/img.jpg" class="image-overlay" rel="prettyPhoto[gallery1]"></a></figure>
									<div class="meta">
										<h2>Superior Double Room</h2>
										<p>Prices are per room<br />20 % VAT Included in price</p>
										<p>Non-refundable<br />Full English breakfast $ 24.80 </p>
										<a href="javascript:void(0)" title="more info" class="more-info">+ more info</a>
									</div>
									<div class="room-information">
										<div class="row">
											<span class="first">Max:</span>
											<span class="second"><img src="images/ico/person.png" alt="" /><img src="images/ico/person.png" alt="" /></span>
										</div>
										<div class="row">
											<span class="first">Price:</span>
											<span class="second">$ 55</span>
										</div>
										<div class="row">
											<span class="first">Rooms:</span>
											<span class="second">01</span>
										</div>
										<a href="booking-step1.html" class="gradient-button" title="Book">Book</a>
									</div>
									<div class="more-information">
										<p>Stylish and individually designed room featuring a satellite TV, mini bar and a 24-hour room service menu.</p>
										<p><strong>Room Facilities:</strong> Safety Deposit Box, Air Conditioning, Desk, Ironing Facilities, Seating Area, Heating, Shower, Bath, Hairdryer, Toilet, Bathroom, Pay-per-view Channels, TV, Telephone</p>
										<p><strong>Bed Size(s):</strong> 1 Double </p>
										<p><strong>Room Size:</strong>  16 square metres</p>
									</div>
								</li>
								<!--//room-->
							</ul>
						</article>
					</section>
					<!--//availability-->
					
					<!--description-->
					<section id="description" class="tab-content">
						<article>
							<h1>General</h1>
							<div class="text-wrap">	
								<p>The Best Ipsum hotel  features over 1,000 luxuriously appointed, individually styled rooms, suites and apartments, each containing unique works of art. Accommodation at the hotel includes air conditioning in all the rooms, private bathroom with heated mirrors, hair dryer, power shower, BT Openzone Wi-Fi, coffee and tea making facilities, complimentary toiletries, Egyptian linen, flat Screen LCD TV with free view, work desk, 24 hour room service.</p>
							</div>
							
							<h1>Check-in</h1>
							<div class="text-wrap">	
								<p>From 15:00 hours </p>
							</div>
							
							<h1>Check-out</h1>
							<div class="text-wrap">	
								<p>Untill 12:00 hours </p>
							</div>
							
							<h1>Cancellation / Prepayment</h1>
							<div class="text-wrap">	
								<p>Cancellation and prepayment policies vary according to room type. Please check the <a href="#">room conditions</a> when selecting your room. </p>
							</div>
							
							<h1>Children and extra beds</h1>
							<div class="text-wrap">	
								<p><strong>Free!</strong> All children under 8 years stay free of charge when using existing beds.<br /><strong>Free!</strong> All children under 2 years stay free of charge for children’s cots/cribs.<br /><br />All older children or adults are charged USD 40 per person per night for extra beds.<br />The maximum number of extra beds/children’s cots permitted in a room is 1.<br />Any type of extra bed or child’s cot/crib is upon request and needs to be confirmed by management.<br />Supplements are not calculated automatically in the total costs and will have to be paid for separately when checking out.</p>
							</div>
							
							<h1>Pets</h1>
							<div class="text-wrap">	
								<p>Pets are allowed. Charges may be applicable.</p>
							</div>
							
							<h1>Accepted credit cards</h1>
							<div class="text-wrap">	
								<p>American Express, Visa, Euro/Mastercard, Diners Club<br />The hotel reserves the right to pre-authorise credit cards prior to arrival.</p>
							</div>
						</article>
					</section>
					<!--//description-->
					
					<!--facilities-->
					<section id="facilities" class="tab-content">
						<article>
							<h1>Facilities</h1>
							<div class="text-wrap">	
								<ul class="three-col">
									<li>Kitchenette</li>
									<li>Ironing board</li>
									<li>Catering services</li>
									<li>Beachfront</li>
									<li>Hotspots</li>
									<li>Exhibition/convention floor</li>
									<li>Restaurant</li>
									<li>Room service - full menu</li>
									<li>Courtyard</li>
									<li>Lounges/bars</li>
									<li>Laundry/Valet service</li>
									<li>Airport Shuttle Service</li>
									<li>Complimentary breakfast</li>
									<li>Valet cleaning</li>
									<li>Car hire</li>
								</ul>
							</div>
							
							<h1>Activities</h1>
							<div class="text-wrap">	
								<p>Tennis court, Sauna, Fitness centre, Massage </p>
							</div>
							
							<h1>Internet</h1>
							<div class="text-wrap">	
								<p><strong>Free!</strong> WiFi is available in all areas and is free of charge. </p>
							</div>
							
							<h1>Parking</h1>
							<div class="text-wrap">	
								<p>Private parking is possible at a location nearby (reservation is not needed) and costs USD 28.80 per day.</p>
							</div>
						</article>
					</section>
					<!--//facilities-->
					
					<!--location-->
					<section id="location" class="tab-content">
						<article>
							<!--map-->
								<div class="gmap" id="map_canvas"></div>
							<!--//map-->
						</article>
					</section>
					<!--//location-->
					
					<!--reviews-->
					<section id="reviews" class="tab-content">
						<article>
							<h1>Hotel Score and Score Breakdown</h1>
							<div class="score">
								<span class="achieved">8 </span>
								<span> / 10</span>
								<p class="info">Based on 782 reviews</p>
								<p class="disclaimer">Guest reviews are written by our customers <strong>after their stay</strong> at Hotel Best Ipsum.</p>
							</div>
							
							<dl class="chart">
								<dt>Clean</dt>
								<dd><span id="data-one" style="width:80%;">8&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Comfort</dt>
								<dd><span id="data-two" style="width:60%;">6&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Location</dt>
								<dd><span id="data-three" style="width:80%;">8&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Staff</dt>
								<dd><span id="data-four" style="width:100%;">10&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Services</dt>
								<dd><span id="data-five" style="width:70%;">7&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Value for money</dt>
								<dd><span id="data-six" style="width:90%;">9&nbsp;&nbsp;&nbsp;</span></dd>
							</dl>
						</article>
						
						<article>
							<h1>Guest reviews</h1>
							<ul class="reviews">
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
							</ul>
						</article>
					</section>
					<!--//reviews-->
					
					<!--things to do-->
					<section id="things-to-do" class="tab-content">
						<article>
							<h1>London</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">London is a diverse and exciting city with some of the best sights and attractions in the world. </p>
							<p>See London from above on the London Eye; meet a celebrity at Madame Tussauds; examine some of the world’s most precious treasures at the British Museum or come face-to-face with the dinosaurs at the Natural History Museum.</p>
							
							<h1>Sports and nature</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London Sports and nature" /></figure>
							<p class="teaser">London is one of the greenest capitals in the world, with plenty of green and open spaces. There are more than 3000 open spaces.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
							
							<h1>Nightlife</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London Nightlife" /></figure>
							<p class="teaser">Looking for nightclubs in London? Take a look at our guide to London clubs. Browse for club ideas, regular club nights and one-off events. </p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
							
							<h1>Culture and history</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">For a display of British pomp and ceremony, watch the Changing the Guard ceremony outside Buckingham Palace.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
							<hr />
							<a href="#" class="gradient-button right" title="Read more">Read more</a>
						</article>
					</section>
					<!--//things to do-->
				</section>
				<!--//hotel content-->
				
				<!--sidebar-->
				<aside class="right-sidebar">
					<!--hotel details-->
					<article class="hotel-details clearfix">
						<h1>Best ipsum hotel 
							<span class="stars">
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
							</span>
						</h1>
						<span class="address">Marylebone, London</span>
						<span class="rating"> 8 /10</span>
						<div class="description">
							<p>The Best Ipsum hotel  features over 1,000 luxuriously appointed, individually styled rooms, suites and apartments, each containing unique works of art. </p>
						</div>
						<div class="tags">
							<ul>
								<li><a href="#" title="Wellness">Wellness</a></li>
								<li><a href="#" title="Last minute">Last minute</a></li>
								<li><a href="#" title="Thailand">Thailand</a></li>
								<li><a href="#" title="SPA">SPA</a></li>
								<li><a href="#" title="Romantic">Romantic</a></li>
							</ul>
						</div>
					</article>
					<!--//hotel details-->
					
					<!--testimonials-->
					<article class="testimonials clearfix">
						<blockquote>Loved the staff and the location was just amazing... Perfect!” </blockquote>
						<span class="name">- Jane Doe, Solo Traveller</span>
					</article>
					<!--//testimonials-->
					
					<!--Need Help Booking?-->
					<article class="default clearfix">
						<h2>Need Help Booking?</h2>
						<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your holiday needs.</p>
						<p class="number">1- 555 - 555 - 555</p>
					</article>
					<!--//Need Help Booking?-->
					
					<!--Why Book with us?-->
					<article class="default clearfix">
						<h2>Why Book with us?</h2>
						<h3>Low rates</h3>
						<p>Get the best rates, or get a refund.<br />No booking fees. Save money!</p>
						<h3>Largest Selection</h3>
						<p>140,000+ hotels worldwide<br />130+ airlines<br />Over 3 million guest reviews</p>
						<h3>We’re Always Here</h3>
						<p>Call or email us, anytime<br />Get 24-hour support before, during, and after your trip</p>
					</article>
					<!--//Why Book with us?-->
					
					<!--Popular hotels in the area-->
					<article class="default clearfix">
						<h2>Popular hotels in the area</h2>
						<ul class="popular-hotels">
							<li>
								<a href="#">
									<h3>Plaza Resort Hotel &amp; SPA
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">$ 100 <small>/ per night</small></span></p>
									<span class="rating"> 8 /10</span>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Lorem Ipsum Inn
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">$ 110 <small>/ per night</small></span></p>
									<span class="rating"> 7 /10</span>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Best Eastern London
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">$ 125 <small>/ per night</small></span></p>
									<span class="rating"> 8 /10</span>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Plaza Resort Hotel &amp; SPA
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">$ 100 <small>/ per night</small></span></p>
									<span class="rating"> 8 /10</span>
								</a>
							</li>
						</ul>
						<a href="#" title="Show all" class="show-all">Show all</a>
					</article>
					<!--//Popular hotels in the area-->
					
					<!--Deal of the day-->
					<article class="default clearfix">
						<h2>Deal of the day</h2>
						<div class="deal-of-the-day">
							<a href="hotel.html">
								<figure><img src="images/slider/img.jpg" alt="" width="230" height="130" /></figure>
								<h3>Plaza Resort Hotel &amp; SPA
									<span class="stars">
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
									</span>
								</h3>
								<p>From <span class="price">$ 100 <small>/ per night</small></span></p>
								<span class="rating"> 8 /10</span>
							</a>
						</div>
					</article>
					<!--//Deal of the day-->
				</aside>
				<!--//sidebar-->
			</div>
			<!--//main content-->
		</div>
	</div>
	<!--//main-->
	
	<!--footer-->
	<footer>
		<?php $this->load->view('includes/footer'); ?>
	</footer>
	<!--//footer-->
	<script>
		// Initiate selectnav function
		selectnav();
	</script>
	</body>
</html>