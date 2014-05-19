<?php foreach ($lastWorkout as $lW): ?><?php $lastWeek = $lW['Performance']['week']; ?><?php endforeach; ?>
<?php foreach ($lastWorkout as $lD): ?><?php $lastDay = $lD['Performance']['day']; ?><?php endforeach; ?>
<?php foreach ($planData as $uP): ?><?php $plan = $uP['User']['workoutplan']; ?><?php endforeach; ?>
<?php if($lastWorkout == null){$lastWeek = 1; $lastDay = 1;} ?>
<?php
	//----------Starting Strength----------//
	if($plan == 1){
		if($lastWeek == 1){
			if($lastDay == 1){
				foreach ($userTrackBench as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['benchmax']; endforeach;
				if ($userTrackBench == null){$squat = $initialSquat;}
				$squatFinal = ($squat +5);
				$startingSquat = (floor($squatFinal/2.5))*2.5;

				$id = $current_user['id'];
				$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Day 1<small><a href="#"> How to Lift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $startingSquat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '3'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 3));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->button('Submit', array('class' => 'button'));
							?>
						</fieldset>
					</div>
				</div>
		
				<script>
				var startingstrength = '{"SquatWeek1":[' +
				'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = ($squat +2.5) * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = ($squat +2.5) * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"5","Sets":"1","squat3":"<?php $squatFinal = ($squat +2.5) * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"3","squat4":"<?php echo $startingSquat?>"},]}';

				var obj = eval ("(" + startingstrength + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackDeadlift as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['deadliftmax']; endforeach;
				if ($userTrackDeadlift == null){$squat = $initialSquat;}
				$squatFinal = ($squat +5); 
				$startingSquat = (floor($squatFinal/2.5))*2.5;
				
				$id = $current_user['id'];
				$date = date('Y-m-d');
				?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Day 2<small><a href="#"> How to Lift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $startingSquat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '3'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 3));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->button('Submit', array('class' => 'button'));
							?>
						</fieldset>
					</div>
				</div>
				<script type="text/javascript">
				var startingstrength = '{"SquatWeek1":[' +
				'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = ($squat +5) * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = ($squat +5) * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"5","Sets":"1","squat3":"<?php $squatFinal = ($squat +5) * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"3","squat4":"<?php echo $startingSquat?>"},]}';

				var obj = eval ("(" + startingstrength + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 3){
				foreach ($userTrackPress as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['pressmax']; endforeach;
				if ($userTrackPress == null){$squat = $initialSquat;}
				$squatFinal = ($squat +5); 
				$startingSquat = (floor($squatFinal/2.5))*2.5;

				$id = $current_user['id'];
				$date = date('Y-m-d');
				?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Day 3<small><a href="#"> How to Lift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $startingSquat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '3'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 4));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->button('Submit', array('class' => 'button'));
							?>
						</fieldset>
					</div>
				</div>
				<script>
				var startingstrength = '{"SquatWeek1":[' +
				'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = ($squat +2.5) * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = ($squat +2.5) * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"5","Sets":"1","squat3":"<?php $squatFinal = ($squat +2.5) * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"3","squat4":"<?php echo $startingSquat?>"},]}';

				var obj = eval ("(" + startingstrength + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 4){
					foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
					foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
					if ($userTrackSquat == null){$squat = $initialSquat;}
					$squatFinal = ($squat +5); 
					$startingSquat = (floor($squatFinal/2.5))*2.5;

					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row top-padding-form">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Day 4<small><a href="#"> How to Lift</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $startingSquat));
								echo $this->Form->hidden('reps', array('default' => '5'));
								echo $this->Form->hidden('sets', array('default' => '3'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 1));
								echo $this->Form->hidden('week', array('default' => 1));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
					<script>
					var startingstrength = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = ($squat +5) * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = ($squat +5) * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"5","Sets":"1","squat3":"<?php $squatFinal = ($squat +5) * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"3","squat4":"<?php echo $startingSquat?>"},]}';

					var obj = eval ("(" + startingstrength + ")");
					var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
					var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
					var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
					var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
					var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
					var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
					var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
					var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
					var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
					var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
					var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
					var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
					</script>
					<script>
					$('#Rep1').val(Rep1);
					$('#Set1').val(Set1);
					$('#Weight1').val(Weight1);
					$('#Rep2').val(Rep2);
					$('#Set2').val(Set2);
					$('#Weight2').val(Weight2);
					$('#Rep3').val(Rep3);
					$('#Set3').val(Set3);
					$('#Weight3').val(Weight3);
					$('#Rep4').val(Rep4);
					$('#Set4').val(Set4);
					$('#Weight4').val(Weight4);
					</script>
				<?php
				}
			}
		}
	//----------5/3/1----------//
	else if($plan == 2){
		if($lastWeek == 1){
			if($lastDay == 1){
				foreach ($userTrackBench as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['benchmax']; endforeach;
				if ($userTrackBench == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Bench Day <small><a href="#"> How to Bench</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 2));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
					<script>
					var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.65; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"5","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>"}]}';
					var obj = eval ("(" + plan531 + ")");
					var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
					var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
					var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
					var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
					var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
					var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
					var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
					var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
					var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
					var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
					var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
					var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
					var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
					var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
					var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
					var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
					var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
					var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
					</script>
					<script>
					$('#Rep1').val(Rep1);
					$('#Set1').val(Set1);
					$('#Weight1').val(Weight1);
					$('#Rep2').val(Rep2);
					$('#Set2').val(Set2);
					$('#Weight2').val(Weight2);
					$('#Rep3').val(Rep3);
					$('#Set3').val(Set3);
					$('#Weight3').val(Weight3);
					$('#Rep4').val(Rep4);
					$('#Set4').val(Set4);
					$('#Weight4').val(Weight4);
					$('#Rep5').val(Rep5);
					$('#Set5').val(Set5);
					$('#Weight5').val(Weight5);
					$('#Rep6').val(Rep6);
					$('#Set6').val(Set6);
					$('#Weight6').val(Weight6);
					</script>
					<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackDeadlift as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['deadliftmax']; endforeach;
				if ($userTrackDeadlift == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Press Day <small><a href="#"> How to Press</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 3));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
					<script>
					var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.65; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"5","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>"}]}';
					var obj = eval ("(" + plan531 + ")");
					var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
					var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
					var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
					var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
					var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
					var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
					var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
					var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
					var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
					var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
					var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
					var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
					var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
					var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
					var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
					var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
					var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
					var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
					</script>
					<script>
					$('#Rep1').val(Rep1);
					$('#Set1').val(Set1);
					$('#Weight1').val(Weight1);
					$('#Rep2').val(Rep2);
					$('#Set2').val(Set2);
					$('#Weight2').val(Weight2);
					$('#Rep3').val(Rep3);
					$('#Set3').val(Set3);
					$('#Weight3').val(Weight3);
					$('#Rep4').val(Rep4);
					$('#Set4').val(Set4);
					$('#Weight4').val(Weight4);
					$('#Rep5').val(Rep5);
					$('#Set5').val(Set5);
					$('#Weight5').val(Weight5);
					$('#Rep6').val(Rep6);
					$('#Set6').val(Set6);
					$('#Weight6').val(Weight6);
					</script>
			<?php
			}
			else if($lastDay == 3){
				foreach ($userTrackPress as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['pressmax']; endforeach;
				if ($userTrackPress == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Deadlift Day <small><a href="#"> How to Dealift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 4));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.65; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"5","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 4){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '3'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 1));
							echo $this->Form->hidden('week', array('default' => 2));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"3","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.7; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.8; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.9; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
		}
		else if($lastWeek == 2){
			if($lastDay == 1){
				foreach ($userTrackBench as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['benchmax']; endforeach;
				if ($userTrackBench == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Bench Day <small><a href="#"> How to Bench</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '3'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 2));
							echo $this->Form->hidden('week', array('default' => 2));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"3","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.7; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.8; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.9; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackDeadlift as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['deadliftmax']; endforeach;
				if ($userTrackDeadlift == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Press Day <small><a href="#"> How to Press</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '3'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 3));
							echo $this->Form->hidden('week', array('default' => 2));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"3","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.7; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.8; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.9; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 3){
				foreach ($userTrackPress as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['pressmax']; endforeach;
				if ($userTrackPress == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Deadlift Day <small><a href="#"> How to Dealift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '3'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 4));
							echo $this->Form->hidden('week', array('default' => 2));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"3","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.7; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.8; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.9; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 4){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '1'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 1));
							echo $this->Form->hidden('week', array('default' => 3));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.95; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
		}
		else if($lastWeek == 3){
			if($lastDay == 1){
				foreach ($userTrackBench as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['benchmax']; endforeach;
				if ($userTrackBench == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Bench Day <small><a href="#"> How to Bench</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '1'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 2));
							echo $this->Form->hidden('week', array('default' => 3));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.95; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackDeadlift as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['deadliftmax']; endforeach;
				if ($userTrackDeadlift == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Press Day <small><a href="#"> How to Press</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '1'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 3));
							echo $this->Form->hidden('week', array('default' => 3));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.95; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 3){
				foreach ($userTrackPress as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['pressmax']; endforeach;
				if ($userTrackPress == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Deadlift Day <small><a href="#"> How to Dealift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '1'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 4));
							echo $this->Form->hidden('week', array('default' => 3));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.95; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 4){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 1));
							echo $this->Form->hidden('week', array('default' => 4));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
		}
		else if($lastWeek == 4 || $lastWeek == null){
			if($lastDay == 1){
				foreach ($userTrackBench as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['benchmax']; endforeach;
				if ($userTrackBench == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Bench Day <small><a href="#"> How to Bench</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 2));
							echo $this->Form->hidden('week', array('default' => 4));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackDeadlift as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['deadliftmax']; endforeach;
				if ($userTrackDeadlift == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Press Day <small><a href="#"> How to Press</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 3));
							echo $this->Form->hidden('week', array('default' => 4));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 3){
				foreach ($userTrackPress as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['pressmax']; endforeach;
				if ($userTrackPress == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Deadlift Day <small><a href="#"> How to Dealift</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 4));
							echo $this->Form->hidden('week', array('default' => 4));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 4 || $lastDay == null){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
					
					$id = $current_user['id'];
					$date = date('Y-m-d');?>
				<div class="row top-padding-form">
					<div class="large-12 columns">
						<?php
						echo $this->Form->create('Performance');
						?>
						<fieldset>
							<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
								<div class="large-4 columns">
									<div class="row collapse">
										<div class="small-12 columns">
										<?php
										echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
							echo $this->Form->hidden('weight', array('default' => $squat));
							echo $this->Form->hidden('reps', array('default' => '5'));
							echo $this->Form->hidden('sets', array('default' => '1'));
							echo $this->Form->hidden('workout', array('default' => 1));
							echo $this->Form->hidden('day', array('default' => 1));
							echo $this->Form->hidden('week', array('default' => 1));
							echo $this->Form->hidden('user_id', array('default' => $id));
							echo $this->Form->hidden('datecompleted', array('default' => $date));
							echo $this->Form->end('Submit', array('id' => 'submit'));
							?>
							</fieldset>
						</div>
					</div>
				<script>
				var plan531 = '{"SquatWeek1":[' +
					'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
					'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.65; echo (floor($squatFinal/2.5))*2.5?>"},' +
					'{"Reps":"5","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>" },' +
					'{"Reps":"5","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>"}]}';
				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
				<?php
			}
		}
	}
	//----------Smolov----------//
	else if($plan == 3){
		if($lastWeek == 1 || $lastWeek == null){
			if($lastDay == null){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row top-padding-form">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $squat));
								echo $this->Form->hidden('reps', array('default' => '1'));
								echo $this->Form->hidden('sets', array('default' => '1'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 1));
								echo $this->Form->hidden('week', array('default' => 1));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
				<script>

				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"8","Sets":"3","squat4":"<?php $squatFinal = $squat * 0.65; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.70; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"2","Sets":"2","squat6":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>"}, ' +
				'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.80; echo (floor($squatFinal/2.5))*2.5?>"},]}';

				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				var Rep7 = document.getElementById("Rep7").innerHTML=obj.SquatWeek1[6].Reps;
				var Set7 = document.getElementById("Set7").innerHTML=obj.SquatWeek1[6].Sets;
				var Weight7 = document.getElementById("Weight7").innerHTML=obj.SquatWeek1[6].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 1){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $squat));
								echo $this->Form->hidden('reps', array('default' => '1'));
								echo $this->Form->hidden('sets', array('default' => '1'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 2));
								echo $this->Form->hidden('week', array('default' => 1));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
				<script>

				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"5","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"8","Sets":"3","squat4":"<?php $squatFinal = $squat * 0.65; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.70; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"2","Sets":"2","squat6":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>"}, ' +
				'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.80; echo (floor($squatFinal/2.5))*2.5?>"},]}';

				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				var Rep7 = document.getElementById("Rep7").innerHTML=obj.SquatWeek1[6].Reps;
				var Set7 = document.getElementById("Set7").innerHTML=obj.SquatWeek1[6].Sets;
				var Weight7 = document.getElementById("Weight7").innerHTML=obj.SquatWeek1[6].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
											?>
											</div>
										</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $squat));
								echo $this->Form->hidden('reps', array('default' => '1'));
								echo $this->Form->hidden('sets', array('default' => '1'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 1));
								echo $this->Form->hidden('week', array('default' => 2));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
				<script>

				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"4","squat4":"<?php $squatFinal = $squat * 0.70; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"3","Sets":"1","squat5":"<?php $squatFinal = $squat * 0.75; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"2","Sets":"2","squat6":"<?php $squatFinal = $squat * 0.80; echo (floor($squatFinal/2.5))*2.5?>"}, ' +
				'{"Reps":"1","Sets":"1","squat6":"<?php $squatFinal = $squat * 0.90; echo (floor($squatFinal/2.5))*2.5?>"},]}';

				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				var Rep7 = document.getElementById("Rep7").innerHTML=obj.SquatWeek1[6].Reps;
				var Set7 = document.getElementById("Set7").innerHTML=obj.SquatWeek1[6].Sets;
				var Weight7 = document.getElementById("Weight7").innerHTML=obj.SquatWeek1[6].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
		}
		else if($lastWeek == 2){
			if($lastDay == 1){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row top-padding-form">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $squat));
								echo $this->Form->hidden('reps', array('default' => '1'));
								echo $this->Form->hidden('sets', array('default' => '1'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 2));
								echo $this->Form->hidden('week', array('default' => 2));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
				<script>

				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.80; echo (floor($squatFinal/2.5))*2.5?>"},]}';

				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				var Rep7 = document.getElementById("Rep7").innerHTML=obj.SquatWeek1[6].Reps;
				var Set7 = document.getElementById("Set7").innerHTML=obj.SquatWeek1[6].Sets;
				var Weight7 = document.getElementById("Weight7").innerHTML=obj.SquatWeek1[6].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 2){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row top-padding-form">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $squat));
								echo $this->Form->hidden('reps', array('default' => '1'));
								echo $this->Form->hidden('sets', array('default' => '1'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 1));
								echo $this->Form->hidden('week', array('default' => 2));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
				<script>

				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.825; echo (floor($squatFinal/2.5))*2.5?>"},]}';

				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				var Rep7 = document.getElementById("Rep7").innerHTML=obj.SquatWeek1[6].Reps;
				var Set7 = document.getElementById("Set7").innerHTML=obj.SquatWeek1[6].Sets;
				var Weight7 = document.getElementById("Weight7").innerHTML=obj.SquatWeek1[6].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
			else if($lastDay == 3){
				foreach ($userTrackSquat as $uTS): $squat = $uTS['Performance']['weight']; endforeach;
				foreach ($trackIndividual as $tI): $initialSquat = $tI['User']['squatmax']; endforeach;
				if ($userTrackSquat == null){$squat = $initialSquat;}
				
					$id = $current_user['id'];
					$date = date('Y-m-d');
					?>
					<div class="row top-padding-form">
						<div class="large-12 columns">
							<?php
							echo $this->Form->create('Performance');
							?>
							<fieldset>
								<legend>Squat Day <small><a href="#"> How to Squat</a></small></legend>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set1','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set2','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set3','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set4','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set5','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('weight', array('id' => 'Weight6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('reps', array('id' => 'Rep6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
									<div class="large-4 columns">
										<div class="row collapse">
											<div class="small-12 columns">
											<?php
											echo $this->Form->input('sets', array('id' => 'Set6','type' => 'text'));
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
								echo $this->Form->hidden('weight', array('default' => $squat));
								echo $this->Form->hidden('reps', array('default' => '1'));
								echo $this->Form->hidden('sets', array('default' => '1'));
								echo $this->Form->hidden('workout', array('default' => 1));
								echo $this->Form->hidden('day', array('default' => 1));
								echo $this->Form->hidden('week', array('default' => 2));
								echo $this->Form->hidden('user_id', array('default' => $id));
								echo $this->Form->hidden('datecompleted', array('default' => $date));
								echo $this->Form->button('Submit', array('class' => 'button'));
								?>
							</fieldset>
						</div>
					</div>
				<script>

				var plan531 = '{"SquatWeek1":[' +
				'{"Reps":"","Sets":"1","squat1":"<?php $squatFinal = $squat * 0.4; echo (floor($squatFinal/2.5))*2.5?>"},' +
				'{"Reps":"5","Sets":"1","squat2":"<?php $squatFinal = $squat * 0.5; echo (floor($squatFinal/2.5))*2.5?>" },' +
				'{"Reps":"3","Sets":"1","squat3":"<?php $squatFinal = $squat * 0.6; echo (floor($squatFinal/2.5))*2.5?>"}, '+
				'{"Reps":"5","Sets":"1","squat4":"<?php $squatFinal = $squat * 0.85; echo (floor($squatFinal/2.5))*2.5?>"},]}';

				var obj = eval ("(" + plan531 + ")");
				var Rep1 = document.getElementById("Rep1").innerHTML=obj.SquatWeek1[0].Reps;
				var Set1 = document.getElementById("Set1").innerHTML=obj.SquatWeek1[0].Sets;
				var Weight1 = document.getElementById("Weight1").innerHTML=obj.SquatWeek1[0].squat1;
				var Rep2 = document.getElementById("Rep2").innerHTML=obj.SquatWeek1[1].Reps;
				var Set2 = document.getElementById("Set2").innerHTML=obj.SquatWeek1[1].Sets;
				var Weight2 = document.getElementById("Weight2").innerHTML=obj.SquatWeek1[1].squat2;
				var Rep3 = document.getElementById("Rep3").innerHTML=obj.SquatWeek1[2].Reps;
				var Set3 = document.getElementById("Set3").innerHTML=obj.SquatWeek1[2].Sets;
				var Weight3 = document.getElementById("Weight3").innerHTML=obj.SquatWeek1[2].squat3;
				var Rep4 = document.getElementById("Rep4").innerHTML=obj.SquatWeek1[3].Reps;
				var Set4 = document.getElementById("Set4").innerHTML=obj.SquatWeek1[3].Sets;
				var Weight4 = document.getElementById("Weight4").innerHTML=obj.SquatWeek1[3].squat4;
				var Rep5 = document.getElementById("Rep5").innerHTML=obj.SquatWeek1[4].Reps;
				var Set5 = document.getElementById("Set5").innerHTML=obj.SquatWeek1[4].Sets;
				var Weight5 = document.getElementById("Weight5").innerHTML=obj.SquatWeek1[4].squat5;
				var Rep6 = document.getElementById("Rep6").innerHTML=obj.SquatWeek1[5].Reps;
				var Set6 = document.getElementById("Set6").innerHTML=obj.SquatWeek1[5].Sets;
				var Weight6 = document.getElementById("Weight6").innerHTML=obj.SquatWeek1[5].squat6;
				var Rep7 = document.getElementById("Rep7").innerHTML=obj.SquatWeek1[6].Reps;
				var Set7 = document.getElementById("Set7").innerHTML=obj.SquatWeek1[6].Sets;
				var Weight7 = document.getElementById("Weight7").innerHTML=obj.SquatWeek1[6].squat6;
				</script>
				<script>
				$('#Rep1').val(Rep1);
				$('#Set1').val(Set1);
				$('#Weight1').val(Weight1);
				$('#Rep2').val(Rep2);
				$('#Set2').val(Set2);
				$('#Weight2').val(Weight2);
				$('#Rep3').val(Rep3);
				$('#Set3').val(Set3);
				$('#Weight3').val(Weight3);
				$('#Rep4').val(Rep4);
				$('#Set4').val(Set4);
				$('#Weight4').val(Weight4);
				$('#Rep5').val(Rep5);
				$('#Set5').val(Set5);
				$('#Weight5').val(Weight5);
				$('#Rep6').val(Rep6);
				$('#Set6').val(Set6);
				$('#Weight6').val(Weight6);
				</script>
			<?php
			}
		}
	}
?>
