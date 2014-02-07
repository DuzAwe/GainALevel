<section class="main">
<div class="row">
 	<!-- Header Content -->
	<div class="large-12 columns">
        	<div class="row">
          		<div class="large-6 columns">
           			<h3 class="show-for-small">Header<hr/></h3>
				<hr>
            			<div class="panel">
       		 			<h2>Database Echoing Practice</h2>
					<table>
						<tr>
							<th>Id</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Goal</th>
							<th>Diet Plan</th>
							<th>Workout Plan</th>
						</tr>
						<?php foreach ($users as $user): ?>
						<tr>
							<td>
								<?php 
									echo $user['User']['id']; 
								?>
							</td>
							<td>
								<?php 
									echo $user['User']['firstname']; 
								?>
							</td>
							<td>
								<?php 
									echo $user['User']['lastname']; 
								?>
							</td>
							<td>
								<?php
									echo $user['Outcome']['outcomename']; 
								?>
							</td>
							<td>
								<?php
									echo $user['Dietplan']['dietname']; 
								?>
							</td>
							<td>
								<?php
									echo $user['Plan']['planname']; 
								?>
							</td>
						</tr>
						<?php endforeach;?>
					</table>	  	             
	    			</div>

				<h3 class="show-for-small">Header<hr/></h3>
				<hr>

            			<div class="panel">
         				<h2>Its Happening</h2>
              				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
            			</div>

				<!-- Thumbnails -->
				<hr>

				<div class="small-6 columns">
                           		 <img src=
                           		 "http://placehold.it/500x500&amp;text=Thumbnail">

                           		 <div class="panel">
                            		    <p>Description</p>
                           		 </div>
                       		</div>

                       		<div class="small-6 columns">
                          		  <img src=
                          		  "http://placehold.it/500x500&amp;text=Thumbnail">

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

                            	<div id="chart_div" style=
                            		"width: 500px; height: 500px;"></div>
                        	</div>
                    	</div>
		</div>  
	</div>
      	<!-- End Header Content -->
</div>
</section>
<!-- End Modal -->