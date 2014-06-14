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
	<title>Book Your Travel - Search results</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/selectnav.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('dt').each(function() {
			var tis = $(this), state = false, answer = tis.next('dd').hide().css('height','auto').slideUp();
			tis.click(function() {
				state = !state;
				answer.slideToggle(state);
				tis.toggleClass('active',state);
			});
		});
		
		$('.view-type li:first-child').addClass('active');
		
		$('#star').raty({
			score    : 3,
			click: function(score, evt) {
			alert('ID: ' + $(this).attr('id') + '\nscore: ' + score + '\nevent: ' + evt);
		  }
		});
		
		
	});
	
	$(window).load(function () {
	var maxHeight = 0;
			
	$(".three-fourth .one-fourth").each(function(){
	if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	$(".three-fourth .one-fourth").height(maxHeight);	
	});	

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
						<li><a href="#" title="Back to results">Back to results</a></li>
						<li><a href="#" title="Change search">Change search</a></li>
					</ul>
					<!--//top right navigation-->
				</nav>
				<!--//breadcrumbs-->
			
				<!--sidebar-->
				<aside class="left-sidebar">
					<article class="refine-search-results">
						<h2>Refine search results</h2>
						<dl>
							<!--Price (per night)-->
							<dt>Price (per night)</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch1" name="price" />
									<label for="ch1">0 - 49 $</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch2" name="price" />
									<label for="ch2">50 - 99 $</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch3" name="price" />
									<label for="ch3">100 -149 $</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch4" name="price" />
									<label for="ch4">150 - 199 $</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch5" name="price" />
									<label for="ch5">200 $ +</label>
								</div>
							</dd>
							<!--//Price (per night)-->
							
							<!--Accommodation type-->
							<dt>Accommodation type</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch6" name="accommodation" />
									<label for="ch6">Hotel</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch7" name="accommodation" />
									<label for="ch7">Hostel</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch8" name="accommodation" />
									<label for="ch8">Apart Hotel</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch9" name="accommodation" />
									<label for="ch9">Guest House</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch10" name="accommodation" />
									<label for="ch10">Apartment</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch11" name="accommodation" />
									<label for="ch11">Bed &amp; Breakfast</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch12" name="accommodation" />
									<label for="ch12">Residence</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch13" name="accommodation" />
									<label for="ch13">Farm stay</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch14" name="accommodation" />
									<label for="ch14">All-inclusive resort</label>
								</div>
							</dd>
							<!--//Accommodation type-->
							
							<!--Star rating-->
							<dt>Star rating</dt>
							<dd>
								<span class="stars-info">3 or more</span>
								<div id="star" data-rating="3"></div>
							</dd>
							<!--//Star rating-->
							
							<!--User rating-->
							<dt>User rating</dt>
							<dd>
								<div id="slider"></div>
								<span class="min">0</span><span class="max">10</span>
							</dd>
							<!--//User rating-->
							
							<!--Hotel facilities-->
							<dt>Hotel facilities</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch15" name="facilities" />
									<label for="ch15">Wi-Fi</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch16" name="facilities" />
									<label for="ch16">Parking</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch17" name="facilities" />
									<label for="ch17">Airport Shuttle</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch18" name="facilities" />
									<label for="ch18">Meeting / Banquet Facilities</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch19" name="facilities" />
									<label for="ch19">Swimming pool</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch20" name="facilities" />
									<label for="ch20">Restaurant</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch21" name="facilities" />
									<label for="ch21">Fitness Centre</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch22" name="facilities" />
									<label for="ch22">SPA &amp; Wellness Centre</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch23" name="facilities" />
									<label for="ch23">Pets allowed</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch24" name="facilities" />
									<label for="ch24">Lift</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch25" name="facilities" />
									<label for="ch25">Air condition</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch26" name="facilities" />
									<label for="ch26">Family rooms</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch27" name="facilities" />
									<label for="ch27">Non - smoking rooms</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch28" name="facilities" />
									<label for="ch28">Rooms/facilities for disabled guests</label>
								</div>
							</dd>
							<!--//Hotel facilities-->
							
							<!--Room facilites-->
							<dt>Room facilites</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch29" name="room-facilities" />
									<label for="ch29">Bathroom</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch30" name="room-facilities" />
									<label for="ch30">Cable TV</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch31" name="room-facilities" />
									<label for="ch31">Air conditioning</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch32" name="room-facilities" />
									<label for="ch32">Mini bar</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch33" name="room-facilities" />
									<label for="ch33">Wi - Fi</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch34" name="room-facilities" />
									<label for="ch34">Wheelchair - friendly room</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch35" name="room-facilities" />
									<label for="ch35">Pay TV</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch36" name="room-facilities" />
									<label for="ch36">Desk</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch37" name="room-facilities" />
									<label for="ch37">Room safe</label>
								</div>
							</dd>
							<!--//Room facilites-->
							
							<!--Meal Board-->
							<dt>Meal Board</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch38" name="meal" />
									<label for="ch38">No meal</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch39" name="meal" />
									<label for="ch39">Bed &amp; Breakfast</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch40" name="meal" />
									<label for="ch40">Half board</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch41" name="meal" />
									<label for="ch41">Full board</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch42" name="meal" />
									<label for="ch42">All - inclusive</label>
								</div>
							</dd>
							<!--//Meal Board-->
							
							<!--Accessibility options-->
							<dt>Accessibility options</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch43" name="accessibility" />
									<label for="ch43">Accessible bathroom</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch44" name="accessibility" />
									<label for="ch44">Accessible path of travel</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch45" name="accessibility" />
									<label for="ch45">Handicapped parking</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch46" name="accessibility" />
									<label for="ch46">In-room accessibility</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch47" name="accessibility" />
									<label for="ch47">Roll-in shower</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch48" name="accessibility" />
									<label for="ch48">Accessibility equipment for the deaf</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch49" name="accessibility" />
									<label for="ch49">Braille or raised signage</label>
								</div>
							</dd>
							<!--//Accessibility options-->
							
							<!--Hotel theme-->
							<dt>Hotel theme</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch50" name="theme" />
									<label for="ch50">Family Fun</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch51" name="theme" />
									<label for="ch51">Adventure</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch52" name="theme" />
									<label for="ch52">Beach &amp; Sun</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch53" name="theme" />
									<label for="ch53">Casinos</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch54" name="theme" />
									<label for="ch54">History &amp; Culture</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch55" name="theme" />
									<label for="ch55">Clubbing</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch56" name="theme" />
									<label for="ch56">Romance</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch57" name="theme" />
									<label for="ch57">Shopping</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch58" name="theme" />
									<label for="ch58">Skiing</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch59" name="theme" />
									<label for="ch59">Wellness</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch60" name="theme" />
									<label for="ch60">Eco &amp; Nature</label>
								</div>
							</dd>
							<!--//Hotel theme-->
							
							<!--Hotel chain-->
							<dt>Hotel chain</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch61" name="theme" />
									<label for="ch61">Accor</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch62" name="theme" />
									<label for="ch62">Hilton</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch63" name="theme" />
									<label for="ch63">Lindner</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch64" name="theme" />
									<label for="ch64">Marriott</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch65" name="theme" />
									<label for="ch65">Tui</label>
								</div>
							</dd>
							<!--//Hotel chain-->
							
							<!--Payment options-->
							<dt>Payment options</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch66" name="theme" />
									<label for="ch66">American Express</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch67" name="theme" />
									<label for="ch67">Visa</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch68" name="theme" />
									<label for="ch68">Euro/Mastercard</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch69" name="theme" />
									<label for="ch69">Diners Club</label>
								</div>
							</dd>
							<!--//Payment options-->
						</dl>
					</article>
				</aside>
				<!--//sidebar-->
			
				<!--three-fourth content-->
					<section class="three-fourth">
						<div class="sort-by">
							<h3>Sort by</h3>
							<ul class="sort">
								<li>Popularity <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
								<li>Price <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
								<li>Stars <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
								<li>Rating <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
							</ul>
							
							<ul class="view-type">
								<li class="grid-view"><a href="#" title="grid view">grid view</a></li>
								<li class="list-view"><a href="#" title="list view">list view</a></li>
								<li class="location-view"><a href="#" title="location view">location view</a></li>
							</ul>
						</div>
						
						<div class="deals clearfix">
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Best ipsum hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 50</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 9 /10</span>
									<span class="price">Price per room per night from  <em>$ 80</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Spa Resort hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 70</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Spa Resort hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 70</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Best ipsum hotel 
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 50</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 9 /10</span>
									<span class="price">Price per room per night from  <em>$ 80</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Best ipsum hotel 
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 50</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 9 /10</span>
									<span class="price">Price per room per night from  <em>$ 80</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Spa Resort hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 70</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Spa Resort hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 50</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Best ipsum hotel 
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per room per night from  <em>$ 50</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-fourth">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 9 /10</span>
									<span class="price">Price per room per night from  <em>$ 80</em> </span>
									<div class="description">
										<p>Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutes’ walk from London’s Zoological Gardens and a metro station. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--bottom navigation-->
							<div class="bottom-nav">
								<!--back up button-->
								<a href="#" class="scroll-to-top" title="Back up">Back up</a> 
								<!--//back up button-->
								
								<!--pager-->
								<div class="pager">
									<span><a href="#">First page</a></span>
									<span><a href="#">&lt;</a></span>
									<span class="current">1</span>
									<span><a href="#">2</a></span>
									<span><a href="#">3</a></span>
									<span><a href="#">4</a></span>
									<span><a href="#">5</a></span>
									<span><a href="#">6</a></span>
									<span><a href="#">7</a></span>
									<span><a href="#">8</a></span>
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
				<!--//three-fourth content-->
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