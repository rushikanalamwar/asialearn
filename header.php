<!DOCTYPE html>
<html>
<head>
	<!-- <script>
		$(".dropdown-trigger").dropdown();
	</script> -->
	<title><?php bloginfo('title'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">
	<!-- bootstrap 4.5 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- logo -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/asialearnlogo.png" rel="shortcut icon">
	<!-- Roboto font -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php
		wp_head();
		if(function_exists('get_common_file_path')){
			include(get_common_file_path('header'));
		}
	?>
	</head>
	<body <?php body_class(); ?>>
		<header>
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>
		<ul id="dropdown2" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>
		<nav >
		<div class="nav-wrapper">
			<a href="assets/img/asialearnlogo.png" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down dropdown">
			<!-- <li><a href="sass.html">Sass</a></li> -->
			<li><a href="index.php">HOME</a></li>
			<li><a href="badges.html">ABOUT US</a></li>
			<!-- <li><a href="badges.html">ABACUS ENRICHMENT</a></li> -->
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">ABACUS ENRICHMENT<i class="material-icons right">arrow_drop_down</i></a></li>
			<!-- <li><a href="badges.html">TUITION CLASSES</a></li> -->
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown2">TUITION CLASSES<i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a href="badges.html">PHOTO GALLERY</a></li>
			<li><a href="badges.html">VIDEOS</a></li>
			<li><a href="badges.html">CONTACT US</a></li>			
			<!-- Dropdown Trigger -->
			
			</ul>
		</div>
		</nav>
</header>
<script>
		$(".dropdown-trigger").dropdown();
</script>