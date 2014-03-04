<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Bench Level</th>
		<th>Press Level</th>
		<th>Deadlift Level</th>
		<th>Squat Level</th>
		<th>Overall Level</th>
	</tr>
	<tr>
		<td><?php foreach ($userPress as $press): ?>		<?php echo $press	['User']['name']; ?>&nbsp;<?php endforeach; ?></td>
		<td><?php foreach ($userBench as $bench): ?>		<?php echo $bench	['Strengthtable']['level']; ?>&nbsp;<?php endforeach; ?></td>
		<td><?php foreach ($userPress as $press): ?>		<?php echo $press	['Strengthtable']['level']; ?>&nbsp;<?php endforeach; ?></td>
		<td><?php foreach ($userDeadlift as $deadlift): ?>	<?php echo $deadlift['Strengthtable']['level']; ?>&nbsp;<?php endforeach; ?></td>
		<td><?php foreach ($userSquat as $squat): ?>		<?php echo $squat	['Strengthtable']['level']; ?>&nbsp;<?php endforeach; ?></td>
		<td><?php //$userLevel = (($userPress + $userBench + $userDeadlift + $userSquat)/4); echo $userLevel?>&nbsp;</td>
	</tr>
</table>
