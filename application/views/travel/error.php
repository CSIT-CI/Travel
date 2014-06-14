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
	<title>Book Your Travel - Error</title>
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
				<section class="error">
					<!--Error type-->
					<div class="error-type">
						<h1>404</h1>
						<p>Page not found</p>
					</div>
					<!--//Error type-->
					
					<!--Error content-->
					<div class="error-content">
						<h2>Whoops, you are in the middle of nowhere.</h2>
						<h3>Don’t worry. You’ve probably made a wrong turn somewhwere.</h3>
						<ul>
							<li>If you typed in the address, check your spelling. Could just be a typo.</li>
							<li>If you followed a link, it’s probably broken. Please <a href="#">contact us</a> and we’ll fix it.</li>
							<li>If you’re not sure what you’re looking for, go back to <a href="#">homepage</a>.</li>
						</ul>
					</div>
					<!--//Error content-->
				</section>
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