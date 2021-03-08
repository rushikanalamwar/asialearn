<?php /* Template Name: contact */ get_header();?>
<section id="contact-us">

    <div class="center-content mb-5">
        <?php if (have_posts() ): while (have_posts()) :the_post();?>
            <div class="text-head">
                <div class="container">
                    <h2 class="mb-4 pos-rel"><?php echo the_title();?></h2>
                </div>
            </div>
            <?php global $dispayBreadcrumb; $dispayBreadcrumb = True;echo get_breadcrumb();?>
        <?php endwhile; endif;?>
    </div>
    <div class="container">
        <div class="contact-us-menu">
            <div class="row">
                <?php $fields = CFS()->get( 'contact_menu' ); foreach ( $fields as $field ) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card custom-height border-dark mb-3">

                            <div class="card-header text-center"><h5><?php echo $field['contact_head'];?></h5> </div>
                            <div class="card-body text-dark text-center">
                                <img src="<?php echo $field['contact_icon'];?>" class="contact-icon" alt="<?php echo $field['contact_head'];?>">
                                <p class="card-title text-center"><?php echo $field['contact_menu_item'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
    
        </div>
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
    </div>
</section>
<?php get_template_part( 'template-parts/enroll', 'today' ); ?>
<?php get_footer(); ?>