<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>

<section class="hm__reviewsmap-sec">

    <div class="container">

        <div class="reviews__map-cols" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="800">

            <img class="dotted_lines green__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/green__horzontal-dots.svg" alt="">
            <img class="dotted_lines lorange__vertical-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/lorange__vertical-dots.svg" alt="">
            <img class="dotted_lines lblue__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/lblue__horzontal-dots.svg" alt="">

            <div class="row m0">

                <div class="col-lg-7">
                    <div class="hm__map-wrap">
                        <figure>
                            <!-- <img src="<?php // echo get_sub_field('map_image'); ?>" alt=""> -->
                            <?php echo wp_get_attachment_image(get_sub_field('map_image'), 'full', true); ?>
                        </figure>
                        <div class="hm__map-footer">
                            <h2><?php echo get_sub_field('get_direction_title'); ?> <small><?php echo get_sub_field('get_direction_visit_line'); ?></small></h2>
                            <a href="<?php echo get_sub_field('get_direction_ctalink'); ?>" target="_blank" class="button">Get Directions</a>
                        </div><!--/.hm__map-footer-->
                    </div><!--/.hm__map-wrap-->
                </div><!--/.col-lg-7-->

                <?php $reviews___array = get_sub_field('reviews'); ?>

                <div class="col-lg-5">
                    <div class="hm__reviews-wrap">

                        <div class="hm__reviews-inner">

                            <h2 class="sec__title"><?php echo get_sub_field('reviews_title'); ?></h2>

                            <div class="owl-carousel hm__reviews-carousel" id="hmReviews">

                            <?php foreach($reviews___array as $review___item): ?>

                                <div class="item">
                                    <div class="hm__review-body">
                                        <p><?php echo get_field('review_content', $review___item->ID); ?></p>
                                        <b>- <?php echo get_the_title($review___item->ID); ?></b>
                                    </div><!--/.hm__review-body-->
                                </div><!--/.item-->
                            
                            <?php endforeach; ?>

                            </div><!--/.owl-carousel-->

                            <a href="#" class="button ">View All Reviews</a>

                        </div><!--/.hm__reviews-inner-->

                    </div><!--/.hm__reviews-wrap-->
                </div><!--/.col-lg-5-->

            </div><!--/.row-->

        </div><!--/.reviews__map-cols-->

    </div><!--/.container-->

</section><!--/.hm__reviewsmap-sec-->

<?php /*

 <div class="item">
                                    <div class="hm__review-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
                                            nostrexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <b>- Jhon Carter</b>
                                    </div><!--/.hm__review-body-->
                                </div><!--/.item-->

                                <div class="item">
                                    <div class="hm__review-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
                                            nostrexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <b>- Jhon Carter</b>
                                    </div><!--/.hm__review-body-->
                                </div><!--/.item-->
*/ ?>