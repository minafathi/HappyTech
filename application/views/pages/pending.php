<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pending Review</title>
</head>


<style>
	body {
		padding: 0px;
		margin: 0;
		background-color: #B1E8F7;
		/*width: 1500px;*/
		/*height:500px;*/
		/*background-image: url(image.jpg);*/
		/*background-repeat:no-repeat;*/
		/*-webkit-background-size: cover;*/
		/*-moz-background-size: cover;*/
		/*-o-background-size: cover;*/
		/*background-size: cover;*/
		font-family: Verdana, Geneva, Tahoma, sans-serif;
	}
	table {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		border-collapse: collapse;
		width: 800px;
		height: 200px;
		border: 1px solid #bdc3c7;
		box-shadow: 2px 2px 12px rgb(238, 196, 47), -1px -1px 8px rgb(87, 150, 241);
	}

	tr {
		transition: all .2s ease-in;
		cursor: pointer;
	}

	th,
	td {
		padding: 12px;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	#header {
		background-color: #39b9f0;
		color: #fff;
	}

	h1 {
		font-weight: 600;
		text-align: center;
		background-color: #f8fa82;
		color: #fff;
		padding: 10px 0px;
	}

	tr:hover {
		background-color: #f8fa82;
		transform: scale(1.02);
		box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
	}

	@media only screen and (max-width: 768px) {
		table {
			width: 90%;
		}
	}
</style>

<body>

<h1>Pending Review</h1>
<hr>

<table width="600" border="1" cellspacing="5" cellpadding="5">
	<tr id = "header">
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
