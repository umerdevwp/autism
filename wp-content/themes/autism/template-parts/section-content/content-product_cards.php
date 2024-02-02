<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/
?>
<section id="boxes justify-content-end " class="boxes right__choice-sec product__card">

<div class="container">

    <h2 class="sec__title text-center mb_2vmax aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"><?php echo get_sub_field('product__card____section_title'); ?></h2>


    <div class="right__choice-boxes">


            <img class="dotted_lines green__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/green__horzontal-dots.svg" alt="">
            <img class="dotted_lines cblue__verticle-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/lblue__horzontal-dots.svg" alt="">
            <img class="dotted_lines orange__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/orange__horzontal-dots.svg" alt="">


        <div class="row d-flex justify-content-center">

        <?php if( have_rows('card___product_cards') ): ?>

            <?php while( have_rows('card___product_cards') ): the_row(); 

                // vars
                $card___Label = get_sub_field('card_label');
                $card___Image = get_sub_field('card_image');
                $card___Link = get_sub_field('call_to_actionlink');
                $link___url = $card___Link['url'];
                $link___title = $card___Link['title'];
                $link___target = $card___Link['target'] ? $card___Link['target'] : '_self';

            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 product___card aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                        <div class="box">
                            <div class="box-image">
                                <figure data-bg="<?php echo $card___Image; ?>"></figure>
                            </div><!--/.box-image-->

                            <div class="box-content">
                                <div class="box_content-inner">
                                    <h4><?php echo $card___Label; ?></h4>
                                </div><!--/.box_content-inner-->
                            </div><!--/.box-content-->
                        </div>
                        <div class="boxes__pod-btn">
                            <a href="<?php if(!empty($link___url)): echo $link___url; else: echo '#'; endif; ?>" class="button button-effect" target="<?php echo $link___target; ?>"><?php if(!empty($link___title)): echo $link___title; else: echo 'Learn More'; endif; ?></a>
                        </div>
                    </div>
            <?php endwhile; ?>   
        <?php endif; ?>    
                  
        </div><!--/.row-->
    </div><!--/.right__choice-boxes-->
</div><!--/.container-->

</section>
