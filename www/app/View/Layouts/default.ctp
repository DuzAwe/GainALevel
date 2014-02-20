<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html>

	<head>

		<meta name="viewport" content="width=device-width" />
  		<title>Gain a Level</title>

		<?php
		
		/*-- Load Meta and Charset --*/
		
			echo $this->Html->charset();
			echo $this->Html->meta('icon');
	
		/*-- Load CSS --*/
	
			echo $this->Html->css('app.css');
			echo $this->Html->css('normalize.css');
			
		/*-- Load javascript --*/
	
			echo $this->Html->script('vendor/custom.modernizr.js');
			echo $this->Html->script('vendor/jquery-2.0.3.min.js');
			echo $this->Html->script('vendor/jquery-ui.custom.min.js');
			echo $this->Html->script('foundation/foundation.js');
	  		echo $this->Html->script('foundation/foundation.topbar.js');
	  		echo $this->Html->script('foundation/foundation.reveal.js');
	  		echo $this->Html->script('foundation/foundation.abide.js');

		/*-- Fetch data --*/
	
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
	
		?>
		<script>
			$(document).foundation();
		</script>
	</head>

	<body>

	<!-- Navigation -->
	
		<nav class="top-bar">
			<!-- Title Area -->
		  	<ul class="title-area">
	            <li class="name"><img src="/img/haed.png"></li>
	            	<li class="toggle-topbar menu-icon">
	            		<a href="#"><span>Menu</span></a>
					</li>
			</ul>
			
		<!-- Right Nav Section -->
			
			<section class="top-bar-section" style="left: 0%;">		
				<ul class="right">
					<li class="has-dropdown not-click">
						<a href="#">Track</a>
						<ul class="dropdown">
							<li class=""><a href="#">Workout</a></li>
							<li class=""><a href="#">Nutrition</a></li>
							<li class=""><a href="#">Sleep</a></li>
							<li class=""><a href="#">Performance</a></li>
							<li class=""><a href="#">Measurements</a></li>
						</ul>
					</li>
					<li class=""><a href="#">Dashboard</a></li>
					<li class=""><a href="#">Tools</a></li>
					<li class="has-form">
						<a href="#" class="register button"  data-reveal-id="myModal">Getting Started</a>
					</li>
				</ul>
			</section>		      	
		</nav>
		
	<!-- End Navigation -->
	
	<!-- Content -->
		
		<div id="container">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
	
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		
	<!-- End Content -->
		
	<!-- Footer -->
		<div class="zurb-footer-bottom">
			<div class="row">
				<div class="large-4 push-8 columns">
					<ul class="home-social">
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="mail"></a></li>
					</ul>
				</div>
				<div class="large-8 pull-4 columns">
					<ul class="zurb-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">News<span class="show-for-medium-up"> &amp; Events</span></a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Sitemap</a></li>
					</ul>
					<p class="copyright">© 2013–2014 DropDeadMedia, All rights reserved.</p>
				</div>          
			</div>
	    </div>
	    
	 <!-- End Footer -->
	 
	</body>
	
</html>
