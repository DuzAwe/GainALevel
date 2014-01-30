<section class="main">
<div class="row">
 	<!-- Header Content -->
	<div class="large-12 columns">
        	<div class="row">
          		<div class="large-6 columns">
           			<h3 class="show-for-small">Header<hr/></h3>
            			<div class="panel">
       		 			<h2>Database Echoing Practice</h2>
					<table>
						<tr>
							<th>Id</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Plan</th>
							<th>Title of best book</th>
							<th>Goal</th>
							<th>Diet Plan</th>
						</tr>
						<?php foreach ($users as $bbp): ?>
						<tr>
							<td>
								<?php 
									echo $bbp['User']['id']; 
								?>
							</td>
							<td>
								<?php 
									echo $bbp['User']['firstname']; 
								?>
							</td>
							<td>
								<?php 
									echo $bbp['User']['lastname']; 
								?>
							</td>
							<td>
								<?php
									echo $bbp['Bodybuildingplan']['bodybuildingname']; 
								?>
							</td>
							<td>
								<?php
									echo $bbp['Post']['title']; 
								?>
							</td>
							<td>
								<?php
									echo $bbp['Outcome']['outcomename']; 
								?>
							</td>
							<td>
								<?php
									echo $bbp['Dietplan']['dietname']; 
								?>
							</td>
						</tr>
						<?php endforeach;?>
					</table>	  	             
	    			</div>
				<h3 class="show-for-small">Header<hr/></h3>
            			<div class="panel">
         				<h2>Its Happening</h2>
              				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
            			</div>
          		</div>
			<div class="large-6 columns">
	            		<h3 class="show-for-small">Header<hr/></h3>
	            		<div class="panel">
	              			<div id='calendar'></div>
				</div>	            
				<h3 class="show-for-small">Header<hr/></h3>
	            		<div class="panel">
	        			<h2>Its Happening</h2>
	              			<div id="ChartDiv1" style="width:550px;height:400px;display:inline-block"></div>  
	          		</div>
          		</div>
		</div>  
	</div>
      	<!-- End Header Content -->
	<!-- Thumbnails -->	 
	<div class="row"> 
		<div class="large-12 show-for-small columns">
		<h3>Header</h3><hr>
	</div>		 
	<div class="large-3 small-6 columns">
		<img src="http://placehold.it/500x500&text=Thumbnail">
		<div class="panel">
			 <p>Description</p>
		</div>
	</div>	 
	<div class="large-3 small-6 columns">
		<img src="http://placehold.it/500x500&text=Thumbnail">
		<div class="panel">
			<p>Description</p>
		</div>
	</div>		 
	<div class="large-3 small-6 columns">
		<img src="http://placehold.it/500x500&text=Thumbnail">
		<div class="panel">
			<p>Description</p>
		</div>
	</div>	 
	<div class="large-3 small-6 columns">
		<img src="http://placehold.it/500x500&text=Thumbnail">
		<div class="panel">
			<p>Description</p>
		</div>
        </div>
 	<!-- End Thumbnails -->
</div>
</section>
<!-- Modal -->
<div id="myModal" class="reveal-modal">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Add User'); ?></legend>
		</br>
		<?php
			/*---Firstname--*/
			echo $this->Form->input('firstname');


			/*---Lastname--*/
			echo $this->Form->input('lastname');


			/*---eMail--*/
			echo $this->Form->input('email');


			/*---Password--*/
			echo $this->Form->input('password');


			/*---Date of Birth--*/
			echo $this->Form->input('birthday', array(
				'dateFormat'=>'DMY', 
				'minYear' => date('Y')-80, 
				'maxYear' => date('Y'), 
				'empty' => array('--'),
				'label' => 'Date of Birth'));


			/*---Height - cm--*/
			echo $this->Form->input('height', array(
				'label' => 'Centimters'));


			/*---Height - Selector--*/
			echo $this->Form->input('field', array(
				'label' => false,
				'options' => array('Cm', 'In'),
				'default' => 'Cm'));

			?> </br> <?php


			/*---Weight - kg--*/
			echo $this->Form->input('weight', array(
				'label' => 'Kilograms'));


			/*---Weight - Selector--*/
			echo $this->Form->input('field', array(
				'label' => false,
				'options' => array('Kg', 'Lbs'),
				'default' => 'kg'));

			?>
		</br>
	<?php echo $this->Form->end(__('Submit')); ?>
  	<a class="close-reveal-modal">&#215;</a>
</div>
<!-- End Modal -->