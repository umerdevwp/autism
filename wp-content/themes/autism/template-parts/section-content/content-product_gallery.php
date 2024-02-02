<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>
<?php $galleryID = get_sub_field('select_filterables_toShow_gallery'); ?>

<section id="portfolio" class="position-relative product__gallery-sec">

    <div class="container">
        <div class="text-center">
            <img class="mb_1rem" src="<?php echo get_template_directory_uri(); ?>/assets/images/seo-icon.jpg "/>
            <h2 class="sec__title mb_2vmax" data-aos="fade-up" data-aos-duration="1000">Explore Your Possibilities</h2>
        </div><!--/.text-center-->
    </div><!--/.container-->


    <div class="gallery__grid-outer" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="800">

        <div class="gallery__grid-nav">
            <div class="gallery__gridnav-inner">
                <ul class="nav" role="tablist">                   

                    <?php 
                        $counter == 0;
                        foreach($galleryID as $galleryitemID): 
                        //$tab__href_ID = ;
                       $tab__name = get_field('gallery__tab_name', $galleryitemID);
                        global $wp_query;
                        $current___page_name = ucfirst($wp_query->queried_object->post_title);
                    ?>

                    <li><a id="pormotion_check" class="
                    <?php 
                        if(is_page(15) && $tab__name == 'All'){ echo 'active'; }
                        
                        elseif(!is_home() && is_page(672) && $tab__name == 'All'){ echo 'active'; }
                        elseif(!is_home() && is_page(1501) && $tab__name == 'All'){ echo 'active'; }
                        elseif(!is_home() && is_page(1371) && $tab__name == 'All'){ echo 'active'; }
                        elseif(!is_home() && is_page(1418) && $tab__name == 'All'){ echo 'active'; }
                        elseif(!is_home() && is_page(1501) && $tab__name == 'All'){ echo 'active'; }

                        elseif(!is_home() && is_page(712) && $tab__name == $current___page_name ){ echo 'active'; }
                        elseif(!is_home() && is_page(557) && $tab__name == $current___page_name){ echo 'active'; }
                        elseif(!is_home() && is_page(713) && $tab__name == $current___page_name){ echo 'active'; }
                        elseif(!is_home() && is_page(714) && $tab__name == $current___page_name){ echo 'active'; }
                        elseif(!is_home() && is_page(747) && $tab__name == $current___page_name){ echo 'active'; }
                        elseif(!is_home() && is_page(721) && $tab__name == $current___page_name){ echo 'active'; }  
                        
                        elseif(!is_home() && is_page(1269) && $tab__name == "Windows" ){ echo 'active'; }
                        elseif(!is_home() && is_page(1253) && $tab__name == "Windows"){ echo 'active'; }
                        elseif(!is_home() && is_page(1018) && $tab__name == "Windows"){ echo 'active'; }
                        elseif(!is_home() && is_page(1303) && $tab__name == "Windows"){ echo 'active'; }
                        elseif(!is_home() && is_page(1328) && $tab__name == "Windows"){ echo 'active'; }
                        elseif(!is_home() && is_page(1292) && $tab__name == "Windows"){ echo 'active'; }
                        
                        elseif(!is_home() && is_page(1110) && $tab__name == 'Bathrooms'){ echo 'active'; }
                        elseif(!is_home() && is_page(1226) && $tab__name == 'Bathrooms'){ echo 'active'; }
                        elseif(!is_home() && is_page(1187) && $tab__name == 'Bathrooms'){ echo 'active'; }
                        elseif(!is_home() && is_page(1230) && $tab__name == 'Bathrooms'){ echo 'active'; }
                        elseif(!is_home() && is_page(1234) && $tab__name == 'Bathrooms'){ echo 'active'; }
                        elseif(!is_home() && is_page(1238) && $tab__name == 'Bathrooms'){ echo 'active'; }

                        elseif(!is_home() && is_page(1220) && $tab__name == 'Outdoor Living' ){ echo 'show active'; }
                        elseif(!is_home() && is_page(1165) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1169) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1105) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1109) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1785) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1793) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1797) && $tab__name == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1789) && $tab__name == 'Outdoor Living'){ echo 'show active'; }

                        elseif(!is_home() && is_page(1195) && $tab__name == 'Siding'){ echo 'active'; }
                        elseif(!is_home() && is_page(1197) && $tab__name == 'Siding'){ echo 'active'; } 
                        
                        elseif(!is_home() && is_page(1477) && $tab__name == 'Gutters'){ echo 'active'; }
                        elseif(!is_home() && is_page(1483) && $tab__name == 'Gutters'){ echo 'active'; } 
                        
                        elseif(!is_home() && is_page(1243) && $tab__name == "Doors"){ echo 'active'; }
                        elseif(!is_home() && is_page(1246) && $tab__name == 'Doors'){ echo 'active'; } 
                    
                    ?>
                    " href="#gall__<?php echo str_replace(' ', '-', strtolower(get_the_title($galleryitemID))); ?>" data-toggle="tab" aria-selected="true"><?php echo get_field('gallery__tab_name', $galleryitemID); ?></a></li>

                    <?php
                        $counter++;
                        endforeach; 
                    ?>
                </ul>
            </div><!--/.gallery__gridnav-inner-->
        </div><!--/.gallery__grid-nav-->


        <div class="gallery__grid-inner">

            <div class="tab-content">
                
            <?php 
                $counters == 0;
                foreach($galleryID as $gallerypaneitemID): 
                    //$pane__href_ID = ;
                     $tab__name__pane = get_field('gallery__tab_name', $gallerypaneitemID);
                    global $wp_query;
                    //echo '<pre>';
                    //print_r($wp_query);
                    //echo '</pre>'; 
                    $current___page_name__pane = ucfirst($wp_query->queried_object->post_title);
            ?>
                <div class="tab-pane fade 
                    <?php 
                        if(is_page(15) && $tab__name__pane == 'All'){ echo 'show active'; }

                        elseif(!is_home() && is_page(672) && $tab__name__pane == 'All'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1501) && $tab__name__pane == 'All'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1371) && $tab__name__pane == 'All'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1418) && $tab__name__pane == 'All'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1501) && $tab__name__pane == 'All'){ echo 'show active'; }

                        elseif(!is_home() && is_page(712) && $tab__name__pane == $current___page_name__pane){ echo 'show active'; }
                        elseif(!is_home() && is_page(557) && $tab__name__pane == $current___page_name__pane){ echo 'show active'; }
                        elseif(!is_home() && is_page(713) && $tab__name__pane == $current___page_name__pane){ echo 'show active'; }
                        elseif(!is_home() && is_page(714) && $tab__name__pane == $current___page_name__pane){ echo 'show active'; }
                        elseif(!is_home() && is_page(747) && $tab__name__pane == $current___page_name__pane){ echo 'show active'; }
                        elseif(!is_home() && is_page(721) && $tab__name__pane == $current___page_name__pane){ echo 'show active'; }
                        
                        elseif(!is_home() && is_page(1269) && $tab__name__pane == "Windows" ){ echo 'show active'; }
                        elseif(!is_home() && is_page(1253) && $tab__name__pane == "Windows"){ echo 'show active'; }
                        elseif(!is_home() && is_page(1018) && $tab__name__pane == "Windows"){ echo 'show active'; }
                        elseif(!is_home() && is_page(1303) && $tab__name__pane == "Windows"){ echo 'show active'; }
                        elseif(!is_home() && is_page(1328) && $tab__name__pane == "Windows"){ echo 'show active'; }
                        elseif(!is_home() && is_page(1292) && $tab__name__pane == "Windows"){ echo 'show active'; }
                        
                        elseif(!is_home() && is_page(1110) && $tab__name__pane == 'Bathrooms' ){ echo 'show active'; }
                        elseif(!is_home() && is_page(1226) && $tab__name__pane == 'Bathrooms'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1187) && $tab__name__pane == 'Bathrooms'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1230) && $tab__name__pane == 'Bathrooms'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1234) && $tab__name__pane == 'Bathrooms'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1238) && $tab__name__pane == 'Bathrooms'){ echo 'show active'; }

                        elseif(!is_home() && is_page(1220) && $tab__name__pane == 'Outdoor Living' ){ echo 'show active'; }
                        elseif(!is_home() && is_page(1165) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1169) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1105) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1109) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1785) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1793) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1797) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1789) && $tab__name__pane == 'Outdoor Living'){ echo 'show active'; }

                        elseif(!is_home() && is_page(1195) && $tab__name__pane == 'Siding'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1197) && $tab__name__pane == 'Siding'){ echo 'show active'; } 
                        
                        elseif(!is_home() && is_page(1477) && $tab__name__pane == 'Gutters'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1483) && $tab__name__pane == 'Gutters'){ echo 'show active'; } 
                        
                        elseif(!is_home() && is_page(1243) && $tab__name__pane == 'Doors'){ echo 'show active'; }
                        elseif(!is_home() && is_page(1246) && $tab__name__pane == 'Doors'){ echo 'show active'; } 
                        
                    
                    ?>
                " id="gall__<?php echo str_replace(' ', '-', strtolower(get_the_title($gallerypaneitemID))); ?>" role="tabpanel">
                    <div class="gallery__grid-row">

                    <?php $gallery___column__1 = get_field('gallery_column_1', $gallerypaneitemID); ?>
                        <div class="grid_col1">

                        <?php foreach($gallery___column__1 as $colum___1__item): ?>
                            <figure>
                                <a class="opens" data-fancybox="<?php echo str_replace(' ', '-', strtolower($tab__name__pane));?>"
                                   href="<?php echo $colum___1__item; ?>"
                                   data-bg="<?php echo $colum___1__item; ?>"></a>
                            </figure>
                        <?php endforeach; ?>

                        </div><!--/.grid_col1-->

                        <?php $gallery___column__2 = get_field('gallery_column_2', $gallerypaneitemID); ?>
                        <div class="grid_col2">

                        <?php foreach($gallery___column__2 as $colum___2__item): ?>
                            <figure>
                                <a class="opens" data-fancybox="<?php echo str_replace(' ', '-', strtolower($tab__name__pane));?>"
                                   href="<?php echo $colum___2__item; ?>"
                                   data-bg="<?php echo $colum___2__item; ?>"></a>
                            </figure>
                        <?php endforeach; ?>

                        </div><!--/.grid_col2-->

                        <?php $gallery___column__3 = get_field('gallery_column_3', $gallerypaneitemID); ?>
                        <div class="grid_col3">

                        <?php foreach($gallery___column__3 as $colum___3__item): ?>
                            <figure>
                                <a class="opens" data-fancybox="<?php echo str_replace(' ', '-', strtolower($tab__name__pane));?>"
                                   href="<?php echo $colum___3__item; ?>"
                                   data-bg="<?php echo $colum___3__item; ?>"></a>
                            </figure>
                        <?php endforeach; ?>
                        
                        </div><!--/.grid_col3-->

                        <?php $gallery___column__4 = get_field('gallery_column_4', $gallerypaneitemID); ?>
                        <div class="grid_col4">

                        <?php foreach($gallery___column__4 as $colum___4__item): ?>
                            <figure>
                                <a class="opens" data-fancybox="<?php echo str_replace(' ', '-', strtolower($tab__name__pane));?>"
                                   href="<?php echo $colum___4__item; ?>"
                                   data-bg="<?php echo $colum___4__item; ?>"></a>
                            </figure>
                        <?php endforeach;  ?>
                           
                        </div><!--/.grid_col4-->

                    </div><!--/.gallery__grid-row-->
                </div><!--/.tab-pane-->
            
            <?php
                $counters++;
                endforeach; 
            ?>



                
            </div><!--/.tab-content-->

        </div><!--/.gallery__grid-inner-->

    </div><!--/.gallery__grid-outer-->

</section>
