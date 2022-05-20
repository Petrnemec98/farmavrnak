<?php

	//proměnná
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');

	if ($page_name == 'index'){
		$page_name = 'index.php';
	};


	//navigace
	$printNavItem = function($currentPage, $file, $title) {
		
	$class = ' class="list--item"';
	if ($currentPage === $file) {
	$class = ' class="list--item active"';
	};
		
		print '<li' . $class . '><a href="' . $file .  '">' . $title . '</a></li>';
	};
?>


<?php
  include 'logo.php';
?>


<!DOCTYPE html>
<html lang="cs">
<head>

<!-- cache ?v=1-->

<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresDefault A600
    ExpiresByType assets A2678400
    ExpiresByType php A2678400
</IfModule>


<!-- Google Tag Manager -->
<!--SEONO
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZNPGTK');</script>
-->
<!-- End Google Tag Manager -->

<!--SEONO
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-P5GVDR4"></script>
-->

	<title>
		<?php
		//Title 
			if ( $page_name == 'index.php') echo 'Vítejte na Farma Vrňák';
			if ( $page_name == 'nas-pribeh') echo 'Náš příbeh - Farma Vrňak';
			//if ( $page_name == 'maso') echo 'Maso - Farma Vrňák';
	 	?>	
	</title>
		
		<!-- technické parametry -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="author" content="Petr Němec" />
		<!--SEONO <meta name="robots" content="index, follow" /> -->
		<meta http-equiv="content-Type" content="text/html; charset=utf-8" />

		<!--Facebook-->
		<meta property="og:title" content="Farma Vrňák" />
		<meta property="og:description" content="Na Farmě Vrňák se zabýváme produkcí bio hovězího masa a včelího medu. Naším cílem je kvalitní život zvířat, naše krávy se pasou na loukách u slapské přehrady." />
		<meta property="og:image" content="https://www.farmavrnak.cz/images/slider_hp_1.webp" />

		<!-- SEO -->
		<?php
		//Index
		if ( $page_name == 'index.php') echo'
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
				<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
				<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
				<link rel="manifest" href="/site.webmanifest" />
				<!--SEONO <meta property="og:site_name" content="Farma Vrňák" />
				<meta name="keywords" content="hovězí, maso, hovězí maso, ekofarma, maso z farmy, domácí, ekologické zemědělství, farma Vrňák, farma, Blaženice, med, bio hovězí, maso na steak, guláš, Slapská přehrada, Měřín, plemeno Limousine, skot, kráva, welfare, svíčková, vysoký roštěnec, kližka">
				<meta name="description" content="Na Farmě Vrňák se zabýváme produkcí bio hovězího masa a včelího medu. Naším cílem je kvalitní život zvířat, naše krávy se pasou na loukách u slapské přehrady."> -->'
				;

		//MASO
		//if ( $page_name == 'maso') echo'
			//<link rel="icon" href="favicon1.svg" type="image/x-icon"  sizes="32x32" >
				//<meta name="title" content="Maso - Farma Vrňák">
				//<meta name="description" content="">
				//;
		?>

	
	<!--Styly-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/menu.css" />
	<link rel="stylesheet" href="assets/css/lightbox.css" />


	<!--Scripty-->
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!--SEONO
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-JX8XSFP2JF"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-JX8XSFP2JF');
	</script>
	-->

	<!-- Hotjar Tracking Code for https://farmavrnak.cz -->
	<!--SEONO
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:2906354,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	-->

</head>

<body> 
<!-- Google Tag Manager (noscript) -->
<!--SEONO
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZNPGTK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
-->
<!-- End Google Tag Manager (noscript) -->

<!--Button up-->
<button onclick="topFunction()" id="TopScrollBtn" title="Go to top"></button>

	<header>
		<nav class="layout-line" id="layout">
			<svg class="circule--1680" id="circule" xmlns="http://www.w3.org/2000/svg" width="362" height="262" fill="none" viewBox="0 0 362 262">
		  		<path d="M361.15 0v135.88a51.158 51.158 0 00-47.73 32.07c-21.72 55-72.84 93.56-132.46 93.56-59.62 0-110.75-38.6-132.46-93.56A51.158 51.158 0 00.81 135.88V0h360.34z"/>
			</svg>

			<!--Menu-com-->
			
				<ul id="nav" class="nav--bar nav--left">
				<?php
				$printNavItem($page_name, 'index.php', 'Úvod');
				$printNavItem($page_name, 'nas-pribeh', 'NÁŠ PŘÍBĚH');
				echo '<li class="fake-logo-menu"></li>';
				$printNavItem($page_name, 'maso', 'MASO');
				$printNavItem($page_name, 'med', 'MED');
				$printNavItem($page_name, 'kontakty', 'KONTAKTY');
				?>
				</ul>
		

			<div class="logo--cover">
				<a href="index.php">
					<div class="logo">
			        	<div class="logo--svg">
			        		<div class="logo-svg-pics"></div>
			        	</div>
					</div>
				</a>
			</div>
		<!--Menu-com-->
		<div class="menu" id="menu">
		  	<span></span>

		  </div>
		
		</nav>
	</header>



			



			


