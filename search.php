<?php
include("boot.php");
include("lib/db.class.php");
include("lib/auth.class.php");
include("lib/alerts.class.php");
include("lib/advertisement.class.php");
include("lib/user.class.php");
include("lib/general.php");

$alert = new Alerts();
$adv = new Advertisement($db);
$gen = new General($db);

$user_id = 0;
$query = "SELECT
  `advertisement`.`id`,
  `advertisement`.`reg_city`,
  `advertisement`.`title`,
  `model`.`name`              AS model,
  `vender`.`name`             AS vendor,
  `advertisement`.`price`,
  `advertisement`.`year`,
  `advertisement`.`mileage`,
  `advertisement`.`title`,
  `advertisement`.`reg_city`,
  `ad_images`.`image` AS image
FROM `gpk_db`.`ad_images`
  INNER JOIN `gpk_db`.`advertisement`
    ON (`ad_images`.`ad_id` = `advertisement`.`id`)
  INNER JOIN `gpk_db`.`vender`
    ON (`advertisement`.`vendor_id` = `vender`.`id`)
  INNER JOIN `gpk_db`.`model`
    ON (`advertisement`.`model_id` = `model`.`id`)
      AND (`model`.`vender_id` = `vender`.`id`)";

if($_REQUEST['action'] == 'search'){
    $make = request('s_make_model');
    $model = request('s_make_modelsub');
    $city = request('s_city');
    $price_min = request('price_min');
    $price_max = request('price_max');
    $where = " WHERE 1 ";
    if($make)
    {
        $where .= " AND `advertisement`.`vendor_id` = '".$make."'";
    }
    if($model)
    {
        $where .= " AND `advertisement`.`model_id` = '".$model."' ";
    }
    if($city)
    {
        $where .= " AND `advertisement`.`reg_city` = '".$city."' ";
    }
    if($price_max)
    {
        $where .= " AND `advertisement`.`price` >= ".$price_min." ";
    }
    if($price_min)
    {
       $where .= " AND `advertisement`.`price` <= ".$price_max." ";
    }

    $search_result = $db->execute_query($query.$where,true);
}else{

}

$page_title = "Result for Bugatti virion";
if(isset($make) and $make != "")
{
    $make_name = $adv->get_vendor($make);
    if(isset($model) and $model != "")
    {
        $model_name = $adv->get_model($model);
        $page_heading = "Result for ".$make_name." ".$model_name;
    }else{
        $page_heading = "Result for ".$make_name;
    }
}else{
    $page_heading = "Search Result";
}

$page_subheading = "Post your car for sale";
$page_description = "Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. ";
?>
<?php include("home/header.php"); ?>
<!-- #taxonomy -->
<div id="taxonomy" class="container">
<div class="container_12 clearfix">
<div class="grid_12"><h3 class="page-title"><?php echo $page_heading ?></h3></div>

<!-- #content -->
<div id="content" class="grid_8 listing">
    <?php
    /*
     * start of loop
    */
    if(is_resource($search_result)){
        while($car_row = $db->fetch($search_result)){
            ?>
    <!-- .post -->
    <div class="post-54 auto type-auto status-publish hentry custom-post-type clearfix" id="post-54">
        <div class="grid_3 clearfix alpha">
            <a href="" class="image-zoom main-thumb-zoom" target="_blank">
                <img src="<?php echo $car_row['image']; ?>" width="222px" height="146px" class="attachment-main" alt="default-thumb"  title="default-thumb" height="146" width="220">
                <span class="zoom-icon"></span>
            </a>
        </div>
        <div class="grid_5 clearfix omega">
            <h3><a href="details.php?car=<?php echo $car_row['id']; ?>"><?php echo $car_row['title']; ?></a></h3>

            <div class="grid_3 clearfix alpha">
                <ul class="features">
                    <li><span>Make</span> : <?php echo $car_row['vendor'] ?></li>
                    <li><span>Location</span> : <?php echo $car_row['reg_city']; ?></li>
                    <li><span>Mileage</span> : <?php echo $car_row['mileage']; ?></li>
                    <li><span>Year</span> : <?php echo $car_row['year']; ?></li>
                </ul>
            </div>
            <div class="grid_2 clearfix omega">
                <ul class="price">
                    <li><span>Price</span><?php echo $car_row['price']; ?> USD</li>
                </ul>
                <a href="" class="watchlist-button button">Add to Watchlist</a>
                <a href="details.php?car=<?php echo $car_row['id']; ?>" class="button" target="_blank">View Details</a>
            </div>
        </div>
    </div>
    <?php
        }
    } else {
        echo "<p class='alert-warning'>Result not found</p>";
     }
    /*
     * end of loop
     */
    ?>
    <!-- end - .post -->

    <!-- .listing-paging -->
    <div class="listing-paging">
    </div>
    <!-- end - .listing-paging -->

</div>
<!-- end - #content -->
<?php include("home/rightbar.php"); ?>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<!-- end - #taxonomy -->
<?php include("home/footer.php") ?>