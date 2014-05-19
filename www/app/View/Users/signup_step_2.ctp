<div class="signup">
	<div class="form">
		<?php

			$options = array("1" => '', "2" => '', "3"=>'');

			$attributes = array(
				'legend' => false,
				'label' => 'Outcome',
				'separator' => '</td><td>',
				'hiddenField' => false
			);

			echo $this->Form->create('User');
		?>
		
		<h3>What is your goal?</h3>
		<table class="tablefunk">
			<tr>
				<th>Body Building</th>
				<th>Power Lifting</th>
				<th>Physique</th>
			</tr>
			<tr class="radio-center">
				<td><img src="/img/arnold.png" height="175px" width="125px"/></td>
				<td><img src="/img/jim.png" height="175px" width="125px"/></td>
				<td><img src="/img/ryan.png" height="175px" width="125px"/></td>
			</tr>
			<tr>
				<td>This is all about size and getting big, think of Arnold Schwarzenegger</td>
				<td>Getting strong, Power lifting is getting as strong as humanly possible</td>
				<td>Physique is about getting "ripped", having abs and low body fat.</td>
			</tr>
			<tr class="radio-center">
				<td>
				<?php
					echo $this->Form->radio('outcome', $options, $attributes);
					
					echo $this->Form->error('outcome');
				?>
				</td>
			</tr>
		</table>
		
		<div class="row">
			<div class="large-12 columns">
				<hr>
			</div>
		</div>
		
		<div class="row">
			<div class="small-5 columns">
				<?php
					echo $this->Html->link('Previous step', array(
						'action' => 'signup_step', $params['currentStep'] -1), array(
						'class' => 'secondary button')
					);
				?>
			</div>
			<div class="small-4 small-offset-3 columns">
				<?php
					echo $this->Form->button('Next step', array(
						'class' => 'button')
					);
				?>
			</div>
		</div>
	</div>
</div>
