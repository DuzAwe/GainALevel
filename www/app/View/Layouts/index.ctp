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
	
			echo $this->Html->script('vendor/jquery-2.0.3.min.js');
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
					</ul>

					<section class="top-bar-section" style="left: 0%;">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class=""><a href="#" class="height">Welcome <?php echo $current_user['name'];?></a></li>
							<li class="has-dropdown not-click">
								<a href="#" class="height">Track</a>

								<ul class="dropdown">
									<li class=""><a class="space" href="/users/track">Workout</a></li>

									<li class=""><a class="space" href="/users/calories">Nutrition</a></li>

									<li class=""><a class="space" href="/users/sleep">Sleep</a></li>

									<li class=""><a class="space" href="/users/measurments">Measurements</a></li>
								</ul>
							</li>
							<li class=""><?php echo $this->Html->link('Performance', array('controller' => 'users', 'action' => 'performance', $current_user['id']), array('class' => 'height')); ?></li>
							<li class=""><a href="/users/tools" class="height">Tools</a></li>
							<li class="has-dropdown not-click" ><a class="height"><img class="id-image" src="http://www.crown-church.org.uk/images/member_photos/default_user.jpg" href="#"></img></a>
								<ul class="dropdown">
									<li class=""><a class="space" href="/users/photo">Photo Upload</a></li>

									<li class=""><a class="space" href="/users/settings">Settings</a></li>

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
					</ul>

					<section class="top-bar-section" style="left: 0%;">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="has-dropdown not-click">
								<a href="#" class="height">Track</a>

								<ul class="dropdown">
									<li class=""><a class="space" href="/users/track">Workout</a></li>

									<li class=""><a class="space" href="/users/calories">Nutrition</a></li>

									<li class=""><a class="space" href="/users/sleep">Sleep</a></li>

									<li class=""><a class="space" href="/users/measurments">Measurements</a></li>
								</ul>
							</li>
							<li class=""><a href="/users/performance" class="height">Preformance</a></li>
							<li class=""><a href="/users/tools" class="height">Tools</a></li>
							<li class="has-form height">
								<a href="#" class="register button"  data-reveal-id="myModal">Getting Started</a>
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
		
		<div id="myModal" class="reveal-modal small">
			<iframe seamless src="<?php 
				echo $this->Html->url(array(
					'controller' => 'Users',
					'action' => 'login'
					));
				?>" class="myFrame" scrolling="no" frameborder="0">
			</iframe>
			<div data-reveal-id="secondModal" class="small secondary button">Register</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
		<div class="reveal-modal small" id="secondModal">
			<iframe seamless src="<?php 
				echo $this->Html->url(array(
					'controller' => 'Users',
					'action' => 'signup_setup'
					));
				?>" class="myFrame" style="height: 500px" scrolling="no" frameborder="0">
			</iframe>
			<a class="close-reveal-modal">×</a>
		</div><!-- End Modal2 -->

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
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2/jquery.min.js" type="text/javascript"></script>-->
		<!-- Load jQuery from a local copy if loading from Google fails -->
		<!--<script type="text/javascript">
			window.jQuery || document.write('<script type="text/javascript" src="js/vendor/jquery-2.0.3.min.js"><\/script>')
		</script>-->
		<?php
	
		/*-- Load javascript --*/
	
			echo $this->Html->script('foundation/foundation.js');
			echo $this->Html->script('foundation/foundation.topbar.js');
			echo $this->Html->script('foundation/foundation.reveal.js');
			echo $this->Html->script('vendor/jquery-ui.custom.min.js');
			echo $this->Html->script('fullcalendar/fullcalendar.min.js');
		?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js" type="text/javascript"></script>
		<?php
			echo $this->Html->script('fullcalendar/Cal.js');
	
		/*-- Fetch data --*/

			echo $this->fetch('script');
	
		?>
		<script>
			$(document).foundation();
			
			$(function() {
				FastClick.attach(document.body);
			});
		</script>
		
		<!-- Google Chart -->
		
		<script src="https://www.google.com/jsapi" type="text/javascript"></script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]});
		      	google.setOnLoadCallback(drawChart);
		      	function drawChart() {
		        	var data = google.visualization.arrayToDataTable([
					  ['Months', 'Deadlift', 'OHP','Squat','Bench'],
					  ['<?php echo date("M", strtotime("-3 month")); ?>',  100,      	40,    	160,    80],
					  ['<?php echo date("M", strtotime("-2 month")); ?>',  120,      	50,    	170,    60],
					  ['<?php echo date("M", strtotime("-1 month")); ?>',  160,    		60,    	100,    80],
					  ['<?php echo date("M"); ?>'						,  220,      	55,  	90,    	100]
					]);
			
			        var options = {
			          backgroundColor:'none', 
			          chartArea:{left:50,top:50,width:"70%",height:"75%"},
			          hAxis: {title: 'Months',  titleTextStyle: {color: '#333'}},
			          vAxis: {minValue: 0},
			          legend:{position: 'top'}
			          
			        };
			
			        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
			        chart.draw(data, options);
			      }
		</script>
		
		<!-- End Google Chart -->
	 
	</body>
	
</html>
