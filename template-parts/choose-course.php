<section id="choose-course">
    <div class="container">
        <?php
            // The Query
            $args = array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'choose-course', 'posts_per_page' => 1);
            $my_query = null; $my_query = new WP_Query($args);
            // The Loop
            if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="text text-center">
            <h2><?php echo CFS()->get( 'choose_course_head' );?></h2>
            <p class="choose-sub"><?php echo CFS()->get( 'choose_course_sub_head' );?></p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/unlock.png" class="img-fluid unlock" alt="unlock potential">
        </div>
        <div class="row">
            <?php $fields = CFS()->get( 'choose_course_loop' ); foreach ( $fields as $field ) {?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-2 mb-2">
                <div class="card">
                    <div class="img-wrap pos-rel">
                        <img class="card-img-top img-fluid" src="<?php echo $field['choose_course_image'];?>" alt="<?php echo $field['choose_course_title'];?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $field['choose_course_title'];?></h5>
                        <p class="card-text text-center"><?php echo $field['choose_course_description'];?></p>
                    </div>
                    <a href="#" target="_blank" class="get_start"><svg><rect x="0" y="0" fill="none" width="100%" height="100%"/></svg>Get Started</a>
                </div>  
            </div>
            <?php } ?>
        </div>
        <?php endwhile; endif; /* Restore original Post Data */ wp_reset_query();?>
    </div>
</section>
