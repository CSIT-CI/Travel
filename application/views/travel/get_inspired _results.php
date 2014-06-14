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
		
		$('.view-type li:first-child').removeClass('active');
		$('.view-type li:nth-child(2n)').addClass('active');
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
						<li><a href="#" title="Get inspired">Get inspired</a></li> 
						<li>Search results</li>                                       
					</ul>
					<!--//crumbs-->
				</nav>
				<!--//breadcrumbs-->
			
				<!--sidebar-->
				<aside class="left-sidebar">
					<article class="refine-search-results">
						<h2>Refine search results</h2>
						<dl>
							<!--City breaks-->
							<dt>City breaks</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch1" name="location" />
									<label for="ch1">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch2" name="location" />
									<label for="ch2">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch3" name="location" />
									<label for="ch3">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch4" name="location" />
									<label for="ch4">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch5" name="location" />
									<label for="ch5">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch6" name="location" />
									<label for="ch6">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch7" name="location" />
									<label for="ch7">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch8" name="location" />
									<label for="ch8">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//City breaks-->
							
							<!--Last minute-->
							<dt>Last minute</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch9" name="location" />
									<label for="ch9">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch10" name="location" />
									<label for="ch10">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch11" name="location" />
									<label for="ch11">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch12" name="location" />
									<label for="ch12">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch13" name="location" />
									<label for="ch13">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch14" name="location" />
									<label for="ch14">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch15" name="location" />
									<label for="ch15">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch16" name="location" />
									<label for="ch16">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Last minute-->
							
							<!--All inclusive-->
							<dt>All inclusive</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch17" name="location" />
									<label for="ch17">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch18" name="location" />
									<label for="ch18">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch19" name="location" />
									<label for="ch19">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch20" name="location" />
									<label for="ch20">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch21" name="location" />
									<label for="ch21">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch22" name="location" />
									<label for="ch22">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch23" name="location" />
									<label for="ch23">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch24" name="location" />
									<label for="ch24">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//All inclusive-->
							
							<!--Family Fun-->
							<dt>Family Fun</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch25" name="location" />
									<label for="ch25">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch26" name="location" />
									<label for="ch26">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch27" name="location" />
									<label for="ch27">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch28" name="location" />
									<label for="ch28">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch29" name="location" />
									<label for="ch29">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch30" name="location" />
									<label for="ch30">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch31" name="location" />
									<label for="ch31">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch32" name="location" />
									<label for="ch32">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Family Fun-->
							
							<!--Adventure-->
							<dt>Adventure</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch33" name="location" />
									<label for="ch33">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch34" name="location" />
									<label for="ch34">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch35" name="location" />
									<label for="ch35">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch36" name="location" />
									<label for="ch36">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch37" name="location" />
									<label for="ch37">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch38" name="location" />
									<label for="ch38">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch39" name="location" />
									<label for="ch39">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch40" name="location" />
									<label for="ch40">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Adventure-->
							
							<!--Beach & Sun-->
							<dt>Beach &amp; Sun</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch41" name="location" />
									<label for="ch41">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch42" name="location" />
									<label for="ch42">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch43" name="location" />
									<label for="ch43">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch44" name="location" />
									<label for="ch44">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch45" name="location" />
									<label for="ch45">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch46" name="location" />
									<label for="ch46">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch47" name="location" />
									<label for="ch47">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch48" name="location" />
									<label for="ch48">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Beach & Sun-->
							
							<!--Casinos-->
							<dt>Casinos</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch49" name="location" />
									<label for="ch49">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch50" name="location" />
									<label for="ch50">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch51" name="location" />
									<label for="ch51">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch52" name="location" />
									<label for="ch52">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch53" name="location" />
									<label for="ch53">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch54" name="location" />
									<label for="ch54">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch55" name="location" />
									<label for="ch55">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch56" name="location" />
									<label for="ch56">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Casinos-->
							
							<!--History & Culture-->
							<dt>History &amp; Culture</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch57" name="location" />
									<label for="ch57">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch58" name="location" />
									<label for="ch58">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch59" name="location" />
									<label for="ch59">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch60" name="location" />
									<label for="ch60">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch61" name="location" />
									<label for="ch61">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch62" name="location" />
									<label for="ch62">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch63" name="location" />
									<label for="ch63">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch64" name="location" />
									<label for="ch64">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//History & Culture-->
							
							<!--Clubbing-->
							<dt>Clubbing</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch65" name="location" />
									<label for="ch65">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch66" name="location" />
									<label for="ch66">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch67" name="location" />
									<label for="ch67">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch68" name="location" />
									<label for="ch68">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch69" name="location" />
									<label for="ch69">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch70" name="location" />
									<label for="ch70">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch71" name="location" />
									<label for="ch71">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch72" name="location" />
									<label for="ch72">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Clubbing-->
							
							<!--Romance-->
							<dt>Romance</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch73" name="location" />
									<label for="ch73">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch74" name="location" />
									<label for="ch74">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch75" name="location" />
									<label for="ch75">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch76" name="location" />
									<label for="ch76">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch77" name="location" />
									<label for="ch77">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch78" name="location" />
									<label for="ch78">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch79" name="location" />
									<label for="ch79">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch80" name="location" />
									<label for="ch80">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Romance-->
							
							<!--Shopping-->
							<dt>Shopping</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch81" name="location" />
									<label for="ch81">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch82" name="location" />
									<label for="ch82">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch83" name="location" />
									<label for="ch83">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch84" name="location" />
									<label for="ch84">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch85" name="location" />
									<label for="ch85">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch86" name="location" />
									<label for="ch86">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch87" name="location" />
									<label for="ch87">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch88" name="location" />
									<label for="ch88">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Shopping-->
							
							<!--Skiing-->
							<dt>Skiing</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch89" name="location" />
									<label for="ch89">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch90" name="location" />
									<label for="ch90">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch91" name="location" />
									<label for="ch91">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch92" name="location" />
									<label for="ch92">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch93" name="location" />
									<label for="ch93">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch94" name="location" />
									<label for="ch94">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch95" name="location" />
									<label for="ch95">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch96" name="location" />
									<label for="ch96">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Skiing-->
							
							<!--Wellness-->
							<dt>Wellness</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch97" name="location" />
									<label for="ch97">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch98" name="location" />
									<label for="ch98">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch99" name="location" />
									<label for="ch99">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch100" name="location" />
									<label for="ch100">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch101" name="location" />
									<label for="ch101">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch102" name="location" />
									<label for="ch102">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch103" name="location" />
									<label for="ch103">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch104" name="location" />
									<label for="ch104">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Wellness-->
							
							<!--Cruise-->
							<dt>Cruise</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch105" name="location" />
									<label for="ch105">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch106" name="location" />
									<label for="ch106">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch107" name="location" />
									<label for="ch107">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch108" name="location" />
									<label for="ch108">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch109" name="location" />
									<label for="ch109">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch110" name="location" />
									<label for="ch110">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch111" name="location" />
									<label for="ch111">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch112" name="location" />
									<label for="ch112">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Cruise-->
							
							<!--Deals of the Week-->
							<dt>Deals of the Week</dt>
							<dd>
								<div class="checkbox">
									<input type="checkbox" id="ch113" name="location" />
									<label for="ch113">Anywhere</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch114" name="location" />
									<label for="ch114">Africa &amp; the Middle East</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch115" name="location" />
									<label for="ch115">Asia</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch116" name="location" />
									<label for="ch116">Caribbean</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch117" name="location" />
									<label for="ch117">Europe</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch118" name="location" />
									<label for="ch118">Mexico, Central &amp; South America</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch119" name="location" />
									<label for="ch119">South Pacific</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="ch120" name="location" />
									<label for="ch120">United States &amp; Canada</label>
								</div>
							</dd>
							<!--//Deals of the Week-->
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
						
						<div class="locations clearfix">
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Paris</h1>
									<div class="description">
										<p>The city of love has many wonderful sights and sounds to explore, making it the perfect getaway if you’re looking for an extra special city break. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>London</h1>
									<div class="description">
										<p>Come and explore all London has to offer and get ready for the adventure of a lifetime. The great city of London awaits you. Welcome.  </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Amsterdam</h1>
									<div class="description">
										<p>If you’re looking for a chilled-out relaxed city break then look no further than the wonderful city of Amsterdam.  </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Venice</h1>
									<div class="description">
										<p>Immerse yourself in colour, culture and architecture in Venice - one of the most romantic cities in the entire world. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Prague</h1>
									<div class="description">
										<p>Prague is the most exciting city in Central Europe with wonderful sightseeing, opera, restaurants &amp; nightlife. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Paris</h1>
									<div class="description">
										<p>The city of love has many wonderful sights and sounds to explore, making it the perfect getaway if you’re looking for an extra special city break. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>London</h1>
									<div class="description">
										<p>Come and explore all London has to offer and get ready for the adventure of a lifetime. The great city of London awaits you. Welcome.  </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Amsterdam</h1>
									<div class="description">
										<p>If you’re looking for a chilled-out relaxed city break then look no further than the wonderful city of Amsterdam.  </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Venice</h1>
									<div class="description">
										<p>Immerse yourself in colour, culture and architecture in Venice - one of the most romantic cities in the entire world. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Prague</h1>
									<div class="description">
										<p>Prague is the most exciting city in Central Europe with wonderful sightseeing, opera, restaurants &amp; nightlife. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>Paris</h1>
									<div class="description">
										<p>The city of love has many wonderful sights and sounds to explore, making it the perfect getaway if you’re looking for an extra special city break. </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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
							<!--//deal-->
							
							<!--deal-->
							<article class="full-width">
								<figure><a href="location.html" title=""><img src="images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
								<div class="details">
									<h1>London</h1>
									<div class="description">
										<p>Come and explore all London has to offer and get ready for the adventure of a lifetime. The great city of London awaits you. Welcome.  </p>
									</div>
									<a href="location.html" title="Read more" class="gradient-button">Read more</a>
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