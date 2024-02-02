<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>

<!--/. Make the right choice section -->

<section id="boxes justify-content-end " class="boxes right__choice-sec">

    <div class="container">

        <h2 class="sec__title text-center mb_2vmax" data-aos="fade-up" data-aos-duration="1000"><?php echo get_sub_field('section_title_choose___us'); ?></h2>

        <div class="right__choice-boxes" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">

            <img class="dotted_lines green__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/green__horzontal-dots.svg" alt="">
            <img class="dotted_lines lorange__vertical-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/lorange__vertical-dots.svg" alt="">
            <img class="dotted_lines orange__horzontal-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/orange__horzontal-dots.svg" alt="">

            <div class="row">

                <?php
                $i = 0;
                if (have_rows('choose_us_boxes')):
                    while (have_rows('choose_us_boxes')) : the_row();
                        ?>

                        <div class="col-md-4 choose___card">
                            <div class="box <?php if ($i == 0) {
                                echo 'border-tl-radius';
                            } ?><?php if ($i == 2) {
                                echo 'border-br-radius';
                            } ?>">
                                <div class="box-image">
                                    <figure data-bg="<?php echo get_sub_field('box_image'); ?>"></figure>
                                </div><!--/.box-image-->

                                <div class="box-content">

                                    <div class="box_content-inner">
                                        <h4><?php echo get_sub_field('box_title'); ?></h4>
                                        <p><?php echo get_sub_field('box_content'); ?></p>
                                    </div><!--/.box_content-inner-->

                                </div><!--/.box-content-->

                            </div>
                            <div class="boxes__pod-btn <?php if ($i == 2) {
                                echo 'border-br-radius';
                            } ?>">
                                <?php $callToaction = get_sub_field('call_to_actionlink'); ?>
                                <a href="<?php echo $callToaction['button_actionlink']; ?>" class="button button-effect"><?php echo $callToaction['button_label']; ?></a>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                else :
                endif;
                ?>

            </div><!--/.row-->

        </div><!--/.right__choice-boxes-->

    </div><!--/.container-->

</section>

