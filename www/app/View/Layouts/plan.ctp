<!DOCTYPE html>
<!--[if IE 8]>               
<html class="no-js lt-ie9" lang="en">
<!--<![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="en">
<!--<![endif]-->

<html>

	<head>

		<meta name="viewport" content="width=device-width" />
  		<title>Gain a Level</title>

		<?php
		
		/*-- Load Meta and Charset --*/
		?>
			<meta charset="utf-8">
			<meta content="width=device-width" name="viewport">
		<?php
		
			echo $this->Html->meta('icon');
	
		/*-- Load CSS --*/
	
			echo $this->Html->css('app.css');
			echo $this->Html->css('normalize.css');
	
		/*-- Load javascript --*/
	
			echo $this->Html->script('vendor/jquery-2.1.1.min.js');
			echo $this->Html->script('vendor/custom.modernizr.js');
	
		/*-- Fetch data --*/
	
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
	
		?>

	</head>

	<body>

		<!-- Navigation -->
		<?php if ($logged_in): ?>
			<div class="contain-to-grid">
				<nav class="top-bar">
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name"><a href="/"><img src="/img/header.png"></a></li>
						
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>

					<section class="top-bar-section" style="left: 0%;">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="has-dropdown not-click">
								<a class="height">Track</a>

								<ul class="dropdown">
									<li class=""><a class="space" href="/users/track">Workout</a></li>

									<li class=""><a class="space" href="/users/calories">Calories</a></li>

									<li class=""><a class="space" href="/users/sleep">Sleep</a></li>
								</ul>
							</li>
							<li class=""><?php echo $this->Html->link('Performance', array('controller' => 'users', 'action' => 'performance', $current_user['id']), array('class' => 'height')); ?></li>
							<li class="has-dropdown not-click"><a class="height">Tools</a>
								<ul class="dropdown">
									<li class=""><a class="space" href="/users/plan">Plans</a></li>
									
									<li class=""><a class="space" href="/users/calculators"><strike>Calculators</strike></a></li>
								</ul>
							</li>
							<li class="has-dropdown not-click" ><a class="height"><img class="id-image" src="/img/userimage.png" href="#"></img></a>
								<ul class="dropdown">
									<li class=""><a class="space" href="/users/photo"><strike>Photo Upload</strike></a></li>

									<li class=""><a class="space" href="/users/settings"><strike>Settings</strike></a></li>

									<li class=""><a class="space" href="/users/logout">Logout</a></li>
								</ul>
							 </li>
						</ul>
					</section>
				</nav>
			</div>
		<?php else: ?>
			<div class="contain-to-grid">
				<nav class="top-bar">
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name"><a href="/"><img src="/img/header.png"></a></li>
						
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>

					<section class="top-bar-section" style="left: 0%;">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="has-dropdown not-click">
								<a href="#" class="height">Track</a>

								<ul class="dropdown">
									<li class=""><a class="space" href="/users/track">Workout</a></li>

									<li class=""><a class="space" href="/users/calories">Calories</a></li>

									<li class=""><a class="space" href="/users/sleep">Sleep</a></li>
								</ul>
							</li>
							<li class=""><a href="/users/performance" class="height">Performance</a></li>
							<li class="has-dropdown not-click"><a class="height">Tools</a>
								<ul class="dropdown">
									<li class=""><a class="space" href="/users/plan">Plans</a></li>
									
									<li class=""><a class="space" href="/users/calculators"><strike>Calculators</strike></a></li>
								</ul>
							</li>
							<li class="has-form height">
								<a href="#" class="register button"  data-reveal-id="loginModal">Getting Started</a>
							</li>
						</ul>
					</section>
				</nav>
			</div>
		<?php endif; ?>
		
	<!-- End Navigation -->
	
	<!-- Content -->
		<?php echo $this->Session->flash(); ?>
	
		<?php echo $this->fetch('content'); ?>
	<!-- Modals -->
		<!--Login Modal-->
		<div class="reveal-modal small" id="loginModal" >
			<iframe src="<?php 
				echo $this->Html->url(array(
					'controller' => 'Users',
					'action' => 'login'
					));
				?>" scrolling="no" frameborder="0">
			</iframe>
			<div class="row">
			<div data-reveal-id="signupModal" class="small secondary button">Register</div>
			<a class="close-reveal-modal">&#215;</a>
			</div>
		</div>
		<!--End Login Modal-->
		
		<!--signupModal-->
		<div class="reveal-modal medium" id="signupModal">
			<iframe src="<?php 
				echo $this->Html->url(array(
					'controller' => 'Users',
					'action' => 'signup_setup'
					));
				?>" style="height: 700px" scrolling="no" frameborder="0">
			</iframe>
			<a class="close-reveal-modal">×</a>
		</div>
		<!-- End signupModal -->

	<!-- End Modals -->
		
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
	</section>
		<?php
	
		/*-- Load javascript --*/
	
			echo $this->Html->script('foundation/foundation.js');
			echo $this->Html->script('foundation/foundation.topbar.js');
			echo $this->Html->script('foundation/foundation.reveal.js');
			echo $this->Html->script('docs.js');
	
		/*-- Fetch data --*/

			echo $this->fetch('script');
	
		?>
		<script>
			$(document).foundation();
			
			$(function() {
				FastClick.attach(document.body);
			});
		</script>
	 
	</body>
</html>
