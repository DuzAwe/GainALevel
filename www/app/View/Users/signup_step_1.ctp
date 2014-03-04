<div class="signup">
	<div class="form">
	<?php echo $this->Form->create('User');?>
			<legend>Register</legend>
		<?php
		
			$options = array("1" => 'Male', "2" => 'Female');
			$attributes = array('legend' => false);
		
			echo $this->Form->input('name');
			echo $this->Form->input('username');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
			echo $this->Form->input('password_confirmation', array('type'=>'password'));
		?>
		<p>Gender</p>
		<?php
			echo $this->Form->radio('gender', $options, $attributes);
		?>
	<?php echo $this->Form->button('Next step', array(
				'class' => 'button')
			);?>
	</div>
</div>
