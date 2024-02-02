<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Four_Seasons
 * @since 1.0.0
 */

get_header();
?>
	<div class="w-95">
	<div class="row breadcrumbs-row">
            <div class="breadcrumbs" typeof="BreadcrumbList">
                <?php
                if(function_exists('bcn_display'))
                {
                        bcn_display();
                }?>
            </div>
            </div>
		<div class="row">
				<div class="col-md-9">

						<section id="primary" class="content-area">
							<main id="main" class="site-main">

								<?php

								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content/content', 'single' );
									?>
								
									
								<?php
								endwhile;  // End of the loop.
								?>
								


								<!-- Previous and Next Post -->
									<?php if(is_single()) : ?>
									<div class="single-navigation">
											<div class="item-left">
													 <?php previous_post_link( '<i class="fa fa-angle-left" aria-hidden="true"></i> %link', '%title'); ?>
											</div>
											<div class="item-right">
													<?php next_post_link( '%link <i class="fa fa-angle-right" aria-hidden="true"></i>', '%title' ); ?> 
											</div>
									</div>
									<?php endif; ?>
								<!-- /Previous and Next Post -->

								<?php
								/**
								 *  Output comments wrapper if it's a post, or if comments are open,
								 * or if there's a comment number – and check for password.
								 * */
								/* if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
									?>

									<div class="comments-wrapper section-inner">

										<?php comments_template(); ?>

									</div><!-- .comments-wrapper -->

									<?php
								} */
								?>
								

							</main><!-- #main -->
						</section><!-- #primary -->
				</div>
	
				<div class="col-md-3">
					
					<?php get_sidebar(); ?>
				</div>
		</div>
	</div>
<?php
get_footer();

?>
