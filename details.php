<?php
include("boot.php");
include("lib/db.class.php");
include("lib/auth.class.php");
include("lib/alerts.class.php");
include("lib/advertisement.class.php");
include("lib/user.class.php");
include("lib/general.php");

$alert = new Alerts();
$user = new Users($db);
$adv = new Advertisement($db);
$gen = new General($db);

$adv_id = null;
$car_result = false;
if (isset($_REQUEST['car']) and $_REQUEST['car'] > 0) {
    $adv_id = (int)request('car');

   $query = "SELECT
  `advertisement`.*,
  `vender`.`name`   AS `vender_name`,
  `model`.`name`    AS `model_name`,
`user`.`name` AS user_name,
`user`.`location` AS user_location,
`user`.`phone` AS user_phone

FROM `gpk_db`.`advertisement`,
  `gpk_db`.`vender`,
  `gpk_db`.`model`,
  `gpk_db`.`user`
WHERE `advertisement`.`vendor_id` = `vender`.`id`
    AND `advertisement`.`model_id` = `model`.`id`
    AND `advertisement`.`user_id` = `user`.`id`
    AND `advertisement`.`id` ='" . $adv_id . "'";
    $car_row = $db->fetch($db->execute_query($query, true));
     $images_query = "SELECT
    `ad_images`.`ad_id`
    , `ad_images`.`image_id`
    , `images`.`name_path`
    , `images`.`thumb_type`
FROM
    `gpk_db`.`ad_images`
    INNER JOIN `gpk_db`.`advertisement`
        ON (`ad_images`.`ad_id` = `advertisement`.`id`)
    INNER JOIN `gpk_db`.`images`
        ON (`ad_images`.`image_id` = `images`.`id`) where `ad_images`.`ad_id` = '".$adv_id."'";
    $image_result = $db->execute_query($images_query,true);
    while($img_row = $db->fetch($image_result))
    {
        $image_table[$img_row['thumb_type']][] = $img_row['name_path'];
    }
    //print_r($image_table['small']);die;
} else {
    die("Insufficient parameters sent. <a href=\"" . $_SERVER['HTTP_REFERER'] . "\">Go Back</a>");
}
$user_id = 0;

$page_title = "Result for Bugatti virion";
$page_heading = "Result for Bugatti virion";
$page_subheading = "Post your car for sale";
$page_description = "Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. ";
?>
<?php include("home/header.php"); ?>
<!-- #single-auto -->
<div id="single-auto" class="container">
<div class="container_12 clearfix">
<div class="grid_12"><h3 class="page-title">Ad Details</h3></div>

<!-- .single-auto-alert
<div class="single-auto-alert alert" style="display:none">
    <p></p>
</div>
<!-- end .single-auto-alert -->
<?php $alert->get_message(); ?>
<!-- #content -->
<div id="content" class="grid_8">

<!-- .post -->
<div class="post-114 auto type-auto status-publish hentry custom-post-type clearfix" id="post-114">

<h3 class="title"><?php echo $car_row['title']; ?></h3>

<!-- .auto-photos -->
<div class="auto-photos grid_8 alpha">

    <!-- .video-embed -->
    <!-- end - .video-embed -->

    <div class="post-image grid_5 alpha">
        <a href="" rel="prettyPhoto[gallery]" class="image-zoom single-thumb-zoom">
            <img width="375" height="230" src="<?php echo $image_table['large'][0]; ?>">
            <span class="zoom-icon"></span>
        </a>
        <div class="clear"></div>
    </div>

    <div class="post-thumbs grid_3 omega">
        <div class="thumb-container tj_container clearfix" style="visibility: visible;">
            <div class="tj_wrapper">
                <ul class="tj_gallery" style="position: relative;">
                    <?php for($i= 0; i<count($image_table['small']); $i++){ ?>
                    <li style="position: absolute; left: 0px; top: 0px;" class="tj_row_1">
                        <a href="" rel="" class="image-zoom slide-thumb-zoom">
                        <img width="90px" height="60px" src="<?php echo $image_table['small'][$i]; ?>">
                            <span class="zoom-icon"></span>
                        </a>
                    </li>
                        <?php } ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</div>
<!-- end - .auto-photos -->

