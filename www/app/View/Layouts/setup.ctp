<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html>
	<head>
		<meta name="viewport" content="width=device-width" />
  		<title>Gain a Level - Register</title>

		<?php 	echo $this->Html->charset();
			echo $this->Html->meta('icon');
	
			echo $this->Html->css('app.css');
			echo $this->Html->css('normalize.css');

			echo $this->Html->script('vendor/jquery-2.0.3.min.js');
			echo $this->Html->script('vendor/jquery-ui.custom.min.js');
	
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<script>
			$(document).foundation();
		</script>
	</head>
	<body>
		<div id="container">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
	
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</body>
</html>