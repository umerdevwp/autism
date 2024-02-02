<?php
/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/

?>

<section class="hm__deals-sec">

    <div class="hm__deals-inner" data-bg="<?php echo get_sub_field('deals_background_image'); ?>" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="800">

        <div class="hm__deal-content" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
            <img src="" id="dealseasonIcon"/>
            <p id="dealseasonOne" class="txt"></p>
            <p id="dealseasonTwo" class="txt"></p>
            <p id="dealseasonThree" class="txt"></p>
            <p id="dealseasonFour" class="txt"></p>
            <p id="dealseasonFive" class="txt"></p>
            <h4><?php echo get_sub_field('box_deal_caption'); ?></h4>
            <h2><?php echo get_sub_field('box_deal_offer'); ?></h2>
            <h3><?php echo get_sub_field('box_discount'); ?></h3>
            <?php $CTA = get_sub_field('call_to_action'); ?>
            <a href="<?php echo $CTA['button_action_link']; ?>" class="button "><?php echo $CTA['button_label']; ?></a>
        </div><!--/.hm__deal-content-->

    </div><!--/.hm__deals-inner-->

</section><!--/.hm__deals-sec-->


<?php $seasons = get_sub_field('delas___box_seasons'); ?>

<script type="text/javascript">
// ================================================
// ========= Icon Change For Season ===============
(function ($) {
$(document).ready(function () {
var currentTime = new Date();
var month = currentTime.getMonth() + 1;
var total = month;

var textSelector = function(pId) {
  var textElement = document.getElementById(pId);
  return textElement;
}

// Summer
if (total >= 6 && total <= 8)
{
$("#dealseasonIcon").attr("src", "<?php echo $seasons['summer_icon___deals']; ?>");
textSelector('dealseasonOne').innerHTML = '<?php echo $seasons['summer_caption___deals']; ?>';
}
// Fall
else if (total >= 9 && total <= 11)
{
$("#dealseasonIcon").attr("src", "<?php echo $seasons['fall_icon___deals']; ?>");
textSelector('dealseasonTwo').innerHTML = '<?php echo $seasons['fall_caption___deals']; ?>';
}
// Winter
else if (total == 12 || total == 1 || total == 2)
{
  $("#dealseasonIcon").attr("src", "<?php echo $seasons['winter_icon___deals']; ?>");
  textSelector('dealseasonThree').innerHTML = '<?php echo $seasons['winter_caption___deals']; ?>';
}
// Spring
else if (total >= 2 && total <= 6)
{
  $("#dealseasonIcon").attr("src", "<?php echo $seasons['spring_icon___deals']; ?>");
  textSelector('dealseasonFour').innerHTML = '<?php echo $seasons['spring_caption___deals']; ?>';
}
else
{
  $("#dealseasonIcon").attr("src", "<?php echo $seasons['summer_icon___deals']; ?>");
  textSelector('dealseasonFive').innerHTML = '<?php echo $seasons['summer_caption___deals']; ?>';
}

});

}(jQuery));
</script>