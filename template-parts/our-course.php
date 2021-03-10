<section id="our-course">
    <div class="container">
        <?php
            // The Query
            $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'our-course', 'posts_per_page' => 1);
            $my_query = null; $my_query = new WP_Query($args);
            // The Loop
            if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="text text-center">
            <h2><?php echo CFS()->get( 'our_courses_head' );?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/unlock.png" class="img-fluid unlock" alt="unlock potential">
        </div>
        <div class="row">
        <?php $fields = CFS()->get( 'our_courses_loop' ); foreach ( $fields as $field ) {?>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-2 mb-2">
                <div class="top-courses-item">
                    <div class="edugate-layout-2">
                        <div class="edugate-layout-2-wrapper">
                            <div class="edugate-content"><a href="courses-detail.html" class="title"><?php echo $field['our_courses_title'];?></a>
                                <div class="description"><?php echo $field['our_courses_description'];?></div>
                                <a href="http://" class="course-know-more" target="_blank" rel="noopener noreferrer">Know more</a>
                            </div>
                            <div class="edugate-image"><img src="<?php echo $field['our_courses_image'];?>" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php endwhile; endif; /* Restore original Post Data */ wp_reset_query();?>

    </div>
</section>