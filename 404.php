<?php get_header(); ?>
	
<div class="sticky-footer sticky">
	<div class="container container-404 text-center">
		<div class="custom">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png"  class="img-responsive" alt="">
		</div>
		<div class="lost">
			<p class="sorry">Ohh no, Its Our Junior Developer page, at least they found someting to show you.</p>
			<p class="sorry-msg">Let me teach them something valuable, till then click below button. </p>

			<a class="home-link-404" href="<?php echo home_url(); ?>">Home</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>