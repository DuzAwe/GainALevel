<!-- Main Content Section -->
	<?php foreach ($oneWeekPresss as $oneWeekPress): 
		echo $oneWeekPress['Performance']['weight'];
	?>
	<br/>
	<?php
		echo $oneWeekPress['Performance']['workoutname'];
	?>
	<br/>
	<?php
		echo $oneWeekPress['User']['id'];
	?>
	<br/>
	<?php
		echo $oneWeekPress['Performance']['datecompleted'];
	?>
	<br/>
	<?php
	endforeach; ?>
	<?php foreach ($twoWeekPresss as $twoWeekPress): 
		echo $twoWeekPress['Performance']['weight'];
	?>
	<br/>
	<?php
		echo $twoWeekPress['Performance']['workoutname'];
	?>
	<br/>
	<?php
		echo $twoWeekPress['User']['id'];
	?>
	<br/>
	<?php
		echo $twoWeekPress['Performance']['datecompleted'];
	?>
	<br/>
	<?php
	endforeach; ?>
	<?php foreach ($threeWeekPresss as $threeWeekPress): 
		echo $threeWeekPress['Performance']['weight'];
	?>
	<br/>
	<?php
		echo $threeWeekPress['Performance']['workoutname'];
	?>
	<br/>
	<?php
		echo $threeWeekPress['User']['id'];
	?>
	<br/>
	<?php
		echo $threeWeekPress['Performance']['datecompleted'];
	?>
	<br/>
	<?php
	endforeach; ?>
	<?php foreach ($fourWeekPresss as $fourWeekPress): 
		echo $fourWeekPress['Performance']['weight'];
	?>
	<br/>
	<?php
		echo $fourWeekPress['Performance']['workoutname'];
	?>
	<br/>
	<?php
		echo $fourWeekPress['User']['id'];
	?>
	<br/>
	<?php
		echo $fourWeekPress['Performance']['datecompleted'];
	?>
	<br/>
	<?php
	endforeach; ?>
  <script type="text/javascript">
		  google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Date', 'Your Lift', 'Expected Lift'],
			  ['<?php foreach ($oneWeekPresss as $oneWeekPress): echo $oneWeekPress['Performance']['datecompleted']?>',<?php  echo $oneWeekPress['Performance']['weight']; endforeach;  ?>,      1000],
			  ['<?php foreach ($twoWeekPresss as $twoWeekPress): echo $twoWeekPress['Performance']['datecompleted']?>',<?php  echo $twoWeekPress['Performance']['weight']; endforeach;  ?>,      1260],
			  ['<?php foreach ($threeWeekPresss as $threeWeekPress): echo $threeWeekPress['Performance']['datecompleted']?>',<?php  echo $threeWeekPress['Performance']['weight']; endforeach;  ?>,       1020],
			  ['<?php foreach ($fourWeekPresss as $fourWeekPress): echo $fourWeekPress['Performance']['datecompleted']?>',<?php  echo $fourWeekPress['Performance']['weight']; endforeach;  ?>,      1140]
			]);

			var options = {
			  title: 'Your Performance',
			  chartArea:{left:50,top:50,width:"75%",height:"75%"},
			  legend:{position: 'top'}
			};

			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		  }
		 </script>
		 <script>
		 google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Sleep', 'Hours per Day'],
			  ['Hours slept',     5],
			  ['Sleep Missed',     3]
			]);

			var options = {
			  title: 'Sleep',
			  pieHole: 0.4,
			  pieSliceText: 'value',
			  tooltip: { trigger: 'none' },
			  chartArea:{left:50,top:50,width:"70%",height:"75%"},
			  legend:{position: 'top'}
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		  }
		  </script>
			<script type="text/javascript">
		  google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Calories', 'Calories'],
			  ['Calories Eaten',     1500],
			  ['Calories To Be Eaten',     500],
			]);

			var options = {
			  title: 'Calories',
			  pieHole: 0.4,
			  pieSliceText: 'value',
			  tooltip: { trigger: 'none' },
			  chartArea:{left:50,top:50,width:"70%",height:"75%"},
			  legend:{position: 'top'}
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
			chart.draw(data, options);
		  }
		</script>
		<script type="text/javascript">
		  google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Macros', 'Grams'],
			  ['Carbs',     500],
			  ['Protein',     150],
			  ['Fat', 600]
			]);

			var options = {
			  title: 'Macros',
			  pieHole: 0.4,
			  pieSliceText: 'value',
			  tooltip: { trigger: 'none' },
			  chartArea:{left:50,top:50,width:"70%",height:"75%"},
			  legend:{position: 'top'}
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
			chart.draw(data, options);
		  }
		</script>
		
		<!-- End Google Chart -->

  <div class="row">
  
    <div class="large-8 columns">
      <div id="chart_div" style="width: 800px; height: 850px;"></div>
    </div>
    
    <div class="large-4 columns">
      <div id="donutchart" style="width: 300px; height: 230px;"></div>
      <div id="donutchart2" style="width: 300px; height: 230px;"></div>
      <div id="donutchart3" style="width: 300px; height: 230px;"></div>
    </div>
  </div>
  
  <!-- Call to Action Panel -->
  <div class="row">
  <h5 class="subheader">Current PRs</h5>
    <table class=
    "pr-wall programTable table table-bordered table-hover table-condensed">
        <thead>
            <tr>
                <th>1 rep max</th>

                <th>2 rep max</th>

                <th>3 rep max</th>

                <th>5 rep max</th>

                <th>8 rep max</th>

                <th>10 rep max</th>

                <th>20 rep max</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>-</td>

                <td>-</td>

                <td>40 kg</td>

                <td>35 kg</td>

                <td>-</td>

                <td>25 kg</td>

                <td>-</td>
            </tr>
        </tbody>
    </table>
      <div class="panel">
        <h4>Feedback/Advice</h4>
            
        <div class="row">
          <div class="large-9 columns">
            <p>Based on what you have logged it appears you aren't eating enough and have only gotten the bare minimum sleep requirement. Your having trouble sleeping click here to see our <a href="#">SLEEP BETTER FAQ</a>. If your having trouble eating enough click here for our <a href="#">EATING FAQ</a>.</p>
          </div>
          
         </div>
         
      </div>
      
 <!-- Calcu Chart -->
    <table>
    <thead>
            <tr>
                <th>Reps</th>

                <th>Tested PR</th>

                <th>Brzycki</th>

                <th>Baechle</th>

                <th>Dos Remedios</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>
            </tr>

            <tr>
                <td>2</td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>
            </tr>

            <tr>
                <td>3</td>

                <td>40</td>

                <td></td>

                <td></td>

                <td></td>
            </tr>

            <tr>
                <td>5</td>

                <td>35</td>

                <td></td>

                <td></td>

                <td></td>
            </tr>

            <tr>
                <td>8</td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>
            </tr>

            <tr>
                <td>10</td>

                <td>25</td>

                <td></td>

                <td></td>

                <td></td>
            </tr>

            <tr>
                <td colspan="5">
                    <div id="one-rep-max-calc-chart"></div>
                </td>
            </tr>
        </tbody>
    </table>
<!--Calcu Chart End-->
      
    </div>
  </div>
  
  
  <!-- Footer -->

        <div class="zurb-footer-bottom">
            <div class="row">
                <div class="large-4 push-8 columns">
                    <ul class="home-social">
                        <li><a class="twitter" href="#"></a></li>

                        <li><a class="facebook" href="#"></a></li>

                        <li><a class="mail" href="#"></a></li>
                    </ul>
                </div>

                <div class="large-8 pull-4 columns">
                    <ul class="zurb-links">
                        <li><a href="#">About</a></li>

                        <li><a href="#">Blog</a></li>

                        <li><a href="#">News <span class=
                        "show-for-medium-up">&amp; Events</span></a></li>

                        <li><a href="#">Contact</a></li>

                        <li><a href="#">Sitemap</a></li>
                    </ul>

                    <p class="copyright">© 2013–2014 DropDeadMedia, All rights
                    reserved.</p>
                </div>
            </div>
        </div><!-- End Footer -->
