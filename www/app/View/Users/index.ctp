<section class="main">
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-6 columns">
					<h3 class="show-for-small">Header</h3>
					
					<hr>

					<h3 class="show-for-small"></h3>

					<div class="panel">
						<h2>Database Echoing Practice</h2>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<th>id</th>
								<th>name</th>
								<th>username</th>
								<th>email</th>
								<th>Plan</th>
								<th>Outcome</th>
								<th class="actions">Actions</th>
							</tr>
							<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo $user['User']['id']; ?>&nbsp;</td>
								<td><?php echo $user['User']['name']; ?>&nbsp;</td>
								<td><?php echo $user['User']['username']; ?>&nbsp;</td>
								<td><?php echo $user['User']['email']; ?>&nbsp;</td>
								<td><?php echo $user['Dietplan']['dietname']; ?>&nbsp;</td>
								<td><?php echo $user['Outcome']['outcomename']; ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>
									<?php if ($current_user['id'] == $user['User']['id']): ?>
										<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
										<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
						<h3>Actions</h3>
						<ul>
							<li><?php echo $this->Html->link('New User', array('action' => 'add')); ?></li>
						</ul>
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
					
				<!-- Thumbnails -->

					<div class="small-6 columns">
						<img src="http://placehold.it/500x500&amp;text=Thumbnail">

						<div class="panel">
							<p>Description</p>
						</div>
					</div>

					<div class="small-6 columns">
						<img src="http://placehold.it/500x500&amp;text=Thumbnail">

						<div class="panel">
							<p>Description</p>
						</div>
					</div>
				
				<!-- End Thumbnails -->
				
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
