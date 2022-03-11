<?php

	//admin
	require "functions.php"; 

	//proměnná
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');

	//navigace
	$printNavItem = function($currentPage, $file, $title) {
		
		$class = '';
		if ($currentPage === $file) {
			$class = ' class="active"';
		}
		
		print '<li' . $class . '><a href="' . $file .  '.php">' . $title . '</a></li>';
	};

?>


<!DOCTYPE html>
<html lang="cs">
<head>
	

		<title>
			<?php
			//Title 
				if ( $page_name == 'index') echo 'Farma Vrňák';
		 	?>	
		</title>



		<link rel="icon" href="favicon.ico" type="image/x-icon"  sizes="16x16" >
		
		<!-- technické parametry -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- SEO -->
		<meta name="title" content="Farma Vrňák">
		<meta name="description" content="##">
		<meta name="keywords" content="###">
	
		<!--Styly-->	
		<link rel="stylesheet" href="assets/css/main.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-189332010-1"></script>

		<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				gtag('config', 'UA-189332010-1');
		</script>

		<!--<script src="https://www.google.com/recaptcha/api.js"></script> -->

		<!-- re-captcha-->

		<!--
		<script>
		
			function onSubmit(token) {
				document.getElementById("hiddenInputSubmit").click();
			}

		</script>

-->
		