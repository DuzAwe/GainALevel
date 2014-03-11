<?php foreach ($userTrack as $uT): ?><?php $trackValue = $uT['Performance']['weight']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planReps = $pD['Starting_strength']['reps']; $planSets = $pD['Starting_strength']['sets']; $planPressValue = $pD['Starting_strength']['press']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planBenchValue = $pD['Starting_strength']['bench']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planDeadliftValue = $pD['Starting_strength']['deadlift']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planSquatValue = $pD['Starting_strength']['squat']; ?><? endforeach; ?>
<?php 
	$expUserPress = $trackValue + $planPressValue;
	$expUserBench = $trackValue + $planBenchValue;
	$expUserDeadlift = $trackValue + $planDeadliftValue;
	$expUserSquat = $trackValue + $planSquatValue;
	$id = $current_user['id'];
	$date = date('Y-m-d');

	echo $this->Form->create('Performance');
	echo $this->Form->input('weight', array('default' => $expUserBench));
	echo $this->Form->input('reps', array('default' => $planReps));
	echo $this->Form->input('sets', array('default' => $planSets));
	echo $this->Form->hidden('user_id', array('default' => $id, 'type' => 'text'));
	echo $this->Form->hidden('datecompleted', array('default' => $date));
	echo $this->Form->end('Submit');
?>
