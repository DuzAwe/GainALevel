<script>
	window.onunload = refreshParent;
	function refreshParent() {
		window.opener.location.reload();
	}
</script>

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
	$userCalStart = (10 * $userWeight)+(6.25 * $userHeight)-(5 * $userAge) + 5;
} else {
	$userCalStart = (10 * $userWeight)+(6.25 * $userHeight)-(5 * $userAge) - 161;
}

$userCal = $userCalStart+($userCalStart/5);

if($userActivity == 1){
	$userFinalCal = floor($userCal * 1.2);
} else {
	$userFinalCal = floor($userCal * 1.375);
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
	<a href="/users/logincomplete">
		<?php
			echo $this->Form->button('Accept', array('type' => 'submit', 'class' => 'small button', 'div' => false));
		?>
	</a>
</div>

