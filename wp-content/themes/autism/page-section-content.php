<?php
/**
 * Template Name: Section Content
 *
 * This template displays all flexible content pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bay_East_2019
 */

get_header();
?>

	<?php //get_template_part( 'template-parts/hero' );?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
					
					if(have_rows('section_type', get_the_ID())):
						while(have_rows('section_type')): the_row();
								include(locate_template('template-parts/section-content/content-' . get_row_layout() . '.php'));
						endwhile;
					endif;

			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
