<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- Single Blog Start -->

									
									
            <article class="article-wrapper py-5">
                <div class="row  align-items-center">
                <div class="col-md-12">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php the_post_thumbnail( 'full', ['class' => 'post-thumbnail img-fluid'] );?>
                        </a>
                    </div>

                    <div class="col-md-12">
                        <h1 class="post-title"><?php echo get_the_title(); ?></h1>
                        <p class="post-content">
                            <?php echo get_the_content(); ?>
                        </p>
                        <div class="post-meta"><!-- <span class="post-date"><?php //echo get_the_date('F j, Y');?></span> --><span class="post-author"><?php echo get_the_author(); ?></span></div>
                    </div>

                </div> 
            </article>

									<!-- Single Blog End -->
</article><!-- #post-<?php the_ID(); ?> -->
