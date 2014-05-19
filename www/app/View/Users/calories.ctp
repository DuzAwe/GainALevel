<?php
	$id = $current_user['id'];
	$date = date('Y-m-d');
?>
	<div class="row top-padding-form">
		<div class="large-12 columns">
			<?php
				echo $this->Form->create('Calories');
			?>
			<fieldset>
				<legend>Calories</legend>
				<div class="row">
					<div class="large-4 columns">
						<div class="row collapse">
							<div class="small-12 columns">
							<?php
								echo $this->Form->input('calories');
							?>
							</div>
						</div>
					</div>
				</div>
				<?php
					echo $this->Form->hidden('user_id', array('default' => $id, 'type' => 'text'));
					echo $this->Form->hidden('datecompleted', array('default' => $date));
					echo $this->Form->button('Submit', array('class' => 'button'));
				?>
			</fieldset>
		</div>
	</div>
