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
<!-- Google Tag Manager -->
<!--SEONO
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZNPGTK');</script>
-->
<!-- End Google Tag Manager -->


	<title> 
		<?php
			if ( $page_name == 'index.php') echo 'Vítejte na Farma Vrňák';
			if ( $page_name == 'nas-pribeh') echo 'Náš příbeh - Farma Vrňák';
			if ( $page_name == 'maso') echo 'Maso - Farma Vrňák';
			if ( $page_name == 'med') echo 'Med - Farma Vrňák';
			if ( $page_name == 'kontakty') echo 'Kontakty - Farma Vrňák';
			if ( $page_name == 'pripravujeme') echo 'Připravujeme - Farma Vrňák';
			if ( $page_name == 'droby') echo 'Droby - Farma Vrňák';
			if ( $page_name == 'kosti') echo 'Kosti - Farma Vrňák';
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

		<!-- Keywords, description, favicon, name-page -->
		<?php
		//Index
				if ( $page_name == 'index.php') echo'
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
				<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
				<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
				<link rel="manifest" href="/site.webmanifest" />
				<meta property="og:site_name" content="Farma Vrňák" />
				<meta name="keywords" content="hovězí, maso, hovězí maso, ekofarma, maso z farmy, domácí, ekologické zemědělství, farma Vrňák, farma, Blaženice, med, bio hovězí, maso na steak, guláš, Slapská přehrada, Měřín, plemeno Limousine, skot, kráva, welfare, svíčková, vysoký roštěnec, kližka">
				<meta name="description" content="Na Farmě Vrňák se zabýváme produkcí bio hovězího masa a včelího medu. Naším cílem je kvalitní život zvířat, naše krávy se pasou na loukách u slapské přehrady.">';
		//NÁŠ-PŘÍBĚH
				if ( $page_name == 'nas-pribeh') echo'
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
				<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
				<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
				<link rel="manifest" href="/site.webmanifest" />
				<meta property="og:site_name" content="Náš příběh - Farma Vrňák" />
				<meta name="keywords" content="Rodinná farma, Vrňák, statek, Blaženice, Slapská přehrada, Limousine, skot, kráva, býk, domácí, bio, eko, Měřín, volný chov, zemědělství, hovězí">
				<meta name="description" content="Hospodaření na rodinné Farmě Vrňák v Blaženicích jsme obnovili po roce 1989. Naším cílem je kvalitní život zvířat, naše krávy se pasou na loukách u slapské přehrady.">';
		//MASO
				if ( $page_name == 'maso') echo'
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
				<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
				<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
				<link rel="manifest" href="/site.webmanifest" />
				<meta property="og:site_name" content="Maso - Farma Vrňák" />
				<meta name="keywords" content="hovězí maso, bio hovězí, steakové maso, rozdělení hovězího masa, dělení hovězího masa, druhy hovězího masa, flank steak, rump steak, sirloin steak, tenderloin, ribeye, pupek, svíčková, roštěná, maso na gril, vyzrálé maso, burger, stařené maso, úprava hovězího masa, použití hovězího masa">
				<meta name="description" content="Hovězí maso se nedělí pouze na přední, zadní a svíčkovou. Podívejte se na našeho průvodce hovězím masem a zkuste obohatit svůj jídelníček o něco netradičního.">';
		//MED
				if ( $page_name == 'med') echo'
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
				<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
				<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
				<link rel="manifest" href="/site.webmanifest" />
				<meta property="og:site_name" content="Med - Farma Vrňák" />
				<meta name="keywords" content="český med, med od včelaře, domácí med, Blaženice, získávání medu, život včely, včelí med, květový med, šlehaný med, lesní med, oddělky, matečníky, prodej včelích matek, včela medonosná, včela kraňka, včela sklenář">
				<meta name="description" content="V chovu včel navazujeme na tradici našeho pradědečka. Podívejte se na naši cestu za získáváním vlastního medu.">';
		//MED
				if ( $page_name == 'kontakty') echo'
				<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
				<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
				<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
				<link rel="manifest" href="/site.webmanifest" />
				<meta property="og:site_name" content="Kontakty - Farma Vrňák" />
				<meta name="keywords" content="Subaru Sedlčany, Karavany Sedlčany, Adria karavany, Měřín, Jablonná, Ekologické zemědělství, farma Vrňák, Blaženice, Pavel Vrňák, Volareza">
				<meta name="description" content="Rodinná Farma Vrňák se nachází v Blaženicích poblíž slapské přehrady.">';
		?>

	<!--Styly-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/menu.css" />
	<link rel="stylesheet" href="assets/css/lightbox.css" />
	<!--Scripty-->
	

</head>

<body>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?theme=minimal&tracking=1&thirdparty=1&always=1&scrolling=1&remember=100&privacyPage=https%3A%2F%2Fwww.farmavrnak.cz"></script>

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



			



			


