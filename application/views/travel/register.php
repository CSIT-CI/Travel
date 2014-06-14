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
	<title>Book Your Travel</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/sequence.jquery-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/sequence.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/selectnav.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
			$(".form").hide();
			$(".form:first").show();
			$(".f-item:first").addClass("active");
			$(".f-item:first span").addClass("checked");
		});
	</script>
</head>
<body>
	<!--header-->
	<header>
		<div class="wrap clearfix">
			<!--logo-->
			<h1 class="logo"><?php echo anchor('travel', img('images/txt/logo.png')); ?></h1>
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
	
	<!--slider-->
	<section class="slider clearfix">
		<div id="sequence">
			<ul>
				<li>
					<div class="info animate-in">
						<h2>Last minute Winter escapes</h2><br />
						<p>January 2013 holidays 40% off! An unique opportunity to realize your dreams</p>
					</div>
					<img class="main-image animate-in" src="<?php echo base_url(); ?>images/slider/img.jpg" alt="" />
				</li>
				<li>
					<div class="info animate-in">
						<h2>Check out our top weekly deals</h2><br />
						<p>Save Now. Book Later.</p>
					</div>
					<img class="main-image animate-in" src="<?php echo base_url(); ?>images/slider/img.jpg" alt="" />
				</li>
				<li>
					<div class="info animate-in">
						<h2>Check out last minute flight, hotel &amp; vacation offers!</h2><br />
						<p>Save up to 50%!</p>
					</div>
					<img class="main-image animate-in" src="<?php echo base_url(); ?>images/slider/img.jpg" alt="" />
				</li>
			</ul>
		</div>
	</section>
	<!--//slider-->
	
	<!--search-->
	<div class="main-search">
		<form id="main-search" method="post" action="search_results.html">
			<!--column-->
			<div class="column radios">
				<h4><span>01</span> What?</h4>
				<div class="f-item" >
					<input type="radio" name="radio" id="hotel" value="form1" />
					<label for="hotel">Hotel</label>
				</div>
				<div class="f-item">
					<input type="radio" name="radio" id="self_catering" value="form2" />
					<label for="self_catering">Self Catering</label>
				</div>
				<div class="f-item">
					<input type="radio" name="radio" id="flight" value="form3" />
					<label for="flight">Flight</label>
				</div>
				<div class="f-item" >
					<input type="radio" name="radio" id="cruise" value="form4" />
					<label for="cruise">Cruise</label>
				</div>
				<div class="f-item" >
					<input type="radio" name="radio" id="flight_and_hotel" value="form5" />
					<label for="flight_and_hotel">Flight &amp; Hotel</label>	
				</div>
				<div class="f-item">
					<input type="radio" name="radio" id="rent_a_car" value="form6" />
					<label for="rent_a_car">Rent a Car</label>
				</div>
			</div>
			<!--//column-->
			
			<div class="forms">
				<!--form hotel-->
				<div class="form" id="form1">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label for="destination1">Your destination</label>
							<input type="text" placeholder="City, region, district or specific hotel" id="destination1" name="destination" />
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column twins">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker1">Check-in date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker1" name="datepicker1" /></div>
						</div>
						<div class="f-item datepicker">
							<label for="datepicker2">Check-out date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker2" name="datepicker2" /></div>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column triplets">
						<h4><span>04</span> Who?</h4>
						<div class="f-item spinner">
							<label for="spinner1">Rooms</label>
							<input type="text" placeholder="" id="spinner1" name="spinner1" />
						</div>
						<div class="f-item spinner">
							<label for="spinner2">Adults</label>
							<input type="text" placeholder="" id="spinner2" name="spinner1" />
						</div>
						<div class="f-item spinner">
							<label for="spinner3">Children</label>
							<input type="text" placeholder="" id="spinner3" name="spinner1" />
						</div>
					</div>
					<!--//column-->
				</div>	
				<!--//form hotel-->

				<!--form self catering-->
				<div class="form" id="form2">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label for="destination2">Your destination</label>
							<input type="text" placeholder="City, region, district or specific hotel" id="destination2" name="destination" />
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column twins">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker1">Check-in date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker4" name="datepicker4" /></div>
						</div>
						<div class="f-item datepicker">
							<label for="datepicker2">Check-out date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker5" name="datepicker5" /></div>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column twins last">
						<h4><span>04</span> Who?</h4>
						<div class="f-item spinner">
							<label for="spinner1">Guests</label>
							<input type="text" placeholder="" id="spinner4" name="spinner4" />
						</div>
						<div class="f-item spinner">
							<label for="spinner2">Bedrooms</label>
							<input type="text" placeholder="" id="spinner5" name="spinner5" />
						</div>
					</div>
					<!--//column-->
				</div>	
				<!--//form self catering-->
				
				<!--form flight-->
				<div class="form" id="form3">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label for="destination3">Leaving from</label>
							<input type="text" placeholder="City, region, district or specific airport" id="destination3" name="destination" />
						</div>
						<div class="f-item">
							<label for="destination4">Going to</label>
							<input type="text" placeholder="City, region, district or specific airport" id="destination4" name="destination" />
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column two-childs">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker6">Departing on</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker6" name="datepicker6" /></div>
							<select>
								<option>Select time</option>
								<option>Lowest fare</option>
								<option>Morning</option>
								<option>Midday</option>
								<option>Afternoon</option>
								<option>Evening</option>
							</select>
						</div>
						<div class="f-item datepicker">
							<label for="datepicker7">Arriving on</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker7" name="datepicker7" /></div>
							<select>
								<option>Select time</option>
								<option>Lowest fare</option>
								<option>Morning</option>
								<option>Midday</option>
								<option>Afternoon</option>
								<option>Evening</option>
							</select>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column triplets">
						<h4><span>04</span> Who?</h4>
						<div class="f-item spinner">
							<label for="spinner6">Adults</label>
							<input type="text" placeholder="" id="spinner6" name="spinner6" />
						</div>
						<div class="f-item spinner">
							<label for="spinner7">Children</label>
							<input type="text" placeholder="" id="spinner7" name="spinner7" />
						</div>
						<div class="f-item spinner">
							<label for="spinner8">Infants</label>
							<input type="text" placeholder="" id="spinner8" name="spinner8" />
						</div>
					</div>
					<!--//column-->
				</div>	
				<!--//form flight-->
				
				<!--form cruise-->
				<div class="form" id="form4">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label>Your destination</label>
							<select>
								<option>I Don't Mind</option>
								<option>Africa</option>
								<option>Alaska</option>
								<option>Alaska - Gulf Northbound</option>
								<option>Alaska - Gulf Southbound</option>
								<option>Antarctica</option>
								<option>Arctic</option>
								<option>Australia</option>
								<option>Bahamas</option>
								<option>Bermuda</option>
								<option>Brazil</option>
								<option>Canada/New England</option>
								<option>Canada</option>
								<option>Caribbean</option>
								<option>Caribbean - Eastern</option>
								<option>Caribbean - Southern</option>
								<option>Caribbean - Western</option>
								<option>Coastal</option>
								<option>Costa Rica</option>
								<option>Cruise To Nowhere</option>
								<option>Europe</option>
								<option>Northern Europe</option>
								<option>Europe - Western</option>
								<option>Europe (Greenland)</option>
								<option>Europe (Norway)</option>
								<option>Far East</option>
								<option>Greece</option>
								<option>Hawaii</option>
								<option>India</option>
								<option>Mediterranean</option>
								<option>Mediterranean - Eastern</option>
								<option>Mexico</option>
								<option>Middle East</option>
								<option>New England</option>
								<option>New Zealand</option>
								<option>Pacific Coastal</option>
								<option>Pacific Northwest</option>
								<option>Panama Canal</option>
								<option>Russia</option>
								<option>South America</option>
								<option>South Pacific</option>
								<option>Southeast Asia</option>
								<option>Tahiti</option>
								<option>Transatlantic</option>
								<option>Transcanal</option>
								<option>Transpacific</option>
								<option>World Cruise</option>
							</select>
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column twins">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker8">Departure date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker8" name="datepicker8" /></div>
						</div>
						<div class="f-item">
							<label>Cruise length</label>
							<select>
								<option>I Don't Mind</option>
								<option>1-2 Nights</option>
								<option>3-6 Nights</option>
								<option>7-9 Nights</option>
								<option>10-14 Nights</option>
								<option>Over 14 Nights</option>
							</select>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column twins last">
						<h4><span>04</span> Who?</h4>
						<div class="f-item">
							<label>Cruise Line</label>
							<select>
								<option>I Don't Mind</option>
								<option>Azamara Club Cruises</option>
								<option>Carnival Cruise Lines</option>
								<option>Celebrity Cruises</option>
								<option>Costa Cruise Lines</option>
								<option>Cruise &amp; Maritime Voyages</option>
								<option>Crystal Cruises</option>
								<option>Cunard Line Ltd.</option>
								<option>Disney Cruise Line</option>
								<option>Holland America Line</option>
								<option>Hurtigruten Cruise Line</option>
								<option>MSC Cruises</option>
								<option>Norwegian Cruise Line</option>
								<option>Oceania Cruises</option>
								<option>Orion Expedition Cruises</option>
								<option>P&amp;O Cruises</option>
								<option>Paul Gauguin Cruises</option>
								<option>Peter Deilmann Cruises</option>
								<option>Princess Cruises</option>
								<option>Regent Seven Seas Cruises</option>
								<option>Royal Caribbean International</option>
								<option>Seabourn Cruise Line</option>
								<option>Silversea Cruises</option>
								<option>Star Clippers</option>
								<option>Swan Hellenic Cruises</option>
								<option>Thomson Cruises</option>
								<option>Viking River Cruises</option>
								<option>Windstar Cruises</option>
							</select>
						</div>
						
						<div class="f-item spinner">
							<label for="spinner9">Cabins</label>
							<input type="text" placeholder="" id="spinner9" name="spinner9" />
						</div>
						
					</div>
					<!--//column-->
				</div>	
				<!--//form cruise-->
				
				<!--form flight+hotel-->
				<div class="form" id="form5">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label for="destination5">Leaving from</label>
							<input type="text" placeholder="City, region, district or specific airport" id="destination5" name="destination" />
						</div>
						<div class="f-item">
							<label for="destination6">Going to</label>
							<input type="text" placeholder="City, region, district or specific airport" id="destination6" name="destination" />
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column two-childs">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker9">Departing on</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker9" name="datepicker9" /></div>
							<select>
								<option>Select time</option>
								<option>Lowest fare</option>
								<option>Morning</option>
								<option>Midday</option>
								<option>Afternoon</option>
								<option>Evening</option>
							</select>
						</div>
						<div class="f-item datepicker">
							<label for="datepicker10">Arriving on</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker10" name="datepicker10" /></div>
							<select>
								<option>Select time</option>
								<option>Lowest fare</option>
								<option>Morning</option>
								<option>Midday</option>
								<option>Afternoon</option>
								<option>Evening</option>
							</select>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column triplets">
						<h4><span>04</span> Who?</h4>
						<div class="f-item spinner">
							<label for="spinner10">Adults</label>
							<input type="text" placeholder="" id="spinner10" name="spinner10" />
						</div>
						<div class="f-item spinner">
							<label for="spinner11">Children</label>
							<input type="text" placeholder="" id="spinner11" name="spinner11" />
						</div>
						<div class="f-item spinner">
							<label for="spinner12">Rooms</label>
							<input type="text" placeholder="" id="spinner12" name="spinner12" />
						</div>
					</div>
					<!--//column-->
				</div>	
				<!--//form flight+hotel-->
				
				<!--form rent a car-->
				<div class="form" id="form6">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label for="destination7">Pick Up</label>
							<input type="text" placeholder="I want to pick up car in" id="destination7" name="destination" />
						</div>
						<div class="f-item">
							<label for="destination8">Drop Off</label>
							<input type="text" placeholder="I want to pick drop off car in" id="destination8" name="destination" />
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column two-childs">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker11">Pick up time</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker11" name="datepicker11" /></div>
							<select>
								<option>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option selected="selected">10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
							</select>
						</div>
						<div class="f-item datepicker">
							<label for="datepicker12">Drop of time</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker12" name="datepicker12" /></div>
							<select>
								<option>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option selected="selected">10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
							</select>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column twins">
						<h4><span>04</span> Who?</h4>
						<div class="f-item spinner small">
							<label for="spinner13">Driver Age</label>
							<input type="text" placeholder="" id="spinner13" name="spinner13" />
						</div>
						<div class="f-item">
							<label for="spinner2">Car type:</label>
							<select>
								<option>No Preference</option>
								<option>Economy</option>
								<option>Compact</option>
								<option>Midsize</option>
								<option>Standard</option>
								<option>Full Size</option>
								<option>Premium</option>
								<option>Luxury</option>
								<option>Convertible</option>
								<option>Minivan</option>
								<option>Sports Car</option>
							</select>
						</div>
					</div>
					<!--//column-->
				</div>	
				<!--//form rent a car-->
			</div>
			<input type="submit" value="Proceed to results" class="search-submit" id="search-submit" />
		</form>
	</div>
	<!--//search-->
	
	<!--main-->
	<div class="main" role="main">
		<div class="wrap clearfix">
			<!--latest offers-->
			<section class="offers clearfix full">
				<h1>Explore our latest offers</h1>
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="#" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Winter beach escapes 30% off</h4>
						<a href="#" title="Explore our deals" class="gradient-button">Explore our deals</a>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="#" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Spend New Year‘s Eve in Paris</h4>
						<a href="#" title="More info" class="gradient-button">More info</a>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="#" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Skiing weekends in the Alpes</h4>
						<a href="#" title="Explore our deals" class="gradient-button">Explore our deals</a>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="#" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<h4>Our weekly top offer: Thailand</h4>
						<a href="#" title="More info" class="gradient-button">More info</a>
					</div>
				</article>
				<!--//column-->
			</section>
			<!--//latest offers-->
			
			<!--top destinations-->
			<section class="destinations clearfix full">
				<h1>Top destinations around the world</h1>
				

				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Paris</h5>
						<span class="count">1529 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->

				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Amsterdam</h5>
						<span class="count">929 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Saint Petersburg</h5>
						<span class="count">658 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Prague</h5>
						<span class="count">829 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Prague</h5>
						<span class="count">829 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth promo">
					<div class="ribbon-small">- 20%</div>
					<figure><a href="hot_deals.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="hot_deals.html" title="View all" class="gradient-button">View all</a>
						<h5>Paris</h5>
						<span class="count">1529 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Amsterdam</h5>
						<span class="count">929 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Saint Petersburg</h5>
						<span class="count">658 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Saint Petersburg</h5>
						<span class="count">658 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Prague</h5>
						<span class="count">829 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Paris</h5>
						<span class="count">1529 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<figure><a href="location.html" title=""><img src="<?php echo base_url(); ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
					<div class="details">
						<a href="location.html" title="View all" class="gradient-button">View all</a>
						<h5>Amsterdam</h5>
						<span class="count">929 Hotels</span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="hotels.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 70</span>
								</a>
							</div>
							<div class="half flight">
								<a href="flights.html" title="View all">
									<span class="small">from</span>
									<span class="price">&#36; 150</span>
								</a>
							</div>
						</div>
					</div>
				</article>
				<!--//column-->
			</section>
			<!--//top destinations-->
			
			
			<!--info boxes-->
			<section class="boxes clearfix">
				<!--column-->
				<article class="one-fourth">
					<h2>Handpicked Hotels</h2>
					<p>All Book Your Travel Hotels fulfil strict selection criteria. Each hotel is chosen individually and inclusion cannot be bought. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Detailed Descriptions</h2>
					<p>To give you an accurate impression of the hotel, we endeavor to publish transparent, balanced and precise hotel descriptions. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Exclusive Knowledge</h2>
					<p>We’ve done our research. Our scouts are always busy finding out more about our hotels, the surroundings and activities on offer nearby.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Passionate Service</h2>
					<p>Book Your Travels’s team will cater to your special requests. We offer expert and passionate advice for finding the right hotel. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Best Price Guarantee</h2>
					<p>We offer the best hotels at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. Guaranteed, and quickly. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Secure Booking</h2>
					<p>Book Your Travel reservation system is secure and your credit card and personal information is encrypted.<br />We work to high standards and guarantee your privacy. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Benefits for Hoteliers</h2>
					<p>We provide a cost-effective model, a network of over 5000 partners and a personalised account management service to help you optimise your revenue.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Any Questions?</h2>
					<p>Call us on <em>1-555-555-555</em> for individual, tailored advice for your perfect stay or <a href="contact.html" title="Contact">send us a message</a> with your hotel booking query.<br /><br /></p>
				</article>
				<!--//column-->
			</section>
			<!--//info boxes-->
		</div>
	</div>
	<!--//main-->
	
	<!--footer-->
	<footer>
		<?php $this->load->view('includes/footer'); ?>
	</footer>
	<!--//footer-->
	
		
	<div class="lightbox" style="display:block;">
		<div class="lb-wrap">
			<a href="#" class="close">x</a>
			<div class="lb-content">
				<?php echo form_open('travel/signup');?>



					<?php 
					//if(isset($_SESSION['register']))
					//{
					//echo $_SESSION['register'];
					//unset($_SESSION['register']); 
					//}
					printf("welcome",$sess);
					?>

					<h1>Register</h1>
					<div class="f-item">
						<label for="f_name">First Name</label>
						<input type="text" id="f_name" name="f_name" />
					</div>
					<div class="f-item">
						<label for="l_name">Last name</label>
						<input type="text" id="l_name" name="l_name" />
					</div>
					<div class="f-item">
						<label for="email">E-mail address</label>
						<input type="email" id="email" name="email" />
					</div>
					<div class="f-item">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" />
					</div>
					<div class="f-item checkbox">
						<input type="checkbox" id="newsletter" name="newsletter" />
						<label for="newsletter">Tell me about inspiring travel news, and exclusive discounts!</label>
					</div>
					<p>By clicking "Create Account" you confirm that you accept the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>. </p>
					<input type="submit" id="register" name="register" value="Create Account" class="gradient-button"/>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	
	<script>
		// Initiate selectnav function
		selectnav();
	</script>

</body>
</html>