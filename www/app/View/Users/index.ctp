<section class="main">
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-6 columns">
					<h3 class="show-for-small">Header</h3>
					
					<hr>

					<h3 class="show-for-small"></h3>

					<div class="panel">
						<?php if ($logged_in): ?>
							<h3>Hello <?php echo $username; ?></h3>
							<h4>Today's workout is:</h4>
							<table cellpadding="0" cellspacing="0">
								<tr>
									<th>Activity</th>
									<th>Weight</th>
									<th>Sets</th>
									<th>Reps</th>
								</tr>
								<tr>
									<td>Squat</td>
									<td>110kg</td>
									<td>1</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Squat</td>
									<td>125kg</td>
									<td>1</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Squat</td>
									<td>140kg</td>
									<td>1</td>
									<td>1</td>
								</tr>
							</table>
							<?php foreach ($userCal as $uC):?><?php $eaten = $uC['Calories']['calories']; ?><?php endforeach ?>
							<?php foreach ($users as $uC):?><?php $caloriesNeeded = $uC['User']['calories'];?><?php endforeach ?>
							<?php if ($eaten = null){
								$eaten = 0;
							}?>
							<h4>You need <?php echo $caloriesNeeded; ?> more calories</h4>
						<?php else: ?>
							<h3>Hello Arnold</h3>
							<h4>Today's workout is:</h4>
							<table cellpadding="0" cellspacing="0">
								<tr>
									<th>Activity</th>
									<th>Weight</th>
									<th>Sets</th>
									<th>Reps</th>
								</tr>
								<tr>
									<td>Squat</td>
									<td>240kg</td>
									<td>3</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Squat</td>
									<td>260kg</td>
									<td>3</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Squat</td>
									<td>280kg</td>
									<td>3</td>
									<td>5</td>
								</tr>
							</table>
							<h4>You need 3500 more calories</h4>
						<?php endif; ?>
					</div>

					<h3 class="show-for-small">Header</h3>
					
					<hr>

					<h3 class="show-for-small"></h3>

					<div class="panel">
						<h2>Its Happening</h2>

						<p>Bacon ipsum dolor sit amet nulla ham qui sint
						exercitation eiusmod commodo, chuck duis velit.
						Aute in reprehenderit, dolore aliqua non est magna
						in labore pig pork biltong. Eiusmod swine spare
						ribs reprehenderit culpa. Boudin aliqua adipisicing
						rump corned beef.</p>
					</div>
				
				</div>

				<div class="large-6 columns">
					<h3 class="show-for-small">Header</h3>
					
					<hr>

					<h3 class="show-for-small"></h3>

					<div class="panel">
						<div id='calendar'></div>
					</div>

					<h3 class="show-for-small">Header</h3>
					
					<hr>

					<h3 class="show-for-small"></h3>

					<div class="panel">
						<h2>Your Performance</h2>

						<div id="chart_div" style="width: 500px; height: 500px;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
