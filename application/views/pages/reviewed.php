<!--load the back-ground image-->
<img class="backimg_app feed" src="<?php echo base_url() ?>assets/images/6c1299c2a5d7fb27788d6df7d4a5dc3b.jpg" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reviewed</title>
</head>


<style>
	body {
		padding: 0px;
		margin: 0;
		font-family: Verdana, Geneva, Tahoma, sans-serif;
		background-image: url("image.jpg");


	/*<tbody>*/
	/* <tr class='clickable-row' data-href='url://'>*/
	/*											 <td>Blah Blah</td> <td>1234567</td> <td>£158,000</td>*/
	/*																							   </tr>*/
	/*																								 </tbody>*/


	jQuery(document).ready(function($) {
	$(".clickable-row").click(function() {
		window.location = $(this).data("href");
	});
	});
	}
	table {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		border-collapse: collapse;
		width: 800px;
		height: 400px;
		border: 1px solid #bdc3c7;
		box-shadow: 2px 2px 12px rgb(249, 191, 95), -1px -1px 8px rgb(69, 153, 241);
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
		background-color: #8bdaf7;
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
		transform: scale(1.09);
		box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);x
	}

	@media only screen and (max-width: 1200px) {
		table {
			width: 100%;
		}
	}
</style>

<body>

<hr>
<body>
<table width="1000" border="3" cellspacing="10" cellpadding="10">
	<tr id="header">
		<th>Sr No</th>
		<th>Status</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Interviewed For</th>
		<th>Next Step</th>

		<!--		<th>Delete</th>-->
		<!--		<th>Update</th>-->
	</tr>
	<?php
	$i=1;
	foreach($data as $row)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row->status."</td>";
		echo "<td>".$row->first_name."</td>";
		echo "<td>".$row->last_name."</td>";
		echo "<td>".$row->accepted_for."</td>";
		echo "<td>".$row->next_step."</td>";
		echo "</tr>";
		$i++;
	}
	?>
</table>



