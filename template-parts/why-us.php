<section id="why-us">
    <div class="container">
        <div class="row">
            <?php
            // The Query
            $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'why-us', 'posts_per_page' => 1);
            $my_query = null; $my_query = new WP_Query($args);
            // The Loop
            if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();
            $fields = CFS()->get( 'why_to_choose_loop' ); foreach ( $fields as $field ) {?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4 mt-4">
                    <div class="card why-us">
                        <div class="img-wrap">
                            <img class="card-img-top img-fluid" src="<?php echo $field['why_to_choose_image'];?>" alt="<?php echo $field['why_to_choose_desc'];?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-left"><?php echo $field['why_to_choose_desc'];?></h5>
                        </div>
                    </div>
                </div>
            <?php } endwhile; endif; /* Restore original Post Data */ wp_reset_query(); ?>
        </div>
    </div>
</section>