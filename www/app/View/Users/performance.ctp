<!-- Main Content Section -->
  <script type="text/javascript">
		  google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Date', 'Your Lift', 'Expected Lift'],
			  ['<?php foreach ($oneWeekPress as $oWPress): echo $oWPress['Performance']['datecompleted']?>',<?php  echo $oWPress['Performance']['weight']; endforeach;  ?>,      1000],
			  ['<?php foreach ($twoWeekPress as $tWPress): echo $tWPress['Performance']['datecompleted']?>',<?php  echo $tWPress['Performance']['weight']; endforeach;  ?>,      1260],
			  ['<?php foreach ($threeWeekPress as $thWPress): echo $thWPress['Performance']['datecompleted']?>',<?php  echo $thWPress['Performance']['weight']; endforeach;  ?>,       1020],
			  ['<?php foreach ($fourWeekPress as $fWPress): echo $fWPress['Performance']['datecompleted']?>',<?php  echo $fWPress['Performance']['weight']; endforeach;  ?>,      1140]
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
		
			 <?php foreach ($userSleep as $uS):?><?php $hours = $uS['Sleep']['hours'];?><?php endforeach ?>
			 <?php 
			
			 $missed = 8 - $hours;
			
				if ($missed <= 0){
					
					$missed = 0;
				}
			 ?>
			  <script>
		 google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Sleep', 'Hours per Day'],
			  ['Hours slept',     <?php echo $hours  ?>],
			  ['Sleep Missed',     <?php echo $missed ?>]
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
			<?php foreach ($userCal as $uC):?><?php $eaten = $uC['Calories']['calories']; $caloriesNeeded = $uC['User']['calories'];?><?php endforeach ?>
			<?php $needToEat = $caloriesNeeded - $eaten;
				if ($needToEat <= 0){
					$needToEat == 0;
				}
			 ?>
		  google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Calories', 'Calories'],
			  ['Calories Eaten',     <?php echo $eaten ?>],
			  ['Calories To Be Eaten',     <?php echo $needToEat ?>],
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
                <th>Overhead Press</th>

                <th>Bench Press</th>

                <th>Deadlift</th>

                <th>Squat</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>-</td>

                <td>-</td>

                <td>40 kg</td>

                <td>35 kg</td>
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
