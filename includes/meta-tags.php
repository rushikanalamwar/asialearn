<?php
    function meta_get_the_excerpt($post_id) {
        global $post;
        $save_post = $post;
        $post = get_post($post_id);
        setup_postdata( $post );
        $output = get_the_excerpt();
        $output = str_replace('[&hellip;]', '', $output);
        $post = $save_post;
        return $output;
    }

    add_action('wp_head', 'nur_social_tags');
    function nur_social_tags() {
        if (is_single()) {
            global $post;
            if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),array(300,300));
            }
            $description = meta_get_the_excerpt($post_id);
            $type = $post->post_type;
            if($type == 'post') {
                $type = 'article';
            }
        if(!empty($image[0])) {
    ?>
    
    <meta property="og:image" content="<?php echo $image[0]; ?>" />
    <?php } ?>
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="application-name" content="Cruncher.in">
    <meta property="type" content="Website">
    <meta property="url" content="https://cruncher.in/">
    <meta name="description" id="description" content="<?php echo $description ?>">
    <meta name="keywords" id="keywords" content="cruncher, cruncher.in, web designing, web development, responsive website, pixel perfect website, in, website seo">
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?php echo get_bloginfo('name'); ?>" />
    <meta name="twitter:title" content="<?php the_title(); ?>" />
    <meta name="twitter:description" content="<?php echo $description ?>" />
    <?php } else { ?>
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="application-name" content="Cruncher.in">
    <meta property="type" content="Website">
    <meta property="url" content="https://cruncher.in/">
    <meta name="description" id="description" content="<?php echo $description ?>">
    <meta name="keywords" id="keywords" content="cruncher, cruncher.in, web designing, web development, responsive website, pixel perfect website, in, website seo">
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:image" content="<?php bloginfo('template_url')?>/assets/img/logo.png" />
    
<?php }
}