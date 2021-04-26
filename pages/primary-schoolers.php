<?php /* Template Name: Primary Schoolers */ get_header(); ?>
<div class="center-content mb-5">
    <?php if (have_posts() ): while (have_posts()) :the_post();?>
        <div class="text-head">
            <div class="container">
                <h2 class="mb-4 pos-rel"><?php echo the_title();?></h2>
            </div>
        </div>
        <?php global $dispayBreadcrumb; $dispayBreadcrumb = True;echo get_breadcrumb();?>
        <div class="container main-content">
            <?php echo the_content();?>
            <?php $fields = CFS()->get( 'accordion_loop' ); foreach ( $fields as $field ) {?>
                <div class="card border-danger mt-4 mb-3">
                    <div class="card-header"><?php echo $field['accordion_title'];?></div>
                        <div class="card-body text-dark">
                            <p class="card-text"><?php echo $field['accordion_description'];?></p>
                        </div>
                    </div>
            <?php } ?>
        </div>
    <?php endwhile; endif;?>
</div>
<?php get_template_part( 'template-parts/enroll', 'today' ); ?> 
<?php get_footer(); ?>