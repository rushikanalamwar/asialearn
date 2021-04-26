<section id="yt">
    <div class="container">
        <?php
        // The Query
        $args = array('post_type' => 'post','posts_per_page' => 2, 'post_status' => 'publish', 'orderby' => 'modified', 'tag' => 'youtube-links');
        $my_query = null; $my_query = new WP_Query($args);
        // The Loop
        if ( $my_query->have_posts() ):while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="text text-center yt-head">
            <h2><?php echo CFS()->get( 'youtube_menu_head' );?></h2>
        </div>
        <div class="row">
        <?php $i=0; $fields = CFS()->get( 'youtube_menu_loop' ); foreach ( $fields as $field ) {
            if($i>2){?>
            <div class="col-lg-6 col-md-6">
            <?php $link = $field['youtube_menu_link'];$l = explode ( '=' ,$link);?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $l[1]?>?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <?php }else{} $i++;} ?>
        </div>
        <?php endwhile; endif; /* Restore original Post Data */ wp_reset_query();?>
    </div>
</section>