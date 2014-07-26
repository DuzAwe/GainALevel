<div class="signup">
	<div class="form">
		<h3>Do you use any of these tracking apps?</h3>
		</br>
		<div class="row">
			<div class="small-3 columns">
				<img src="/img/myfitness.png" height="125px" width="125px"/>
				</div>
				<div class="small-5 columns padding5">
					<h4>MyFitnessPal</h4>
					<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation.</p>
					</div>
			<div class="small-4 columns padding35">
				<?php
					echo $this->Form->create('User');
				?>
				
				<br/>
				<?php
					echo $this->Form->checkbox('diettracker', array(
						'value' => 1
						)
					);
				?>
				<p class="checkboxalign">- Check if yes</p>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="small-3 columns">
				<img src="/img/sleepcycle.png" height="125px" width="125px"/>
			</div>
			<div class="small-5 columns padding5">
				<h4>Sleep Cycle</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation.</p>
			</div>
			<div class="small-4 columns padding35">
				<?php
					echo $this->Form->checkbox('sleeptracker', array(
						'value' => 1
						)
					);
				?>
				<p class="checkboxalign">- Check if yes</p>
			</div>
		</div>
		
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
