<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<h2 class="mb-4"><?php bloginfo('title'); ?></h2>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<h5>Sitemap</h5>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<h5>We respect your privacy.</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="address">
					756, Upper Serangoon Road #02-10,</br> Upper Serangoon Shopping Centre,</br> Singapore 534626.
				</div>
				<div class="email-address">
					<a href="mailto:sandhya@sipbrainpower.sg">
						<div class="icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/e.png" alt="sandhya@sipbrainpower.sg">
						</div>
						<div class="text">
							<p>sandhya@sipbrainpower.sg</p>
						</div>
					</a>
				</div>
				<div class="call-no">
					<a href="tel:+65 – 94244953">
						<div class="icon">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-solid.png" alt="65 – 94244953" srcset="">
						</div>
						<div class="text">
							<p>
								+65 – 94244953
							</p>	
						</div>
					</a>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="row">
					<div class="col-md-4">
					<h5>Sitemap</h5>
					</div>
					<div class="col-md-4">
					<h5>Sitemap</h5>	
					</div>
					<div class="col-md-4">
						<?php wp_nav_menu( array( 'theme_location'=>'footer-menu-three' ) ); ?>
					</div>
				</div>				
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<h5>We respect your privacy.</h5>
			</div>
		</div>
	</div>
	<div class="copy text-center pt-4 pb-2">
		<p>Copyright &copy; Asia Learning Resources, Singapore: Child Development Programs, Enrichment Classes & Private Tuition Classes | <a href="https://sipbrainpower.sg/" target="_blank" rel="noopener noreferrer"> Abacus Mental Arithmetic Classes</a>  </p>
	</div>
</footer>

<?php
	wp_footer();
	if(function_exists('get_common_file_path')){
		include(get_common_file_path('footer'));
	}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
