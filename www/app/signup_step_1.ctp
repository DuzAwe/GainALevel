<div class="signup">
	<div class="form">
		<?php echo $this->Form->create('User');?>
		<legend>Register</legend>
		<br/>
		<br/>
		<?php
			$genderOptions = array("1" => 'Male', "2" => 'Female');
			$activityOptions = array("1" => 'No Cardio', "2" => 'Cardio');
			$attributes = array('legend' => false);
		?>
		<div class="row">
            <div class="large-12 columns">
				<?php
					echo $this->Form->input('name');
				?>
			</div>
			<div class="large-12 columns">
		        <?php
					echo $this->Form->input('username');
				?>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<?php
					echo $this->Form->input('email');
				?>
		    </div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<?php
					echo $this->Form->input('password');
				?>
		    </div>
		    <div class="large-4 columns">
				<?php
					echo $this->Form->input('password_confirmation', array('type'=>'password'));
				?>
            </div>
		</div>
		<div class="row">
	    	<div class="large-12 columns">
	        	<hr>
			</div>
		</div>
        <div class="row">
        	<div class="large-12 columns">
            	<div class="large-6 small-6 columns">
					<p>Gender</p>
					<?php
						echo $this->Form->radio('gender', $genderOptions, $attributes);
					?>
				</div>
				<div class="large-6 small-6 columns">
					<p>Cardio</p>
					<?php
						echo $this->Form->radio('activity', $activityOptions, $attributes);
					?>
				</div>
			</div>
		</div>
		<div class="row">
        	<div class="large-12 columns">
            	<div class="large-6 small-6 columns">
		<?php echo $this->Form->button('Next step', array(
				'class' => 'button')
				);
		?>
		</div>
			</div>
		</div>
	</div>
</div>
