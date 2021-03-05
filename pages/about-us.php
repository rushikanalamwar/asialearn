<?php /* Template Name: About Us */ get_header(); ?>
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
<?php get_template_part( 'template-parts/enroll', 'today' ); ?> 
<?php get_footer(); ?>