
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Foundation 4</title>

  <?php

	echo $this->Html->script('fullcalendar/fullcalendar.min.js');
	echo $this->Html->script('fullcalendar/Cal.js');

	echo $this->fetch('script');
  ?>

</head>
<body>
 
      <!-- Header Content -->
      <section class="main">
 <div class="row">
 
    <div class="large-12 columns">
    
        <div class="row">
 
          <div class="large-6 columns">
 
            <h3 class="show-for-small">Header<hr/></h3>
 
            <div class="panel">
            
       		 <h2>Its Happening</h2>
         
                 
		<?php echo $this->Html->link('Login', array('controller' => 'Users', 'action' => 'login')); ?>

		<table>
			<tr>
				<th>Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Title of best book</th>
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
						echo $user['Post']['title']; 
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
 
        </div>
 
      <!-- End Thumbnails -->
 
    </div>
  </div>
 
  <!-- Footer -->
      <div class="zurb-footer-bottom">
      <div class="row">
        <div class="large-4 push-8 columns">
          <ul class="home-social">
              <li><a href="#" class="twitter"></a></li>
              <li><a href="#" class="facebook"></a></li>
              <li><a href="#" class="mail"></a></li>
            </ul>
         </div>
         <div class="large-8 pull-4 columns">
            <ul class="zurb-links">
              <li><a href="#">About</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">News<span class="show-for-medium-up"> &amp; Events</span></a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Sitemap</a></li>
           </ul>
           <p class="copyright">© 2013–2014 DropDeadMedia, All rights reserved.</p>
        </div>          
      </div>
    </div>
 <!-- End Footer -->
 
  </section>

	<script>
		$(document).foundation();
	</script>
  
  <script>
   var chart1;
chart1 = new cfx.Chart();

chart1.getLegendBox().setVisible(false);
var axis1 = chart1.getAxisY();
var axis2 = chart1.getAxisY2();
var axis3 = new cfx.AxisY();
var axisX2 = new cfx.AxisX();
chart1.getAxesY().add(axis3);
chart1.getAxesX().add(axisX2);

axis1.setTextColor("#1D2793");
axis1.setForceZero(false);
axis1.getTitle().setText("Bike Sales");
axis1.getLabelsFormat().setFormat(cfx.AxisFormat.Currency);

axis2.setTextColor("#9F1000");
axis2.setForceZero(false);
axis2.setVisible(true);
axis2.setSeparation(15);
axis2.getTitle().setText("Part Sales");
axis2.getLabelsFormat().setFormat(cfx.AxisFormat.Currency);
axis2.getGrids().getMajor().setVisible(false);
axis3.setTextColor("#14650C");
axis3.setVisible(true);
axis3.setForceZero(false);
axis3.setPosition(cfx.AxisPosition.Far);
axis3.getTitle().setText("Clothing Sales");
axis3.getLabelsFormat().setFormat(cfx.AxisFormat.Currency);
axis3.getGrids().getMajor().setVisible(false);

axisX2.setVisible(true);
axisX2.setMin(0);
axisX2.setMax(12);
axisX2.setStep(3);
axisX2.getLabels().setItem(3, "Q1");
axisX2.getLabels().setItem(6, "Q2");
axisX2.getLabels().setItem(9, "Q3");
axisX2.getLabels().setItem(12, "Q4");
axisX2.getGrids().setInterlaced(false);
axisX2.getGrids().getMajor().setVisible(false);
axisX2.setPosition(cfx.AxisPosition.Near);
axisX2.setStyle(cfx.AxisStyles.Centered);

var series1 = chart1.getSeries().getItem(0);
var series2 = chart1.getSeries().getItem(1);
var series3 = chart1.getSeries().getItem(2);

series2.setAxisY(axis2);
series3.setAxisY(axis3);

series1.setColor("#1D2793");
series2.setColor("#9F1000");
series3.setColor("#14650C");

chart1.getAllSeries().setMarkerShape(cfx.MarkerShape.None);
chart1.getAllSeries().getLine().setWidth("4");

var items = [{
    "Month": "Jan",
    "Bikes": 88123,
    "Parts": 18000,
    "Clothing": 1300
}, {
    "Month": "Feb",
    "Bikes": 86040,
    "Parts": 17600,
    "Clothing": 900
}, {
    "Month": "Mar",
    "Bikes": 85123,
    "Parts": 17400,
    "Clothing": 970
}, {
    "Month": "Apr",
    "Bikes": 84200,
    "Parts": 17500,
    "Clothing": 1010
}, {
    "Month": "May",
    "Bikes": 86600,
    "Parts": 18100,
    "Clothing": 1070
}, {
    "Month": "Jun",
    "Bikes": 87900,
    "Parts": 19200,
    "Clothing": 1180
}, {
    "Month": "Jul",
    "Bikes": 85000,
    "Parts": 19100,
    "Clothing": 1240
}, {
    "Month": "Aug",
    "Bikes": 83254,
    "Parts": 18300,
    "Clothing": 1020
}, {
    "Month": "Sep",
    "Bikes": 82132,
    "Parts": 17900,
    "Clothing": 930
}, {
    "Month": "Oct",
    "Bikes": 85130,
    "Parts": 18570,
    "Clothing": 860
}, {
    "Month": "Nov",
    "Bikes": 89124,
    "Parts": 19760,
    "Clothing": 990
}, {
    "Month": "Dec",
    "Bikes": 93180,
    "Parts": 20400,
    "Clothing": 1120
}];

chart1.setDataSource(items);

var chartDiv = document.getElementById('ChartDiv1');
chart1.create(chartDiv);

  </script>
   
  </body>
  <!-- Modal -->
  <div id="myModal" class="reveal-modal">
  <?php echo $this->Form->create('User', array('data-abide')); ?>
			<legend><?php echo __('Add User'); ?></legend>
			</br>
			<?php 
				echo $this->Form->input('firstname');
				echo $this->Form->input('lastname');
				echo $this->Form->input('email');
				echo $this->Form->input('password');
				echo $this->Form->input('birthday', array(
					'dateFormat'=>'DMY', 
					'minYear' => date('Y')-80, 
					'maxYear' => date('Y'), 
					'empty' => array('--'),
					'label' => 'Date of Birth'));
				echo $this->Form->input('height');
				echo $this->Form->input('weight');
			?>
		<?php echo $this->Form->end(__('Submit')); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- End Modal -->

</html>
