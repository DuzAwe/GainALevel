<div class="signup">
	<div class="form">
		<?php echo $this->Form->create('User');?>
		<h3>Tell us about yourself...</h3>
		<div class="row">
            <div class="large-12 columns">
				<?php
				echo $this->Form->input('birthdate', array(
					'minYear' => date('Y')-100,
					'maxYear' => date('Y'),
					'empty' => ('--')
				));
				?>
            </div>
		</div>
		<br/>
		<div class="row">
            <div class="large-6 columns">
				<?php
				echo $this->Form->input('height', array(
					'label' => 'Height - Centimeters'));?>
            </div>
		<br/>
			<div class="large-6 columns">
				<?php
				echo $this->Form->input('weight', array(
					'label' => 'Weight - Kilograms'));?>
			</div>
		<br/>
		</div>
			
		<h3>Max Lifts</h3><p> - Kilograms</p>
		<?php
			echo $this->Form->input('benchmax', array(
				'label' => 'Bench Press'));?>
		<br/>
		<?php
			echo $this->Form->input('pressmax', array(
				'label' => 'Overhead Press'));?>
		<br/>
		<?php
			echo $this->Form->input('deadliftmax', array(
				'label' => 'Dead Lift'));?>
		<br/>
		<?php
			echo $this->Form->input('squatmax', array(
				'label' => 'Squat'));?>
		<br/>
		<?php
			echo $this->Html->link('Previous step', array(
				'action' => 'signup_step', $params['currentStep'] -1), array(
				'class' => 'secondary button')
			);
			echo $this->Form->button('Next step', array(
				'class' => 'button')
			);
		?>
	</div>
</div>
