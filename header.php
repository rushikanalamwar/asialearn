<!DOCTYPE html>
<html>
<head>
	<script>0</script>
	<title><?php bloginfo('title'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="theme-color" content="#b280ff">
	<meta name="msapplication-navbutton-color" content="#b280ff">
	<meta name="apple-mobile-web-app-status-bar-style" content="#b280ff">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">
	<?php
		wp_head();
		if(function_exists('get_common_file_path')){
			include(get_common_file_path('header'));
		}
	?>
<header>
	<nav>
	
	</nav>
</header>