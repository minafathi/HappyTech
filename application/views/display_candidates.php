<html>
<head>
	<title>Pending Reviews</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
	<tr style="background:#CCC">
		<th>Sr No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Education</th>
		<th>Skills</th>
		<th>Experience</th>
		<th>Applied For</th>
		<th>Date of Applied</th>
<!--		<th>Delete</th>-->
<!--		<th>Update</th>-->
	</tr>
	<?php
	$i=1;
	foreach($data as $row)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row->first_name."</td>";
		echo "<td>".$row->last_name."</td>";
		echo "<td>".$row->education."</td>";
		echo "<td>".$row->skills."</td>";
		echo "<td>".$row->experience."</td>";
		echo "<td>".$row->applied_for."</td>";
		echo "<td>".$row->date_of_applied."</td>";
		echo "</tr>";
		$i++;
	}
	?>
</table>
