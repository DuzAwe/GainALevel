<!DOCTYPE html>
<!--[if IE 8]>               
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
  		<title>Gain a Level - Login/Register</title>

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
		<?php echo $this->Session->flash(); ?>
	
		<?php echo $this->fetch('content'); ?>
		
		<?php
	
		/*-- Load javascript --*/
	
			echo $this->Html->script('foundation/foundation.js');
			echo $this->Html->script('foundation/foundation.reveal.js');
	
		/*-- Fetch data --*/

			echo $this->fetch('script');
	
		?>
		
	</body>
	
</html>
