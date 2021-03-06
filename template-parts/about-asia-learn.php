<section id="about-asia-learn">
    <div class="container">
        <?php
        // The Query
        $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'about-asia-learn', 'posts_per_page' => 1);
        $my_query = null; $my_query = new WP_Query($args);
        // The Loop
        if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();?>
            <div class="col-lg-10  col-md-10 col-sm-8 col-xs-6">
                <div class="asia-head">
                    <?php echo CFS()->get( 'about_asia_learn_head' ); ?>
                </div>
                <div class="asia-sub-head ">
                    <?php echo CFS()->get( 'about_asia_learn_description' );?>
                </div>
                <div class="link">
                <a href="/contact-us/" target="_blank" class="know-more tran pos-rel align-middle" rel="noopener noreferrer"><?php echo CFS()->get( 'about_asia_learn_button_text' ); ?></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <img src="<?php echo CFS()->get( 'about_asia_learn_image' );?>" class="img-fluid" alt="<?php echo CFS()->get( 'about_asia_learn_head' ); ?>">
            </div>
        <?php endwhile; endif; /* Restore original Post Data */ wp_reset_query(); ?>
    </div>
</section>