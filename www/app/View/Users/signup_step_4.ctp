<div class="signup">
	<div class="signup">
		<h3>Do you want to use any of these tracking apps?</h3>
		<?php
			echo $this->Form->create('User');
		?>
		<h7>MyFitnessPal</h7>
		<br/>
		<?php
			echo $this->Form->checkbox('diettracker', array(
				'value' => 1,
				'label' => 'MyFitnessPal'
				)
			);
		?>
		<br/>
		<br/>
		<h7>Sleep Cycle</h7>
		</br>
		<?php
			echo $this->Form->checkbox('sleeptracker', array(
				'value' => 1,
				'label' => 'Sleep Cycle'
				)
			);
		?>
		<br/>
		<br/>
		<?php 
			
			echo $this->Form->end('Submit', array('class' => 'button'));

			echo $this->Html->link('Previous step', array(
				'action' => 'signup_step', $params['currentStep'] -1), array(
				'class' => 'secondary button')
			);
		?>
	</div>
</div>
