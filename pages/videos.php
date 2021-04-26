<?php /* Template Name: Videos */ get_header(); ?>
    <div class="center-content mb-5">
        <?php if (have_posts() ): while (have_posts()) :the_post();?>
            <div class="text-head">
                <div class="container">
                    <h2 class="mb-4 pos-rel"><?php echo the_title();?></h2>
                </div>
            </div>
            <?php global $dispayBreadcrumb; $dispayBreadcrumb = True;echo get_breadcrumb();?>
            <div class="container">
                <?php echo the_content();?>
            </div>
        <?php endwhile; endif;?>
    </div>
    <section id="yt-page">
        <div class="container">
            <?php
            // The Query
            $args = array('post_type' => 'post','posts_per_page' => -1, 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'youtube-links');
            $my_query = null; $my_query = new WP_Query($args);
            // The Loop
            if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();?>
            <div class="text text-center">
                <h2><?php echo CFS()->get( 'youtube_menu_head' );?></h2>
            </div>
            <div class="row">
            <?php $fields = CFS()->get( 'youtube_menu_loop' ); foreach ( $fields as $field ) {?>
                <div class="col-lg-6 col-md-6">
                <?php $link = $field['youtube_menu_link'];$l = explode ( '=' ,$link);?>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $l[1]?>?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php } ?>
            </div>
            <?php endwhile; endif; /* Restore original Post Data */ wp_reset_query();?>
        </div>
    </section>
    <?php get_template_part( 'template-parts/enroll', 'today' ); ?> 
<?php get_footer(); ?>