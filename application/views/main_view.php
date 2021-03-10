<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<!--<title> --><?php //echo $title; ?><!-- </title>-->
<title> Happy Tech</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body {font-family: "Lato", sans-serif}
	.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-blue w3-card">

		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
		<a href="#application" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Application</a>
		<a href="#pending_review" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Pending Review</a>
		<a href="#reviewed" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Reviewed</a>
		<a href="#profile" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Profile</a>
		<a href="#log_status" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Log In/out</a>

</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<a href="#application" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Application</a>
	<a href="#pending_review" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Pending Review</a>
	<a href="#reviewed" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Reviewed</a>
	<a href="#profile" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Log In</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

	<img src="/assets/pic.png" class="w3-image w3-greyscale-min" style="width:100%">




	<!-- The Home Section -->
	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="application">
		<h2 class="w3-wide">Happy Tech</h2>
		<p class="w3-opacity"><i>. </i></p>   <!-- write some content here. -->
<!--		<p class="w3-justify"> .</p> write some content here.-->

	</div>

	<!-- The Applicatioin Section -->
	<div class="w3-white" id="application">
		<div class="w3-container w3-content w3-padding-64" style="max-width:800px">

		</div>
	</div>

	<!-- The Pending Review Section -->
	<div class="w3-white" id="pending_review">
		<div class="w3-container w3-content w3-padding-64" style="max-width:800px">

		</div>
	</div>

	<!-- The Reviewed Section -->
	<div class="w3-white" id="reviewed">
		<div class="w3-container w3-content w3-padding-64" style="max-width:800px">

		</div>
	</div>



<!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

	<p class="w3-medium">Powered by Team Happy Tech</a></p>
</footer>

<script>


	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}
		x[myIndex-1].style.display = "block";
		setTimeout(carousel, 4000);
	}

	// Used to toggle the menu on small screens when clicking on the menu button
	function myFunction() {
		var x = document.getElementById("navDemo");
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
		} else {
			x.className = x.className.replace(" w3-show", "");
		}
	}


		}
	}
</script>

</body>
</html>
