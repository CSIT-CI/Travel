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
	<title>Book Your Travel - Get inspired</title>
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
						<li>Get inspired</li>                                       
					</ul>
					<!--//crumbs-->
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
				<section class="three-fourth">
					<h1>What do you like?</h1>
					<!--get inspired list-->
					<ul class="get_inspired">
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Last minute</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>All Inclusive</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Family Fun</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Adventure</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Beach &amp; Sun</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Casinos</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>History &amp; Culture</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Clubbing</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Romance</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Shopping</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Skiing</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Wellness</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Cruise</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>City Breaks</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
						
						<!--item-->
						<li>
							<a href="get_inspired _results.html">
								<figure>
									<img src="images/uploads/img.jpg" alt="" width="154" height="87" />
									<figcaption>Deals of the Week</figcaption>
								</figure>
							</a>
						</li>
						<!--//item-->
					</ul>
					<!--//get inspired list-->
					
					<!--top destinations-->
					<section class="destinations clearfix">
						<h1>Our Top destinations</h1>
						
						<!--column-->
						<article class="one-fourth">
							<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
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
							<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
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
							<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
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
							<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
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
							<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
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
						<article class="one-fourth last">
							<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
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
					</section>
					<!--//top destinations-->
				</section>	
				<!--three-fourth content-->
				
				<!--sidebar-->
				<aside class="right-sidebar">
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