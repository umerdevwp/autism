<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Four_Seasons
 * @since 1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

		        <!-- Page Banner Section Start -->
				<div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="page-banner text-center">
                            <h1 class="pb-20"><?php echo get_the_title(); ?></h1>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

            <?php //$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
           <!--  <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="post-thumbnail img-full pt-5 pt-lg-4 pt-md-3 pt-sm-2 pt-xs-1">
                        <?php // echo $feat_image;//the_post_thumbnail( 'post-featured-image' ); ?>
                        <img src="<?php //echo $feat_image[0];?>" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            </div> -->
        <!-- Page Banner Section End -->

        <!-- Single Blog Start -->
            <article class="article-wrapper py-5">
            <div class="container">
                <div class="row  align-items-center">

                    <div class="col-md-12">
                    <?php
                        the_content(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eighteenB' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            )
                        );
                    ?>    
                    </div>

                </div> 
            </div>
            </article>

        <!-- Single Blog End -->

       
	
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
