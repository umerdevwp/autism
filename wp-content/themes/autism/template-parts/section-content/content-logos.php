<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/
?>
<?php $trust___logo__images = get_sub_field('logo_gallery'); ?>
<section class="hm__trust-sec">

    <div class="trust__logos-wrap">

        <div class="owl-carousel trust__logo-carousel" id="trustLogos">

            

            <?php foreach($trust___logo__images as $trust___logo__image_item): ?>

                <div class="item">
                    <figure data-bg="<?php echo $trust___logo__image_item['url']; ?>"></figure>
                </div><!--/.item-->
                
            <?php endforeach; ?>
           

           

        </div><!--/.owl-carousel-->

    </div><!--/.trust__logos-wrap-->

</section><!--/.hm__trust-sec-->
