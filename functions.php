<?php
	include_once 'includes/meta-tags.php';
	include_once 'includes/breadcrumbs.php';
	include_once 'includes/remove-junk.php';

	if( !defined('THEME_ROOT') ){
		define( 'THEME_ROOT', get_theme_file_uri() );
	}
	if( !defined('THEME_PREFIX') ){
		define( 'THEME_PREFIX', 'ch' );
	}

	add_filter( 'nav_menu_link_attributes', 'custom_data_attribute', 10, 4 );
	function custom_data_attribute( $atts, $item, $args ) {
		$atts['data-hover'] = $item->title;
		return $atts;
	}

	if( function_exists('add_theme_support') ){
	    add_theme_support('menus');
		add_theme_support('post-thumbnails');
	
	// add_image_size( 'thumbnail_1500x500', '1500', '500', true );
	add_image_size( 'thumbnail_63x63', '63', '63', true );
	add_image_size( 'thumbnail_390x205', '390', '205', true );
	add_image_size( 'thumbnail_90x90', '90', '90', true );
	add_image_size( 'thumbnail_750x395', '750', '395', true );
	add_image_size( 'thumbnail_760x340', '760', '340', true );
	add_image_size( 'thumbnail_770x400', '770', '400', true );
	add_image_size( 'thumbnail_600x460',  '600', '460', true );
	add_image_size( 'thumbnail_308x308',  '308', '308', true );
	}
	//Register Navigation Location
	function register_theme_menus(){
		register_nav_menus( array(
			'sns-top-menu'	=>	__('SNS Top Menu'),
			'service'	=>	__('services menu'),
			'links'	=>	__('links'),
		) );
	}
	add_action( 'after_setup_theme', 'register_theme_menus' );


	function theme_assets(){
		/* Styles */
		wp_enqueue_style( 'theme-bootstrap', THEME_ROOT.'/assets/css/bootstrap.css', $deps = array(), filemtime( get_template_directory() . '/assets/css/bootstrap.css' ), $media = 'all' );
		wp_enqueue_style( 'theme-slick-theme', THEME_ROOT.'/assets/css/slick-theme.css', $deps = array(), filemtime( get_template_directory() . '/assets/css/slick-theme.css' ), $media = 'all' );
		wp_enqueue_style( 'theme-stylesheet', THEME_ROOT.'/style.css', $deps = array('theme-bootstrap', 'theme-slick-theme'), filemtime( get_template_directory() . '/style.css' ), $media = 'all' );

		/* Scripts */
		wp_enqueue_script( 'theme-main-script', THEME_ROOT.'/assets/js/app.js', $deps = ['jquery'], filemtime( get_template_directory().'/assets/js/app.js' ), $in_footer = true );
		wp_enqueue_script( 'theme-slick-script', THEME_ROOT.'/assets/js/slick.min.js', $deps = array(), filemtime( get_template_directory() .'/assets/js/slick.min.js' ), $in_footer = true );	
	}	
	add_action( 'wp_enqueue_scripts', 'theme_assets' );

	
	// Frontend Admin Bar
	show_admin_bar(false);

	/* stopped loading of contact-form plugin's CSS and JS file  */
	add_filter( 'wpcf7_load_js', '__return_false' );
	add_filter( 'wpcf7_load_css', '__return_false' );

	/* removing gutenberg css */
    function wgs_deregister_styles() {
        wp_dequeue_style( 'wp-block-library' );
    }
	add_action( 'wp_print_styles', 'wgs_deregister_styles', 100 );

	// Exclude post-type page from search
	if (!is_admin()) {
		function upz_search_filter($query) {
			if ($query->is_search) {
				$query->set('post_type', 'post');
			}
			return $query;
		}
		add_filter('pre_get_posts','upz_search_filter');
	}

	// short title
	function title($num) {
		$limit = $num+1;
		$title = explode(' ', get_the_title(), $limit);
		array_pop($title);
		$title = implode(" ",$title)."...";
		echo $title;
	}
		// short desc
		function excerpt($num){
			$excerpt = get_the_content();
			$excerpt = strip_shortcodes($excerpt);
			$excerpt = strip_tags($excerpt);
			$the_str = substr($excerpt, 0, $num);
			echo $the_str ."...";
		}
	function get_breadcrumb() {	
		$before_html = '<div class="breadcrumb"><div class="container">';
		$after_html = '</div></div>';
		$home =  '<a href="'.home_url().'" class="home" rel="nofollow">Home</a>'; 
		$sep = '<span class="sep"> | </span>';

		$breadcrumbs_temp  = array(
			'pages/about-us.php',
			'pages/contact-us.php',
			'pages/privacy-policy.php',
			'pages/centers.php',
		);
		global $dispayBreadcrumb;
		
        if( $dispayBreadcrumb ){
        	echo $before_html;
    	    echo $home;
    	    echo $sep;
		    if( is_single() ){    		
				the_category(' &bull; ');
				echo $sep . '<span class="main-txt">';
		    	echo the_title();
		    	echo '</span>';
		    }elseif ( is_category() ) {
		    	echo '<span class="main-txt">';
		    	echo single_cat_title();
		    	echo '</span>';
		    }elseif( in_array( get_page_template_slug() , $breadcrumbs_temp) ){
    			echo '<span class="main-txt">';
    	    	echo the_title();
    	    	echo '</span>';
		    }
		    echo $after_html;
        }	    
	}
