<?php
/**
 * The template for displaying tags pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Four_Seasons
 * @since 1.0.0
 */

get_header();
?>

	<?php if ( have_posts() ) : ?>	
                                       
<!-- Blog Section Start -->
         
<div class="article-section">
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
                    
                                
                                
                                <?php
                                        // Start the Loop.
                                        while ( have_posts() ) :
                                            the_post();                         
                                ?>
                                        <!-- Single Blog Card Start -->
                                        <div class="col-md-12">
                                        
                                            <article class="article-wrapper py-5">
                                                <div class="row  align-items-center">
                                                    <div class="col-md-7 order-sm-2 order-md-1">
                                                        <h4 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a></h4>
                                                        <div class="post-meta"><!-- <span class="post-date"><?php //echo get_the_date('F j, Y');?></span> --><span class="post-author"><?php echo get_the_author(); ?></span></div>
                                                        <p class="post-content">
                                                            <?php 
                                                                $excerpt = get_the_excerpt();
                                                                echo wp_trim_words( $excerpt , '20' ); 
                                                            ?>
                                                        </p>
                                                        <div class="read-more">
                                                            <a href="<?php echo get_permalink(); ?>" class="button"> Read full article </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 media-box order-sm-1 order-md-2 px-0">
                                                        <a href="<?php echo get_permalink(); ?>">
                                                            <?php the_post_thumbnail( 'full', ['class' => 'post-thumbnail img-fluid'] );?>
                                                        </a>
                                                    </div>
                                                </div> 
                                            </article>
                                        
                                        </div>
                                        <!-- Single Blog Card End -->

                                    <?php
                                        endwhile; // End of the loop.   
                                    ?>      
                                    <?php
                                    if(function_exists('wp_paginate')):
                                        wp_paginate();  
                                    endif;
                                    ?> 
                    
                </div>
                <div class="col-md-3">
                   
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
</div>
<!-- Blog Section End -->
                                        
                              		
	<?php endif; ?>
    
<?php
get_footer();