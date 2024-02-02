<?php /** * * Simple component which spans the entire width of the page and allows for a WYSIWYG field. * * **/ ?>
<!-- Start Wat -->
<section id="products" class="products hm__products-sec">

    <div class="container-fluid">
        <h2 class="sec__title text-center mb_2vmax" data-aos="fade-up" data-aos-duration="1000"><?php echo get_sub_field('section_title_product___selector'); ?></h2>
    </div><!--/.container-fluid-->

    <?php $products___toshow = get_sub_field('products_toShow_tabs'); ?>

    <div class="product__tabs-outer">

        <img class="dotted_lines orange__vertical-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/orange__vertical-dots.svg" alt="">

        <div class="product__tabs-inner">
            <div class="product__tabs-nav">
                <ul class="nav" role="tablist">

                <?php
                    $i == 0;
                    foreach($products___toshow as $product):
                ?>

                    <?php $productData = get_field('product_tabs', $product->ID ); ?>
                    <li class="nav-item">
                        <a href="#<?php echo str_replace(' ', '-', strtolower($productData['product_tab_title'])); ?>" class="nav-link <?php if($i == 0){ echo 'active'; }?>" data-toggle="tab">
                            <i class="<?php echo $productData['product_tab_icon___class']; ?>"></i>
                            <span><?php echo $productData['product_tab_title']; ?></span>
                        </a>
                    </li>
                <?php
                    $i++;
                    endforeach;
                ?>

                </ul><!--/.product__tabs-nav-->
            </div><!--/.product__tabs-nav-->

            <div class="product__tabs-content">
                <div class="tab-content">

                <?php
                    $j == 0;
                    foreach($products___toshow as $product):
                ?>
                <?php $productData = get_field('product_tabs', $product->ID ); ?>
                <?php $productDetail = get_field('product_detail', $product->ID ); ?>
                <?php
                $card___Link = $productDetail['product___selector__cta_linkaction'];
                $link___url = $card___Link['url'];
                $link___title = $card___Link['title'];
                $link___target = $card___Link['target'] ? $card___Link['target'] : '_self';
                ?>
                    <div class="tab-pane fade <?php if($j == 0){ echo 'show active'; }?>" id="<?php echo str_replace(' ', '-', strtolower($productData['product_tab_title'])); ?>" role="tabpanel" data-bg="<?php echo $productDetail['product_featured_image']; ?>">
                        <div class="product__detail-pod">
                            <img src="<?php echo $productDetail['product_box_icon_image']; ?>" alt="">
                            <h3><?php echo get_the_title($product->ID); ?></h3>
                            <p><?php echo $productDetail['product_content']; ?></p>
                            <a href="<?php if(!empty($link___url)): echo $link___url; else: echo '#'; endif; ?>" class="button button-effect" target="<?php echo $link___target; ?>"><?php if(!empty($link___title)): echo $link___title; else: echo 'Start your Next Project'; endif; ?></a>
                       
                        </div><!--/.product__detail-pod-->
                    </div><!--/.tab-pane-->
                <?php
                    $j++;
                    endforeach;
                ?>

                </div><!--/.tab-content-->

            </div><!--/.product__tabs-content-->

        </div><!--/.product__tabs-inner-->

        <img class="dotted_lines lblue__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/lblue__horzontal-dots.svg" alt="">

    </div><!--/.product__tabs-outer-->

</section>
