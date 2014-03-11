<h2>Your Plan Is</h2>
<?php foreach ($userLevelFinal as $level): ?>
<h3><?php echo $level['Plan']['planname']; $userLevel = $level['Plan']['planlevel']; ?>&nbsp;</h3>
<?php endforeach;

foreach ($userCalories as $uC):

$userGender = $uC['User']['gender'];
$userHeight = $uC['User']['height'];
$userWeight = $uC['User']['weight'];
$birthday = $uC['User']['birthdate'];
$userActivity = $uC['User']['activity'];

endforeach;

$now = date('Y');
$birthdate = date($birthday);
$userAge = $now - $birthdate;

if($userGender == 1){
	$userCal = floor((10 * $userWeight)+(6.25 * $userHeight)-(5 * $userAge) + 5);
} else {
	$userCal = floor((10 * $userWeight)+(6.25 * $userHeight)-(5 * $userAge) - 161);
}

if($userActivity == 1){
	$userFinalCal = $userCal * 1.2;
} else {
	$userFinalCal = $userCal * 1.375;
}

echo $this->Form->create('User', array('action'=>'signup_complete'));
echo $this->Form->hidden('workoutplan', array(
	'value' => $userLevel
	)
);
echo $this->Form->hidden('calories', array(
	'value' => $userFinalCal
	)
);
	echo $this->Form->input('id', array('type'=>'hidden'))
?>

<div class="row">
	<?php
		echo $this->Form->submit('Submit', array('class' => 'small button', 'div' => false));

		echo $this->Html->link('I will choose my own plan!', array(
			'action' => 'plans'), array(
			'class' => 'small secondary button')
		);
	?>
</div>

