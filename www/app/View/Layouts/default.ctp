<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html>

	<head>

		<meta name="viewport" content="width=device-width" />
  		<title>Gain a Level</title>

		<?php echo $this->Html->charset(); ?>
		<?php
			echo $this->Html->meta('icon');
	
			echo $this->Html->css('app.css');
			echo $this->Html->css('normalize.css');
	
			echo $this->Html->script('vendor/custom.modernizr.js');
			echo $this->Html->script('vendor/jquery-2.0.3.min.js');
			echo $this->Html->script('vendor/jquery-ui.custom.min.js');
			echo $this->Html->script('foundation/foundation.js');
	  		echo $this->Html->script('foundation/foundation.topbar.js');
	  		echo $this->Html->script('foundation/foundation.reveal.js');
	  		echo $this->Html->script('foundation/foundation.abide.js');
			echo $this->Html->script('fullcalendar/fullcalendar.min.js');
			echo $this->Html->script('fullcalendar/Cal.js');
	
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
		  	<ul class="title-area">
	            		<!-- Title Area -->
	            		<li class="name"></li>
	            			<li class="toggle-topbar menu-icon">
	            				<a href="#">
	            					<span>Menu</span>
						</a>
					</li>
	          		</ul>
			<section class="top-bar-section" style="left: 0%;">
		        	<!-- Right Nav Section -->
		        	<ul class="right">
		        	  	<li class="divider"></li>
		        	  	<li class="has-dropdown not-click"><a href="#">Track</a>
		        	  		<ul class="dropdown">
		        	        		<li class=""><?php echo $this->Html->link('Body Building Plans', array('controller' => 'Bodybuildingplans', 'action' => 'index')); ?></li>
		        	          		<li class=""><?php echo $this->Html->link('Nutrition', array('controller' => 'Dietplans', 'action' => 'index')); ?></li>
		        	          		<li class=""><?php echo $this->Html->link('Sleep', array('controller' => 'Sleeps', 'action' => 'index')); ?></li>
		        	          		<li class=""><?php echo $this->Html->link('Performance', array('controller' => 'Performances', 'action' => 'index')); ?></li>
		        	          		<li class=""><?php echo $this->Html->link('Measurments', array('controller' => 'Measurments', 'action' => 'index')); ?></li>
						</ul>
		        	  	</li>
		        	  	<li class="divider"></li>
		        	  	<li class=""><a href="#">Dashboard</a></li>
		        	  	<li class="divider"></li>
		        	  	<li class=""><a href="#">Tools</a></li>
		        	  	<li class="divider"></li>
		        	  	<li class="has-form">
		        	  		<a href="#" class="register button"  data-reveal-id="myModal">Getting Started</a>
		        	  	</li>
		        	</ul>
		      	</section>
		</nav>
		<!-- End Navigation -->
		<div id="container">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
	
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
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