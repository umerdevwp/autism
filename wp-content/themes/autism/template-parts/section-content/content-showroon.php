<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>
<?php $box___Position = get_sub_field('box_position___showroom'); ?>
<style id="showroom-dynamic-ui" type="text/css">
<?php if($box___Position == 'Center'): ?>
/* Center*/
.showroom__text-pod {
    margin-right: auto;
}
.shrm_shapes {
    left: auto;
    right: -20%;
}
<?php
endif;

if($box___Position == 'Right'): 
?>
/*Right */
.showroom__text-pod {
    margin-right: 0;
}
.shrm_shapes {
    left: 0;
    right: auto;
}

<?php
endif;

if($box___Position == 'Left'): 
?>
.showroom__text-pod {
    margin-right: auto;
    margin-left: 0;
}
.shrm_shapes {
    left: auto;
    right: -25%;
}
<?php
endif;
?>
</style>
<section class="hm__showroom-sec  ">
<div class="<?php if(is_home()){echo 'parallax-showBG';} ?>">
    <figure class="background-fixed" data-bg="<?php echo get_sub_field('showroom_background_image'); ?>"></figure>
</div>
    <div class="showroom__text-pod <?php if(is_home()){echo 'parallax-showPOD';} ?>">
        <div class="showroom__pod-inner">
            <div ><!-- data-aos="fade-zoom-in" data-aos-duration="1000" data-aos-delay="100" -->
                <h2><?php echo get_sub_field('box_title'); ?></h2>
                <p><?php echo get_sub_field('box_content'); ?></p>
                
                <?php $CTA = get_sub_field('call_to_action'); ?>
                <a href="<?php echo $CTA['button_action_link'];?>" class="button"><?php echo $CTA['button_label'];?></a>
            </div>
        </div><!--/.showroom__pod-inner-->

        <img class="shrm_shapes " src="<?php echo get_sub_field('showroom_background_shape_image'); ?>" alt="">

    </div><!--/.showroom__text-pod-->

</section><!--/.hm__showroom-sec-->


