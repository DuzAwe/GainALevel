<div class="signup">
	<div class="form">
		<?php

			$attributes = array(
				'legend' => false,
				'label' => 'Outcome',
				'separator' => '</td><td>',
				'hiddenField' => false
			);

			echo $this->Form->create('User');
		?>
		
		<h3>What is your goal?</h3>
		<table>
			<tr>
				<th>1</th>
				<th>2</th>
				<th>3</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td>
				<?php
					echo $this->Form->radio('outcome', $outcome, $attributes);
					
					echo $this->Form->error('outcome');
				?>
				</td>
			</tr>
		</table>
		
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
