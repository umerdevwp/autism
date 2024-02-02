<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Four_Seasons
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



								<div class="cell small-12 medium-6 large-4">
									<div class="event" itemscope itemtype="https://schema.org/Event">
										<div class="event-image">
											<a href="resource-detail.html">
												<img src="/autism/assets/images/advocacy-resource.png" height="205" width="370" alt="" itemprop="image">
											</a>
										</div><!-- /.event-image -->

										<h4 class="event-title">
											<a href="resource-detail.html" itemprop="name">Advocacy</a>
										</h4><!-- /.event-title -->

									</div><!-- /.event -->
								</div>
								
								<?php
                                $args = array(
                                'taxonomy' => 'resource_types',
                                'orderby' => 'name',
                                'parent' => 0
                                );
                                $categories = get_categories( $args );
                                foreach ( $categories as $category ) {
                                    echo '' . $category->name . '
                                ';
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
