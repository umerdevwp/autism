<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Four_Seasons
 * @since 1.0.0
 */

get_header();
?>
    <div class="container">
	<div class="row">
            <div class="breadcrumbs" typeof="BreadcrumbList">
                <?php
                if(function_exists('bcn_display'))
                {
                        bcn_display();
                }?>
            </div>
            </div>
		<div class="row">
				<div class="col-md-12">

						<section id="primary" class="content-area">
							<main id="main" class="site-main">

                            <article class="article-wrapper py-5">
                                <div class="row  align-items-center">

                                    <div class="col-md-12">
                                    <div class="error-wrapper text-center">
                                            <div class="error-text">
                                                <h1>404</h1>
                                                <h2>Opps! PAGE NOT FOUND</h2>
                                                <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                                            </div>
                                            
                                            <div class="error-button">
                                                <a href="<?php echo get_home_url();?>">Back to home</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                            </article>

							</main><!-- #main -->
						</section><!-- #primary -->
				</div>
	
		</div>
	</div>
<?php
get_footer();
