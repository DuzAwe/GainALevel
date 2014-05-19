<?php 
	echo $this->Session->flash('Auth');
	echo $this->Form->create('User');
	$this->layout = 'setup';
?>
<legend>
	<?php echo __('Login'); ?>
</legend>
</br>
<?php
	/*---Email--*/
	echo $this->Form->input('username', array(
		'label' => 'email')
	);

	/*---Password--*/
	echo $this->Form->input('password');

	echo $this->Form->button('Login', array(
		'type' => 'submit',
		'div' => false,
		'class' => 'button')
	);
?>
<br/>
<?php
	echo $this->Html->link('Register', '#',
		array(
			'class' => 'secondary button', 
			'data-reveal-id' => 'myModal2'
		)
	);
?>
