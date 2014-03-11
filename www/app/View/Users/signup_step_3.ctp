<div class="signup">
	<div class="form">
		<?php
		echo $this->Form->create('User');?>
		<h3>Tell us about yourself...</h3>
		<?php
		echo $this->Form->input('birthdate', array(
			'minYear' => date('Y')-100,
			'maxYear' => date('Y')-16,
			'empty' => ('--')
		));
		?>
		<br/>
		<?php
		echo $this->Form->input('height', array(
			'label' => 'Height - Centimters'));?>
		<br/>
		<?php
		echo $this->Form->input('weight', array(
			'label' => 'Weight - Kilograms'));?>
		<br/>
			<h3>Measurments</h3><p> - Centemeters</p>
			<?php
			echo $this->Form->input('neck',  array(
				'label' => 'Neck'));?>
			<br/>
			<?php
			echo $this->Form->input('shoulders', array(
				'label' => 'Shoulders'));?>
			<br/>
			<?php
			echo $this->Form->input('chest', array(
				'label' => 'Chest'));?>
			<br/>
			<?php
			echo $this->Form->input('bicep', array(
				'label' => 'Bicep'));?>
			<br/>
			<?php
			echo $this->Form->input('forarm', array(
				'label' => 'Forearm'));?>
			<br/>
			<?php
			echo $this->Form->input('waist', array(
				'label' => 'Waist'));?>
			<br/>
			<?php
			echo $this->Form->input('hips', array(
				'label' => 'Hips'));?>
			<br/>
			<?php
			echo $this->Form->input('thigh', array(
				'label' => 'Thigh'));?>
			<br/>
			<?php
			echo $this->Form->input('calves', array(
				'label' => 'Calves'));?>
			<br/>
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
		echo $this->Form->button('Next step', array(
			'class' => 'button')
		);
		echo $this->Html->link('Previous step', array(
			'action' => 'signup_step', $params['currentStep'] -1), array(
			'class' => 'secondary button')
		);
		?>
	</div>
</div>
