<?php

$attributes = array(
	'legend' => false
);

echo $this->Form->create('User');?>
<h3>What is your goal?</h3>
<?php
echo $this->Form->radio('outcome', $outcome, $attributes);?>
<br/>
<?php
echo $this->Form->button('Next step', array(
	'class' => 'button')
);
echo $this->Html->link('Previous step', array(
	'action' => 'signup_step_step', $params['currentStep'] -1), array(
	'class' => 'secondary button')
);
?>
