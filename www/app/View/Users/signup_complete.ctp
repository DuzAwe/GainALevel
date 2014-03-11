<h2>Your Plan Is</h2>
<?php foreach ($userLevelFinal as $level): ?>
<h3><?php echo $level['Plan']['planname']; $userLevel = $level['Plan']['planlevel']; ?>&nbsp;</h3>
<?php endforeach; ?>
<?php foreach ($userCalories as $uC): ?>
<?php
$userGender = $uC['User']['gender'];
$userHeight = $uC['User']['height'];
$userWeight = $uC['User']['weight'];
$birthday = $uC['User']['birthdate'];
?>
<?php endforeach;
$now = date('Y');
$birthdate = date($birthday);
$userAge = $now - $birthdate;
?>
<?php if($userGender == 1){
		$userCal = floor((10 * $userWeight)+(6.25 * $userHeight)-(5 * $userAge) + 5);
	} else {
		$userCal = floor((10 * $userWeight)+(6.25 * $userHeight)-(5 * $userAge) - 161);
	}
?>
<?php
	echo $this->Form->create('User', array('action'=>'signup_complete'));
	echo $this->Form->checkbox('workoutplan', array(
		'value' => $userLevel,
		'label' => 'I agree to the Terms and Conditions'
		)
	);
	echo $this->Form->hidden('calories', array(
		'value' => $userCal
		)
	);
?><p>I agree to the Terms and Conditions</p>
<?php
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

