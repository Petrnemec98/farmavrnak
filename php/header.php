<?php

	//proměnná
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');


	//admin
	require "php/functions.php"; 


?>


<!DOCTYPE html>
<html lang="cs">
<head>

	

		<title>
			<?php
			//Title 
				if ( $page_name == 'index') echo 'Farma Vrňák';
				if ( $page_name == 'maso') echo 'Maso - Farma Vrňák';

		 	?>	
		</title>



		<!--<link rel="icon" href="favicon.ico" type="image/x-icon"  sizes="16x16" > -->
		
		<!-- technické parametry -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- SEO -->


		<meta name="title" 
		
			<?php
			if ( $page_name == 'index') echo 'content="Farma Vrňák"';
			if ( $page_name == 'maso') echo 'content="Maso Farma Vrňák"';
			?>
		>

		<meta name="description" 
			<?php
			//desc. 
				if ( $page_name == 'index') echo 'Farma Vrňák';
				if ( $page_name == 'maso') echo 'Maso - Farma Vrňák';
		 	?>	

		content="##">
		<meta name="keywords" content="###">
	
		<!--Styly-->	
		<link rel="stylesheet" href="assets/css/main.css" />

<body>

	<script type="text/javascript">	
		// Set the date we're counting down to
		var countDownDate = new Date("May 1, 2022 0:0:0").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		  // Get today's date and time
		  var now = new Date().getTime();
		    
		  // Find the distance between now and the count down date
		  var distance = countDownDate - now;
		    
		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		  // Output the result in an element with id="demo"
		  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
		  + minutes + "m " + seconds + "s ";
		    
		  // If the count down is over, write some text 
		  if (distance < 0) {
		    clearInterval(x);
		    document.getElementById("demo").innerHTML = "EXPIRED";
		  }
		}, 1000);
	</script>

	<div class="layout-line">
               <div class="circule-header">
	 		</div>          
	</div>
	

	 <div class="logo">

           <img src="images/logo.png">

	 </div>   

       

	<section
		<?php
			if ( $page_name == 'index') echo 'class="section--hp"';
			if ( $page_name == 'maso') echo 'class="section--maso"';
		?>
	>

	<?php render_banner() ?>

		



		


