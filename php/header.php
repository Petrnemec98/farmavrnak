<?php

	//proměnná
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');

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

		


