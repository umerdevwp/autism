<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/
?>
<style>
.cover-background {position: relative !important; background-size: cover !important; overflow: hidden !important; background-position: center !important; background-repeat: no-repeat !important;padding: 12%;border-radius: 0 10rem 0 0;}
.background-position-50__50 {background-position: 50% 50% !important; }
   
</style>

<section class="cover-background background-position-50__50 top-space" style="background-image:url('<?php echo get_sub_field('banner_image'); ?>');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-large">
               
            </div>
        </div>
    </div>
</section>

