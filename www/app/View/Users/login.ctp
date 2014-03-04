<div class="signup">	
	<?php
		echo $this->Form->create();
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	<div class="row">
		<?php
			echo $this->Form->submit('Login', array('class' => 'small button', 'div' => false));
		?>
		<div onClick="location.href='signup_setup'" class="small secondary button">Register</div>
	</div>
</div>

<script type='text/javascript'>
    
    var iFrames = $('.myFrame');

	function iResize() {

		for (var i = 0, j = iFrames.length; i < j; i++) {
		  iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}
	}

	if ($.support.safari || $.support.opera) { 

	   iFrames.load(function(){
		   setTimeout(iResize, 0);
	   });

	   for (var i = 0, j = iFrames.length; i < j; i++) {
			var iSource = iFrames[i].src;
			iFrames[i].src = '';
			iFrames[i].src = iSource;
	   }

	} else {
	   iFrames.load(function() { 
		   this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
	   });
	}

	setInterval(iResize, 1000);

</script>
