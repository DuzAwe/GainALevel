<div class="users form">
<?php echo $this->Form->create('User');?>
 	<legend>Register</legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('lastname');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirmation', array('type'=>'password'));
	?>
<?php echo $this->Form->end('Submit');?>
</div>
