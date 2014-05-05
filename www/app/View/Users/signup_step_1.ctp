<div class="signup">
    <div class="form">
        <?php echo $this->Form->create('User');?>
        <div class="row">
            <div class="large-12 columns">
        <legend><h2>Register</h2></legend>
            </div>
        </div>
        <?php
                    $genderOptions = array("1" => 'Male', "2" => 'Female');
                    $activityOptions = array("1" => 'Walk less then 5 km a day.', "2" => 'Walk over 5km a day.');
                    $attributes = array('legend' => false);
         ?>

        <div class="row">
            <div class="large-12 columns">
                <?php
                	echo $this->Form->input('name', array(
					'label' => 'Full Name'));
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
            <div class="large-12 columns radiogaga">
                <div class="large-6 small-6 columns">
                    <p>Gender</p>
                    	<?php
                        	echo $this->Form->radio('gender', $genderOptions, $attributes);
                        	
                        	echo $this->Form->error('gender');
                        ?>
                </div>

                <div class="large-6 small-6 columns">
                    <p>Activity Level</p>
                   
                    	<?php
                    		 echo $this->Form->radio('activity', $activityOptions, $attributes);
                    		 
                    		 echo $this->Form->error('activity');
						?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns reg-button">
                <?php 
                echo $this->Form->button('Next step', array(
					'class' => 'button')
					);
                ?>
            </div>
        </div>
    </div>
</div>
