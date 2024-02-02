<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>

<!-- Start Watch SEO -->
<section id="watch_seo" class="watch-seo watch__seo-sec parallax-seoBG background-fixed">
    <div class="container ">
        <div class="row ">
            <div class="space-50 "></div>
            <div class="col-lg-12 col-md-12 ">
                <div class="seo-border-wrapper" style="">
                    <div class="seo background-fullwidth" data-bg="<?php echo get_sub_field('seo_background_image'); ?>">

                        <div class="parallax-seoPOD">
                            <div class="icon ">
                                <img src="<?php echo get_sub_field('seo_icon_image'); ?>" class="img-fluid "/>
                            </div>
                            <h4><?php echo get_sub_field('title'); ?></h4>
                            <p><?php echo get_sub_field('content'); ?></p>
                            <?php
                            if (have_rows('call_to_action')):
                                while (have_rows('call_to_action')) : the_row();
                                    ?>
                                    <a href="<?php echo get_sub_field('button_link'); ?>" class="button "><?php echo get_sub_field('button_label'); ?></a>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Watch SEO  -->

