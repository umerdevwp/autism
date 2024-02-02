<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/
?>

<?php
$news___field__group = get_sub_field('news_group');
?>

<section class="hm__news-sec">

    <div class="hmnews__cols-wrap">

        <div class="hmnews__col-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
            <img src="<?php echo $news___field__group['icon_image']; ?>" />
            <h2 class="sec__title"><?php echo $news___field__group['news_title']; ?></h2>
            <p><?php echo $news___field__group['news_content']; ?></p>
            <?php $CTA = $news___field__group['news_ctalink']; ?>
            <a href="<?php echo $CTA['ctalink_url']; ?>" class="button "><?php echo $CTA['ctalink_text']; ?></a>
        </div><!--/.hmnews__col-left-->

        <div class="hmnews__col-right" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="800">

            <div class="hmnews__carousel-wrap">

                <div class="owl-carousel hm__news-carousel" id="hmNews">


                <?php $blogs___array = get_sub_field('blog_posts'); ?>

                <?php foreach($blogs___array as $blog___item): ?>

                    <div class="item">
                        <div class="hm__news-pod">
                            <figure>
                                <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/hm__news-img1.jpg" alt=""> -->
                                <?php echo get_the_post_thumbnail($blog___item->ID, 'medium-featured-image', true); ?>
                            </figure>
                            <div class="news__pod-body">
                                <h3><?php echo get_the_title($blog___item->ID); ?></h3>
                                <p><?php $excerpt = get_the_excerpt($blog___item->ID); echo wp_trim_words( $excerpt , '39' );?></p>
                            </div><!--/.news__pod-body-->

                            <div class="news__pod-btn">
                                <a href="<?php echo get_permalink($blog___item->ID);?>" class="button ">Read More</a>
                            </div><!--/.news__pod-btn-->

                        </div><!--/.hm__news-pod-->
                    </div><!--/.item-->
                
                <?php endforeach; ?>
                  

                </div><!--/.owl-carousel-->

            </div><!--/.hmnews__carousel-wrap-->

        </div><!--/.hmnews__col-right-->

    </div><!--/.hmnews__cols-wrap-->

</section><!--/.hm__news-sec-->

<?php /*


  <div class="item">
                        <div class="hm__news-pod">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hm__news-img2.jpg" alt="">
                            </figure>
                            <div class="news__pod-body">
                                <h3>4 Ways to Maximize Enjoyment of Your Sunroom</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
                                    nostrexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div><!--/.news__pod-body-->

                            <div class="news__pod-btn">
                                <a href="#" class="button ">Read More</a>
                            </div><!--/.news__pod-btn-->

                        </div><!--/.hm__news-pod-->
                    </div><!--/.item-->

                    <div class="item">
                        <div class="hm__news-pod">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hm__news-img3.jpg" alt="">
                            </figure>
                            <div class="news__pod-body">
                                <h3>4 Ways to Maximize Enjoyment of Your Sunroom</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
                                    nostrexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div><!--/.news__pod-body-->

                            <div class="news__pod-btn">
                                <a href="#" class="button ">Read More</a>
                            </div><!--/.news__pod-btn-->

                        </div><!--/.hm__news-pod-->
                    </div><!--/.item-->

                    <div class="item">
                        <div class="hm__news-pod">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hm__news-img2.jpg" alt="">
                            </figure>
                            <div class="news__pod-body">
                                <h3>4 Ways to Maximize Enjoyment of Your Sunroom</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
                                    nostrexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div><!--/.news__pod-body-->
                            
                            <div class="news__pod-btn">
                                <a href="#" class="button ">Read More</a>
                            </div><!--/.news__pod-btn-->

                        </div><!--/.hm__news-pod-->
                    </div><!--/.item-->

                    */ ?>