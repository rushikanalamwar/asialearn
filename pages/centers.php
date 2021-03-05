<?php /* Template Name: Centers */ get_header();?>
<section id="center">
    <div class="container">
        <div class="row">
            <?php $fields = CFS()->get( 'locations_loop' ); foreach ( $fields as $field ) { ?>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <?php //String containing special characters.
                        $str = $field['location_address'];
                        //Remove any character that isn't A-Z, a-z, 0-9 or a whitespace.
                        $str = preg_replace("/[^A-Za-z0-9 ]/", ' ', $str); ?>
                <a href="https://www.google.com/maps/search/<?php echo $str;?>" target="_blank" class="center-a" rel="noopener noreferrer">
                    <div class="card border-secondary mb-3 mt-3">
                        <div class="row no-gutters card-height">
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $field['location_main_point'];?></h5>
                                    <p class="card-text"><?php echo $field['location_address'];?>.</p>
                                </div>
                            </div>
                            <div class="col-md-2 text-center center-col col-sm-2 col-xs-2">
                                <svg width="24" height="24" viewBox="0 0 24 24"> <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12 ,2Z"></path></svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer();?>

