<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/
?>

<section class="hm__page-content-sec">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <?php
               $pageID = get_sub_field('content_page'); 
                   // foreach($pageID as $ID):
                    ?>
                    
                    <?php
                   // $page_object = get_post( $ID );
                    //echo $page_object->post_content;
                    ?> 

                    <?php 
                    $args = array(
                            'post_type' => 'content-blocks',
                            'p' => ''. $pageID .''
                        );
                    $the_query = new WP_Query( $args );
                    if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; 
                    wp_reset_postdata();
                    ?>   
                    
                <?php
               // endforeach;
                ?>      
            </div>
        </div>
    </div>
</section><!--/.hm__deals-sec-->

