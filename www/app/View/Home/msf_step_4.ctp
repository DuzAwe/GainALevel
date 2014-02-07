<script>
	window.onunload = refreshParent;
	function refreshParent() {
		self.parent.location.reload(true);
	}
</script>
<h3>Do you want to use any of these tracking apps?</h3>
<?php
echo $this->Form->create('User');?>
<h7>MyFitnessPal</h7>
<br/>
<?php
echo $this->Form->checkbox('diettracker', array(
	'value' => 1,
	'label' => 'MyFitnessPal'
	)
);?>
<br/>
<br/>
<h7>Sleep Cycle</h7>
</br>
<?php
echo $this->Form->checkbox('sleeptracker', array(
	'value' => 1,
	'label' => 'Sleep Cycle'
	)
);?>
<br/>
<br/>
<?php
echo $this->Form->button('Save', array(
	'type' => 'submit',
	'class' => 'close-reveal-modal')
);
echo $this->Html->link('Previous step', array(
	'action' => 'msf_step', $params['currentStep'] -1), array(
	'class' => 'button')
);
?>
