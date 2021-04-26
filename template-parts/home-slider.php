<section id="home-slider">
    <div class="home-slider">
        <?php
        // The Query
        $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'home-slider', 'posts_per_page' => 1);
        $my_query = null; $my_query = new WP_Query($args);
        // The Loop
        if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();
        $fields = CFS()->get( 'image_loop' ); foreach ( $fields as $field ) {?>
            <div class="outer-wrap">
                <div class="slider-back" style="background-image:url('<?php echo $field['slider_image'];?>')">
                    <!-- <img class="img-fluid " src="<?php // echo $field['slider_image'];?>" alt="Kids learning" srcset=""> -->
                </div>
            </div>
        <?php } endwhile; endif; /* Restore original Post Data */ wp_reset_query(); ?>
    </div>
</section>