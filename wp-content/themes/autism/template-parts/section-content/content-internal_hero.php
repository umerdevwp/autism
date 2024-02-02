<?php

/**
 *
 * Simple component which spans the entire width of the page and allows for a WYSIWYG field.
 *
 *
 **/


?>



<?php

$internal___heroImage = get_sub_field('internal___hero_image');
$internal___heroFormContent = get_sub_field('internal___form_box_fields_copy'); 

?>

<!-- Start Header -->

<section id="hero" class="hero background-withcolor internal___hm__tophero-sec">


    <div class="internal___hm__hero-wrap">

        <div class="internal___hm__hero-left">
            <h1><?php echo get_the_title(); ?></h1>
            <div id="hmHeroCrsl" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bg="<?php echo $internal___heroImage; ?>"></div>
                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->

        </div><!--/.hm__hero-left-->


        <div class="internal___hm__hero-right">

            <div class="internal___hero__right-inner">

                <img src="" width="36" id="seasonIcon"/>
               
               <p id="seasonText" class="txt"></p>

                <h4><?php echo $internal___heroFormContent['offer_tagline']; ?></h4>
                <h2><?php echo $internal___heroFormContent['offer_discount']; ?></h2>
                <h3><?php echo $internal___heroFormContent['offer_bottom_tagline']; ?></h3>

                <form class="internal___hm__hero-form">
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
                            <input type="email" class="form-control" id="inputZip" placeholder="Zip">
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
                        <div class="col-md-12">
                            <button type="submit" class="button btn_block">Get Your Free Estimate</button>
                        </div>
                    </div>

                </form>

                <a href="#" class="button btn_block hero__estimate-link">Get Your Free Estimate</a>

            </div><!--/.internal___hero__right-inner-->

        </div><!--/.internal___hm__hero-right-->

    </div><!--/.internal___hm__hero-wrap-->

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
var textSelector = function(pId) {
  var textElement = document.getElementById(pId);
  return textElement;
}

// Summer
if (total >= 6 && total <= 8)
{
$("#seasonIcon").attr("src", "<?php echo $internal___heroFormContent['form_icon_image']; ?>");
textSelector('seasonText').innerHTML = '<?php echo $internal___heroFormContent['summer_icon_tagline']; ?>';
}
// Fall
else if (total >= 9 && total <= 11)
{
$("#seasonIcon").attr("src", "<?php echo $internal___heroFormContent['autum_icon_image']; ?>");
textSelector('seasonText').innerHTML = '<?php echo $internal___heroFormContent['fall_icon_tagline']; ?>';
}
// Winter
else if (total == 12 || total == 1 || total == 2)
{
  $("#seasonIcon").attr("src", "<?php echo $internal___heroFormContent['winter_icon_image']; ?>");
  textSelector('seasonText').innerHTML = '<?php echo $internal___heroFormContent['winter_icon_tagline']; ?>';
}
// Spring
else if (total >= 2 && total <= 6)
{
  $("#seasonIcon").attr("src", "<?php echo $internal___heroFormContent['spring_icon_image']; ?>");
  textSelector('seasonText').innerHTML = '<?php echo $internal___heroFormContent['form_icon_tagline']; ?>';
}
else
{
  $("#seasonIcon").attr("src", "<?php echo $internal___heroFormContent['form_icon_image']; ?>");
  textSelector('seasonText').innerHTML = '<?php echo $internal___heroFormContent['summer_icon_tagline']; ?>';
}

});

}(jQuery));
</script>