<div class="grid_5 alpha">
    <!-- .entry-content -->
    <div class="entry-content">
        <h4 class="section-title section-line">Description</h4>
        <a href="" class="watchlist-button-single button">Add to Watchlist</a>
        <p><?php echo $car_row['description'];?></p>
    </div>
    <!-- end - .entry-content -->

    <!-- .video-embed -->
    <!-- end - .video-embed -->

    <!-- show map  -->
    <!-- end - show map  -->

    <!-- .seller-info -->
    <div class="seller-info">
        <h4 class="section-title section-line">Seller Info</h4>
        <ul>
            <li><span>Seller Name</span> : <?php echo $car_row['user_name']; ?></li>
            <li><span>Phone Number</span> :<?php echo $car_row['user_phone']; ?></li>
            <li><span>Location</span> : <?php echo $car_row['user_location']; ?></li>
            <li><span>Ad Date</span> : <?php echo date("M d, Y H:i:s",strtotime($car_row['created_date'])); ?></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- end - .seller-info -->

    <!-- .contact-seller -->
    <div class="contact-seller">
        <h4 class="section-title section-line">Contact to Seller</h4>

        <!-- .step-form -->
        <div class="step-form-alt">

            <!-- .step-form-wrap -->
            <div class="step-form-wrap">
                <form id="contactForm"   action="" method="post">

                    <div class="form-input clearfix">
                        <label for="sellername">Seller Name</label>
                        <input type="text" name="sellername" id="sellername" size="25" disabled="true" value="<?php echo $car_row['user_name']; ?>">
                    </div>

                    <div class="form-input clearfix">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" size="25" maxlength="40" value="">
                    </div>

                    <div class="form-input clearfix">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" size="35" maxlength="60" value="">
                    </div>

                    <div class="form-input clearfix">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" cols="50" rows="5"></textarea>
                    </div>

                    <div class="form-input clearfix">
                        <input type="hidden" name="contact_submit" id="contact_submit" value="true">
                        <input type="hidden" name="post_id" id="post_id" value="114">
                        <input type="submit" id="submitButton" name="submitButton" value="Send Message">
                    </div>

                </form>

                <div class="clear"></div>
            </div>
            <!-- .step-form-wrap -->
            <div class="clear"></div>
        </div>
        <!-- end - .step-form -->

    </div>
    <!-- end - .contact-seller -->
</div>
<div class="grid_3 omega">

    <!-- .auto-main-features -->
    <div class="auto-features">
        <h4 class="section-title section-line">Features</h4>
        <ul>
            <li><span>Price</span> : <?php echo $car_row['price']; ?></li>
            <li><span>Make</span> : <?php echo $car_row['vender_name']; ?></li>
            <li><span>Model</span> : <?php echo $car_row['model_name']; ?></li>
            <li><span>Condition</span> : <?php echo ucwords(str_replace("_"," ",$car_row['condition']));?></li>
            <li><span>Location</span> : <?php echo $car_row['reg_city']; ?></li>
            <li><span>Mileage</span> : <?php echo $car_row['mileage']; ?></li>
            <li><span>Year</span> : <?php echo $car_row['year']; ?></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- end - .auto-main-features -->

    <!-- auto features
    <div class="auto-features">
        <h4 class="section-title section-line">Car Accessories</h4>
        <ul>

            <li>
                <label class="label_check" for="chbx-air-conditioning">
                    <input type="checkbox" name="chbx-air-conditioning" id="chbx-air-conditioning"
                           checked="true" disabled="true">Air conditioning </label>
            </li>

            <li>
                <label class="label_check" for="chbx-bluetooth">
                    <input type="checkbox" name="chbx-bluetooth" id="chbx-bluetooth" disabled="true">Bluetooth
                </label>
            </li>

            <li>
                <label class="label_check" for="chbx-gps">
                    <input type="checkbox" name="chbx-gps" id="chbx-gps" disabled="true">GPS </label>
            </li>

            <li>
                <label class="label_check" for="chbx-heated-seats">
                    <input type="checkbox" name="chbx-heated-seats" id="chbx-heated-seats" checked="true"
                           disabled="true">Heated seats </label>
            </li>

            <li>
                <label class="label_check" for="chbx-power-seat">
                    <input type="checkbox" name="chbx-power-seat" id="chbx-power-seat" disabled="true">Power
                    seat </label>
            </li>

        </ul>
        <div class="clear"></div>
    </div>
    <div class="auto-features">
        <h4 class="section-title section-line">Security Options</h4>
        <ul>

            <li>
                <label class="label_check" for="chbx-abs">
                    <input type="checkbox" name="chbx-abs" id="chbx-abs" checked="true" disabled="true">ABS
                </label>
            </li>

            <li>
                <label class="label_check" for="chbx-airbag">
                    <input type="checkbox" name="chbx-airbag" id="chbx-airbag" disabled="true">Airbag </label>
            </li>

            <li>
                <label class="label_check" for="chbx-alarm">
                    <input type="checkbox" name="chbx-alarm" id="chbx-alarm" checked="true" disabled="true">Alarm
                </label>
            </li>

            <li>
                <label class="label_check" for="chbx-fog-lights">
                    <input type="checkbox" name="chbx-fog-lights" id="chbx-fog-lights" disabled="true">Fog
                    lights </label>
            </li>

            <li>
                <label class="label_check" for="chbx-heated-mirrors">
                    <input type="checkbox" name="chbx-heated-mirrors" id="chbx-heated-mirrors" checked="true"
                           disabled="true">Heated mirrors </label>
            </li>

            <li>
                <label class="label_check" for="chbx-tow-package">
                    <input type="checkbox" name="chbx-tow-package" id="chbx-tow-package" disabled="true">Tow
                    package </label>
            </li>

        </ul>
        <div class="clear"></div>
    </div>
    <!-- end - auto features -->


</div>

</div>
<!-- end - .post -->

</div>
<!-- end - #content -->
<?php include("home/rightbar.php"); ?>

<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<!-- end - #single-auto -->
<?php include("home/footer.php"); ?>