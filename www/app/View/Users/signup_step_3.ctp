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
		
		<?
		
		if($this->Session->read('outcome') == 1)
		{
			?>
			<h3>Measurments</h3><p> - Centemeters</p>
			<?php
			echo $this->Form->input('neck',  array(
				'label' => 'Neck',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('shoulders', array(
				'label' => 'Shoulders',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('chest', array(
				'label' => 'Chest',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('bicep', array(
				'label' => 'Bicep',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('forarm', array(
				'label' => 'Forearm',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('waist', array(
				'label' => 'Waist',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('hips', array(
				'label' => 'Hips',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('thigh', array(
				'label' => 'Thigh',
				'value' => 0));?>
			<br/>
			<?php
			echo $this->Form->input('calves', array(
				'label' => 'Calves',
				'value' => 0)); }?>
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
