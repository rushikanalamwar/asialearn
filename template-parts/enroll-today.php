<section id="enroll-today">
    <div class="container">
        <div class="enroll-row">
            <?php
            // The Query
            $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'enroll', 'posts_per_page' => 1);
            $my_query = null; $my_query = new WP_Query($args);
                // The Loop
                if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();?>
                    <div class="enroll-left">
                        <div class="enroll-head">
                            <?php echo CFS()->get( 'enroll_head' ); ?>
                        </div>
                        <div class="enroll-sub-head ">
                            <?php echo CFS()->get( 'enroll_sub_head' );?>
                        </div>
                    </div>
                    <div class="enroll-right">
                        <a href="/contact-us/" target="_blank" class="join-now tran pos-rel align-middle" rel="noopener noreferrer"><?php echo CFS()->get( 'enroll_button_text' ); ?></a>
                    </div>
                <?php endwhile; endif; /* Restore original Post Data */ wp_reset_query(); ?>
        </div>
    </div>
</section>