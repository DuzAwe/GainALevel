<div class="signup">
	<div class="form">
	<?php echo $this->Form->create('User');?>
			<legend>Register</legend>
		<?php
		
			$genderOptions = array("1" => 'Male', "2" => 'Female');
			$activityOptions = array("1" => 'No Cardio', "2" => 'Cardio');
			$attributes = array('legend' => false);
		
			echo $this->Form->input('name');
			echo $this->Form->input('username');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
			echo $this->Form->input('password_confirmation', array('type'=>'password'));
		?>
		<p>Gender</p>
		<?php
			echo $this->Form->radio('gender', $genderOptions, $attributes);
			echo $this->Form->radio('activity', $activityOptions, $attributes);
		?>
	<?php echo $this->Form->button('Next step', array(
				'class' => 'button')
			);?>
	</div>
</div>
