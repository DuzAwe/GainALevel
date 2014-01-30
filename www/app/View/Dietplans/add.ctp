<div class="users form">
	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?><legend>
		</br>
		<?php 
			echo $this->Form->input('firstname');
			echo $this->Form->input('lastname');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
			echo $this->Form->input('birthday', array(
				'dateFormat'=>'DMY', 
				'minYear' => date('Y')-80, 
				'maxYear' => date('Y'), 
				'empty' => array('--')));
			echo $this->Form->input('height');
			echo $this->Form->input('weight');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>