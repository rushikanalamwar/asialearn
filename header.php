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
		<div class="top-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 text-first col-sm-12 col-xs-12">
						<ul class="ul left-menu">
							<li>
								<a href="mailto:">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/e.png" alt="sandhya@sipbrainpower.sg">
									<span>sandhya@sipbrainpower.sg</span>
								</a>
							</li>
							<li>
								<a href="tel:+65 – 94244953">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-solid.png" alt="65 – 94244953" srcset="">
									<span>+65 – 94244953</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-12 text-last col-sm-12 col-xs-12">
						<ul>
							<li>
								<a href="http://" target="_blank" rel="noopener noreferrer">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="Facebook">
								</a>
							</li>
							<li>
								<a href="http://" target="_blank" rel="noopener noreferrer">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/google.png" alt="Google plus">
								</a>
							</li>
							<li>
								<a href="http://" target="_blank" rel="noopener noreferrer">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="twitter">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<header>
<<<<<<< HEAD
			<div class="container">
				<nav>
					<div class="logo-wrap">
						<h1>
							<a href="/">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="asia learn today">
							</a>
						</h1>
					</div>
					<div class="menu-wrap">
						<div class="mobile-menu pos-rel">
							<input type="checkbox" id="menyAvPaa">
								<label id="burger" for="menyAvPaa">
									<div></div>
									<div></div>
									<div></div>
								</label>
							<nav id="meny">
								<?php wp_nav_menu( array( 'theme_location'=>'header' ) ); ?>
							</nav>
						</div>
						<?php wp_nav_menu( array( 'theme_location'=>'header' ) ); ?>
					</div>
				</nav>
			</div>
			
		</header>