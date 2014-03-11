<?php foreach ($userTrack as $uT): ?><?php $trackValue = $uT['Performance']['weight']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planReps = $pD['Starting_strength']['reps']; $planSets = $pD['Starting_strength']['sets']; $planPressValue = $pD['Starting_strength']['press']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planBenchValue = $pD['Starting_strength']['bench']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planDeadliftValue = $pD['Starting_strength']['deadlift']; ?><? endforeach; ?>
<?php foreach ($planData as $pD): ?><?php $planSquatValue = $pD['Starting_strength']['squat']; ?><? endforeach; ?>
<?php 
	$expUserPress = $trackValue + $planPressValue;
	$expUserBench = $trackValue + $planBenchValue;
	$expUserDeadlift = $trackValue + $planDeadliftValue;
	$expUserSquat = $trackValue + $planSquatValue;
?>
<div class="row">
        <div class="large-12 columns set squat">
            <h1>Your Doing Day ___ Of Starting Strength</h1>

            <p>Here we will echo training advice or generic happy things.</p>

            <h1>Hoist For Her</h1>
        </div>
    </div><!-- First Band -->
<?php
	echo $this->Form->create('Performnce', array('div' => false));
?>
    <div class="row">
        <div class="large-12 columns set squat">
			<form>
                <fieldset>
                    <ul class="button-group track-button-add">
                        <li><a class="small button" id="add1">Add Set</a></li>
                    </ul>

                        <legend>Squats <small><a href=
                        "http://www.youtube.com/watch?v=BUOQoMpYvXk">How to Squat</a></small></legend>

                        <div class="row">
                            <div class="large-4 columns">
                                <div class="row collapse">
                                    <div class="small-12 columns">
                                        <?php
											echo $this->Form->input('weight', array('default' => $expUserBench, 'div' => 'small-9 columns'));
										?>
                                    </div>
                                </div>
                            </div>

                            <div class="large-4 columns">
                                <div class="row collapse">
                                    <div class="small-12 columns">
                                        <?php
											echo $this->Form->input('reps', array('default' => $planReps, 'div' => 'small-9 columns'));
										?>
                                    </div>
                                </div>
                            </div>

                            <div class="large-4 columns bell">
                                <div class="row collapse">
                                    <div class="small-8 columns">
                                        <?php
											echo $this->Form->input('sets', array('default' => $planSets, 'div' => 'small-9 columns'));
										?>
										<?php
											echo $this->Form->input('id', array('type'=>'hidden'));
											echo $this->Form->input('datecompleted', array('type'=>'hidden'));
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
    
    <!-- Second Band -->

    <div class="row">
        <div class="large-12 columns set bench">
            <form>
                <fieldset>
                    <ul class="button-group track-button-add">
                        <li><a class="small button" id="add2">Add Set</a></li>
                    </ul>

                        <legend>Bench <small><a href="http://www.youtube.com/watch?v=uwygcGdazeM">How to Bench</a></small></legend>

                        <div class="row">
                            <div class="large-4 columns">
                                <div class="row collapse">
                                    <div class="small-12 columns">
                                        <?php
											echo $this->Form->input('weight', array('default' => $expUserBench, 'div' => 'small-9 columns'));
										?>
                                    </div>
                                </div>
                            </div>

                            <div class="large-4 columns">
                                <div class="row collapse">
                                    <div class="small-12 columns">
                                        <?php
											echo $this->Form->input('reps', array('default' => $planReps, 'div' => 'small-9 columns'));
										?>
                                    </div>
                                </div>
                            </div>

                            <div class="large-4 columns bell">
                                <div class="row collapse">
                                    <div class="small-8 columns">
                                        <?php
											echo $this->Form->input('sets', array('default' => $planSets, 'div' => 'small-9 columns'));
										?>
										<?php
											echo $this->Form->input('id', array('type'=>'hidden'));
											echo $this->Form->input('datecompleted', array('type'=>'hidden'));
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
    
    <!-- Third Band -->

    <div class="row">
        <div class="large-12 columns set deadlift">
            <form>
                <fieldset>
                    <ul class="button-group track-button-add">
                        <li><a class="small button" id="add3">Add Set</a></li>
                    </ul>
                  
                        <legend>Deadlift <small><a href="https://www.youtube.com/watch?v=Il9Nqvj39jg&amp;feature=player_embedded">How to Deadlift</a></small></legend>

                        <div class="row">
                            <div class="large-4 columns">
                                <div class="row collapse">
                                    <div class="small-12 columns">
                                        <?php
											echo $this->Form->input('weight', array('default' => $expUserBench, 'div' => 'small-9 columns'));
										?>
                                    </div>
                                </div>
                            </div>

                            <div class="large-4 columns">
                                <div class="row collapse">
                                    <div class="small-12 columns">
                                        <?php
											echo $this->Form->input('reps', array('default' => $planReps, 'div' => 'small-9 columns'));
										?>
                                    </div>
                                </div>
                            </div>

                            <div class="large-4 columns bell">
                                <div class="row collapse">
                                    <div class="small-8 columns">
                                        <?php
											echo $this->Form->input('sets', array('default' => $planSets, 'div' => 'small-9 columns'));
										?>
										<?php
											echo $this->Form->input('id', array('type'=>'hidden'));
											echo $this->Form->input('datecompleted', array('type'=>'hidden'));
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
<?php
	echo $this->Form->submit('Submit', array('class' => 'small button', 'div' => false));
?>
</form>
