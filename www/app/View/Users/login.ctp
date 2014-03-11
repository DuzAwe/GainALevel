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
	</div>
</div>
