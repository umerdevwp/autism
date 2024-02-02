<?php

/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>


<?php

//echo '<pre>';print_r($heroSlides = get_sub_field('hero_slides')); echo '</pre>';
$heroSlides = get_sub_field('hero_slides');
$heroBoxContent = get_sub_field('hero_box');
$heroFormContent = get_sub_field('form_box_fields');

?>

<!-- Start Header -->

<section id="hero" class="hero background-withcolor hm__tophero-sec">


    <div class="hm__hero-wrap">

        <div class="hm__hero-left">

            <img class="dotted_lines" src="<?php echo get_template_directory_uri(); ?>/assets/images/orange__horzontal-dots.svg" alt="">

            <div id="hmHeroCrsl" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000">
                <div class="carousel-inner">

                <?php 
                    $count = 0; 
                    foreach($heroSlides['slider_item'] as $heroSlideitem): 
                ?>
                
                    <div class="carousel-item <?php if($count == '0'){ echo 'active'; } ?>" data-bg="<?php echo $heroSlideitem['slide_image']['url']; ?>"></div>
                
                <?php 
                    $count++; 
                    endforeach; 
                ?>

                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->

        </div><!--/.hm__hero-left-->


        <div class="hm__hero-right">

            <div class="hero__right-inner">
                <img src="" width="36" id="seasonIcon"/>
                <p id="seasonText" class="txt"></p>
              
                <h4><?php echo $heroFormContent['offer_tagline']; ?></h4>
                <h2><?php echo $heroFormContent['offer_discount']; ?></h2>
                <h3><?php echo $heroFormContent['offer_bottom_tagline']; ?></h3>

                <form class="hm__hero-form">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="inputName4" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputPhone" placeholder="Phone">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputZip" placeholder="ZIP">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select id="inputState" class="form-control">
                                <option>Type of Project</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button type="submit" class="button btn_block">Get Your Free Estimate</button>
                        </div>
                    </div>

                </form>

                <a href="#" class="button btn_block hero__estimate-link">Get Your Free Estimate</a>

            </div><!--/.hero__right-inner-->

        </div><!--/.hm__hero-right-->

    </div><!--/.hm__hero-wrap-->


    <div class="hero__text-pod">
        <div class="anim_container" data-aos="fade-zoom-in" data-aos-duration="800" data-aos-offset="300" data-aos-delay="100">
            <h2><?php echo $heroBoxContent['hero_box_title']; ?></h2>
            <p><?php echo $heroBoxContent['hero_box_content']; ?></p>

            <?php $CTA = $heroBoxContent['hero_call_to_actionlink']; ?>
            <a href="<?php echo $CTA['button_actionlink']; ?>" class="button"><?php echo $CTA['button_label']; ?></a>
        </div><!--/.anim_container-->

        <img class="dotted_lines lblue__vertical-dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/lblue__vertical-dots.svg" alt="">

    </div><!--/.hero__text-pod-->


</section>


<script>

    // ================================================
    // ========= Icon Change For Season ===============
    (function ($) {
        $(document).ready(function () {
            var currentTime = new Date();
            var month = currentTime.getMonth() + 1;
            var total = month;

//console.log('currentTime: ', currentTime);
//console.log('month: ', month);
//console.log('total: ', total);

            var myElement = document.querySelector("#maincontent");
            var textSelector = function (pId) {
                var textElement = document.getElementById(pId);
                return textElement;
            }

// Summer
            if (total >= 6 && total <= 8) {
                $("#seasonIcon").attr("src", "<?php echo $heroFormContent['form_icon_image']; ?>");
                textSelector('seasonText').innerHTML = '<?php echo $heroFormContent['hero___summer_tagline']; ?>';
            }
// Fall
            else if (total >= 9 && total <= 11) {
                $("#seasonIcon").attr("src", "<?php echo $heroFormContent['autum_icon_image']; ?>");
                textSelector('seasonText').innerHTML = '<?php echo $heroFormContent['hero___fall_tagline']; ?>';
            }
// Winter
            else if (total == 12 || total == 1 || total == 2) {
                $("#seasonIcon").attr("src", "<?php echo $heroFormContent['winter_icon_image']; ?>");
                textSelector('seasonText').innerHTML = '<?php echo $heroFormContent['hero___winter_tagline']; ?>';
            }
// Spring
            else if (total >= 2 && total <= 6) {
                $("#seasonIcon").attr("src", "<?php echo $heroFormContent['spring_icon_image']; ?>");
                textSelector('seasonText').innerHTML = '<?php echo $heroFormContent['hero___spring_tagline']; ?>';
            } else {
                $("#seasonIcon").attr("src", "<?php echo $heroFormContent['form_icon_image']; ?>");
                textSelector('seasonText').innerHTML = '<?php echo $heroFormContent['hero___summer_tagline']; ?>';
            }

        });

    }(jQuery));
</script>

