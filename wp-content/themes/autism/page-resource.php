<?php
/**
 * Template Name: Page Resources
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Autism_answers
 * @since 1.0.0
 */

get_header();
?>

<div class="main">
		<div class="main-head" style="background-color: #950714">
			<div style="background-color: #950714">
				<!-- <img src="assets/images/temp/main-image-1.jpg" height="209" width="1800" alt="">-->
			</div><!-- /.main-head-image fullscreener -->

			<div class="main-head-content">
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell small-12">
							<h1 class="main-title">Resources</h1><!-- /.main-title -->
							
							<ul class="breadcrumbs">
								<li>
									<a href="#">Home</a>
								</li>
							
								<li class="current">
									<a href="#">Resources</a>
								</li><!-- /.current -->
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.cell small-12 -->
					</div>
				</div><!-- /.row -->
			</div><!-- /.main-head-content -->
		</div><!-- /.main-head -->

		<div class="main-body">
			<section class="section-events">
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell small-12" >
							<div class="grid-x grid-margin-x">
						
						<?php
							$terms = get_terms( array(
										'taxonomy' => 'resource_types',
										'hide_empty' => false,
									) );
							
								$count = count( $terms );
								if ( $count > 0 ) {
									foreach ( $terms as $term ) {
									$term_link = get_term_link( $term );		
						?>

								<div class="cell small-12 medium-6 large-4">
									<div class="event" itemscope itemtype="https://schema.org/Event">
										<div class="event-image">
											<a href="<?php echo $term_link; ?>">
												<img src="<?php echo get_field('resource___type__image', $term->taxonomy . '_' . $term->term_id); ?>" height="205" width="370" alt="" itemprop="image">
											</a>
										</div><!-- /.event-image -->

										<h4 class="event-title">
											<a href="<?php echo $term_link; ?>" itemprop="name"><?php echo  $term->name; ?></a>
										</h4><!-- /.event-title -->

									</div><!-- /.event -->
								</div>
								
						<?php
									}
								}
						?>


							</div>

						</div><!-- /.cell small-12 -->
					</div>
				</div><!-- /.row -->
			</section><!-- /.section-events -->
		</div><!-- /.main-body -->
	</div><!-- /.main -->
    
<?php
get_footer();
