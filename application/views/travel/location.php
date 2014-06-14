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
	<title>Book Your Travel - Location</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/selectnav.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
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
						<li><a href="#" title="Travel guides">Travel guides</a></li>
						<li>London</li>                                       
					</ul>
					<!--//crumbs-->
				
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
				<section class="three-fourth">
				
					<h1>London</h1>
					
					<!--inner navigation-->
					<nav class="inner-nav">
						<ul>
							<li><a href="#general_info" title="General information">General information</a></li>
							<li><a href="#sports_and_nature" title="Sports and nature">Sports and nature</a></li>
							<li><a href="#nightlife" title="Nightlife">Nightlife</a></li>
							<li><a href="#culture" title="Culture and history">Culture and history</a></li>
							<li><a href="#hotels" title="Hotels">Hotels</a></li>
							<li><a href="#flights" title="Flights">Flights</a></li>
							<li><a href="#flight_and_hotel" title="Flight + Hotel">Flight + Hotel</a></li>
							<li><a href="#self_catering" title="Self-catering">Self-catering</a></li>
							<li><a href="#cruise" title="Cruise">Cruise</a></li>
							<li><a href="#car_rental" title="Car rental">Car rental</a></li>
						</ul>
					</nav>
					<!--//inner navigation-->
					
					<!--General information-->
					<section id="general_info" class="tab-content">
						<article>
							<h1>London</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">London is a diverse and exciting city with some of the best sights and attractions in the world. </p>
							<p>See London from above on the London Eye; meet a celebrity at Madame Tussauds; examine some of the world’s most precious treasures at the British Museum or come face-to-face with the dinosaurs at the Natural History Museum.</p>
						
							<table>
								<tr>
									<th>Sovereign state</th>
									<td>United Kingdom</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>England</td>
								</tr>
								<tr>
									<th>Area</th>
									<td>1,570 km2 (607 sq mi)</td>
								</tr>
								<tr>
									<th>Time zone</th>
									<td>GMT (UTC±0)</td>
								</tr>
								<tr>
									<th>Languages spoken</th>
									<td>English</td>
								</tr>
								<tr>
									<th>Currency</th>
									<td>British Pound</td>
								</tr>
								<tr>
									<th>Visa requirements</th>
									<td>No Visa needed</td>
								</tr>
							</table>
						</article>
					</section>
					<!--//General information-->
					
					<!--Sports and nature-->
					<section id="sports_and_nature" class="tab-content">
						<article>
							<h1>Sports and nature</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London Sports and nature" /></figure>
							<p class="teaser">London is one of the greenest capitals in the world, with plenty of green and open spaces. There are more than 3000 open spaces.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
						</article>
					</section>
					<!--//Sports and nature-->
					
					<!--Nightlife-->
					<section id="nightlife" class="tab-content">
						<article>
							<h1>Nightlife</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London Nightlife" /></figure>
							<p class="teaser">Looking for nightclubs in London? Take a look at our guide to London clubs. Browse for club ideas, regular club nights and one-off events. </p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
						</article>
					</section>
					<!--//Nightlife-->
					
					<!--Culture and history-->
					<section id="culture" class="tab-content">
						<article>
							<h1>Culture and history</h1>
							<figure class="left_pic"><img src="images/uploads/img.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">For a display of British pomp and ceremony, watch the Changing the Guard ceremony outside Buckingham Palace.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
						</article>
					</section>
					<!--//Culture and history-->
					
					<!--Hotels-->
					<section id="hotels" class="tab-content">
						<div class="deals">
							<!--deal-->
							<article class="full-width">
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
							<article class="full-width">
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
							<article class="full-width">
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
							<article class="full-width">
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
							<article class="full-width">
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
							<article class="full-width">
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
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
					<!--//Hotels-->
					
					<!--Flights-->
					<section id="flights" class="tab-content">
						<div class="deals">
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>London Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Venice Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Amsterdam Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->

							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Saint Petersburg Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Paris Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Saint Petersburg Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Venice Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Amsterdam Flights</h1>
									<span class="price">Price per person from  <em>$ 50</em> </span>
									<div class="description">
										<p>Every Monday, Wednesday and Saturday <a href="hotel.html">More info</a></p>
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
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
					<!--//Flights-->
					
					<!--Flight+Hotel-->
					<section id="flight_and_hotel" class="tab-content">
						<div class="deals">
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->

							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>4 Nights, Self Catering from London Southend with EasyJet Airlines<br />on 25th January 2013 <a href="hotel.html">More info</a></p>
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
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
					<!--//Flight+Hotel-->
					
					<!--Self Catering-->
					<section id="self_catering" class="tab-content">
						<div class="deals">
							<!--deal-->
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Prime Apartment 
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana Palms
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Villa Ipsum
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Prime Apartment 
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Villa Ipsum
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana Palms
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Prime Apartment 
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
							<article class="full-width">
								<figure><a href="hotel.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Tropicana Palms
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
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
					<!--//Self Catering-->
					
					<!--Cruise-->
					<section id="cruise" class="tab-content">
						<div class="deals">
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Royal Caribbean
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton<br /><a href="hotel.html">More info</a><br />&nbsp;<br /></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Royal Iberian
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>Southampton, Madeira, La Coruna, La Palma, Tenerife, Lanzarote, Vigo, Lisbon, Southampton <a href="hotel.html">More info</a><br />&nbsp;<br /><br /></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Pacific Cruise
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>Los Angeles, Honolulu, Pago Pago, X Intl Dateline, Apia, Auckland, Tauranga, Napier, Wellington, X Intl Dateline, Papeete, Bora Bora, Kahului, Hilo, Los Angeles <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->

							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Royal Caribbean
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton<br /><a href="hotel.html">More info</a><br />&nbsp;<br /></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Royal Caribbean
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton<br /><a href="hotel.html">More info</a><br />&nbsp;<br /></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Pacific Cruise
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>Los Angeles, Honolulu, Pago Pago, X Intl Dateline, Apia, Auckland, Tauranga, Napier, Wellington, X Intl Dateline, Papeete, Bora Bora, Kahului, Hilo, Los Angeles <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Royal Caribbean
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address">London  •  <a href="#">Show on map</a></span>
									<span class="rating"> 8 /10</span>
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton<br /><a href="hotel.html">More info</a><br />&nbsp;<br /></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Royal Iberian
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
									<span class="price">Price per person from  <em>$ 500</em> </span>
									<div class="description">
										<p>Southampton, Madeira, La Coruna, La Palma, Tenerife, Lanzarote, Vigo, Lisbon, Southampton <a href="hotel.html">More info</a><br />&nbsp;<br /><br /></p>
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
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
					<!--//Cruise-->
					
					<!--Car rental-->
					<section id="car_rental" class="tab-content">
						<div class="deals">
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Mini</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Compact</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Economy</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->

							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Van</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Mini</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Compact</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Economy</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->

							<!--deal-->
							<article class="full-width">
								<figure><a href="#" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Van</h1>
									<span class="price">Price per day from  <em>$ 50</em> </span>
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <a href="hotel.html">More info</a></p>
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
									<span><a href="#">&gt;</a></span>
									<span><a href="#">Last page</a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>
					</section>
					<!--//Car rental-->
					
				</section>
				<!--//three-fourth content-->
				
				<!--sidebar-->
				<aside class="right-sidebar">

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
								<figure><img src="images/uploads/img.jpg" alt="" width="230" height="130" /></figure>
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