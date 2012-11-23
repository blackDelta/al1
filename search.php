<?php
include("boot.php");
include("lib/db.class.php");
include("lib/auth.class.php");
include("lib/alerts.class.php");
include("lib/advertisement.class.php");
include("lib/user.class.php");

$alert = new Alerts();
$advert = new Advertisement($db);
$user_id = 0;
if($_REQUEST['action'] == 'serach'){

}
$page_title = "Result for Bugatti virion";
$page_heading = "Result for Bugatti virion";
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

    <!-- .post -->
    <div class="post-54 auto type-auto status-publish hentry custom-post-type clearfix" id="post-54">

        <div class="grid_3 clearfix alpha">
            <a href="" class="image-zoom main-thumb-zoom" target="_blank">
                <img src="assets/images/default-thumb1-220x146.jpg" class="attachment-main" alt="default-thumb"
                     title="default-thumb" height="146" width="220"> <span class="zoom-icon"></span>
            </a>
        </div>
        <div class="grid_5 clearfix omega">
            <h3><a href="">New Audi i8 Hybrid Consept 2011</a></h3>

            <div class="grid_3 clearfix alpha">
                <ul class="features">
                    <li><span>Make</span> : Audi / i8</li>
                    <li><span>Location</span> : California / Los Angeles</li>
                    <li><span>Mileage</span> : 2000</li>
                    <li><span>Year</span> : 2011</li>
                </ul>
            </div>
            <div class="grid_2 clearfix omega">
                <ul class="price">
                    <li><span>Price</span>175000 USD</li>
                </ul>
                <a href="" class="watchlist-button button">Add to Watchlist</a>
                <a href="details.php" class="button" target="_blank">View Details</a>
            </div>
        </div>

    </div>
    <!-- end - .post -->


    <!-- .post -->
    <div class="post-139 auto type-auto status-publish hentry custom-post-type clearfix" id="post-139">

        <div class="grid_3 clearfix alpha">
            <a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-quattro-2009-2-dr-cpe/"
               class="image-zoom main-thumb-zoom" target="_blank">
                <img src="assets/images/default-thumb10-220x146.jpg" class="attachment-main" alt="default-thumb"
                     title="default-thumb" height="146" width="220"> <span class="zoom-icon"></span>
            </a>
        </div>
        <div class="grid_5 clearfix omega">
            <h3><a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-quattro-2009-2-dr-cpe/">Used Audi Quattro
                2009 2 dr Cpe</a></h3>

            <div class="grid_3 clearfix alpha">
                <ul class="features">
                    <li><span>Make</span> : Audi / Quattro</li>
                    <li><span>Location</span> : New Jersey / Newark</li>
                    <li><span>Mileage</span> : 75000</li>
                    <li><span>Year</span> : 2009</li>
                </ul>
            </div>
            <div class="grid_2 clearfix omega">
                <ul class="price">
                    <li><span>Price</span>85000 USD</li>
                </ul>
                <a href="http://wp.inoart.com/demo/autotrader/auto/make_model/audi/?watchlist=139"
                   class="watchlist-button button">Add to Watchlist</a>
                <a href="details.php" class="button"
                   target="_blank">View Details</a>
            </div>
        </div>

    </div>
    <!-- end - .post -->


    <!-- .post -->
    <div class="post-155 auto type-auto status-publish hentry custom-post-type clearfix" id="post-155">

        <div class="grid_3 clearfix alpha">
            <a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-a1-2dr-cpe-2010/"
               class="image-zoom main-thumb-zoom" target="_blank">
                <img src="assets/images/default-thumb12-220x146.jpg" class="attachment-main" alt="default-thumb"
                     title="default-thumb" height="146" width="220"> <span class="zoom-icon"></span>
            </a>
        </div>
        <div class="grid_5 clearfix omega">
            <h3><a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-a1-2dr-cpe-2010/">Used Audi A1 2dr Cpe
                2010</a></h3>

            <div class="grid_3 clearfix alpha">
                <ul class="features">
                    <li><span>Make</span> : Audi / A1</li>
                    <li><span>Location</span> : Kentucky / Lexington</li>
                    <li><span>Mileage</span> : 56000</li>
                    <li><span>Year</span> : 2010</li>
                </ul>
            </div>
            <div class="grid_2 clearfix omega">
                <ul class="price">
                    <li><span>Price</span>35000 USD</li>
                </ul>
                <a href="http://wp.inoart.com/demo/autotrader/auto/make_model/audi/?watchlist=155"
                   class="watchlist-button button">Add to Watchlist</a>
                <a href="details.php" class="button"
                   target="_blank">View Details</a>
            </div>
        </div>

    </div>
    <!-- end - .post -->


    <!-- .post -->
    <div class="post-147 auto type-auto status-publish hentry custom-post-type clearfix" id="post-147">

        <div class="grid_3 clearfix alpha">
            <a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-a8-hybrid-4dr-cpe/"
               class="image-zoom main-thumb-zoom" target="_blank">
                <img src="assets/images/default-thumb11-220x146.jpg" class="attachment-main" alt="default-thumb"
                     title="default-thumb" height="146" width="220"> <span class="zoom-icon"></span>
            </a>
        </div>
        <div class="grid_5 clearfix omega">
            <h3><a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-a8-hybrid-4dr-cpe/">Used Audi A8 Hybrid 4dr
                Cpe</a></h3>

            <div class="grid_3 clearfix alpha">
                <ul class="features">
                    <li><span>Make</span> : Audi / A8</li>
                    <li><span>Location</span> : Minnesota / Saint Paul</li>
                    <li><span>Mileage</span> : 77000</li>
                    <li><span>Year</span> : 2011</li>
                </ul>
            </div>
            <div class="grid_2 clearfix omega">
                <ul class="price">
                    <li><span>Price</span>95000 USD</li>
                </ul>
                <a href="http://wp.inoart.com/demo/autotrader/auto/make_model/audi/?watchlist=147"
                   class="watchlist-button button">Add to Watchlist</a>
                <a href="details.php" class="button"
                   target="_blank">View Details</a>
            </div>
        </div>

    </div>
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