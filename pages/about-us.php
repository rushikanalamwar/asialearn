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
    <div class="about-resources">
        <div class="container">
            <h2><?php echo CFS()->get( 'resource_title' );?></h2>
            <p class="about-sub"><?php echo CFS()->get( 'resource_sub_title' );?></p>
            <div class="res-list">
                <?php $fields = CFS()->get( 'resource_loop' ); foreach ( $fields as $field ) { ?>
                <div class="res-wrap">
                    <div class="img-block pos-rel">
                        <img src="<?php echo $field['icon'];?>" class="img-fluid" alt="<?php echo $field['icon_text'];?>">
                    </div>
                    <div class="text-block">
                        <?php echo $field['icon_text'];?>
                    </div>
                </div>
                <?php } ?>
            </div>
            
                
        </div>
    </div>
    <?php get_template_part( 'template-parts/enroll', 'today' ); ?> 
<?php get_footer(); ?>