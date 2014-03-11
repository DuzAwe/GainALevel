<?php
	$id = $current_user['id'];
	$date = date('Y-m-d');

	echo $this->Form->create('Calories');
	echo $this->Form->input('calories');
	echo $this->Form->hidden('user_id', array('default' => $id, 'type' => 'text'));
	echo $this->Form->hidden('datecompleted', array('default' => $date));
	echo $this->Form->end('Submit');
?>
