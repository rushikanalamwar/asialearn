<section id="home-slider">
    <div class="home-slider">
        <?php
        // The Query
        $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'home-slider', 'posts_per_page' => 1);
        $my_query = null; $my_query = new WP_Query($args);
        // The Loop
        if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();
        $fields = CFS()->get( 'slider_images' ); foreach ( $fields as $field ) {?>
            <div class="slider-back">
                <img class="img-fluid" src="<?php echo $field['slider_imge'];?>" alt="Kids learning" srcset="">
            </div>
        <?php } endwhile; endif; /* Restore original Post Data */ wp_reset_query(); ?>
    </div>
</section>