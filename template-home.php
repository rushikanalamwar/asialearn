<?php /* Template Name: Home Page */ get_header();?>
<!-- Custom Home Page -->
<?php // get_template_part( 'template-parts/home', 'slider' ); ?>
<?php get_template_part( 'template-parts/youtube', 'list' ); ?>
<?php get_template_part( 'template-parts/choose', 'course' ); ?>
<?php get_template_part( 'template-parts/our', 'course' ); ?>
<?php get_template_part( 'template-parts/about-asia', 'learn' ); ?>
<?php get_template_part( 'template-parts/why', 'us' ); ?>
<?php get_template_part( 'template-parts/testimonials' ); ?>
<?php get_template_part( 'template-parts/enroll', 'today' ); ?>
<?php get_footer(); ?>