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
$auth = new Auth($db);

$user_id = $auth->get_id();

$page_title = "Home - Your car market";
$page_heading = "Sell Your Car";
include("home/header.php");
include("home/slider.php");
?>

<div class="container">
    <div class="container_12 clearfix">

        <!-- #browser -->
        <div id="browser" class="grid_8">
            <h4 class="section-title section-line">Browse Cars</h4>

            <div class="grid_2 alpha browser-cat">
                <h5>Make</h5>
                <ul>
                    <li><a href="#">Audi</a></li>
                    <li><a href="#">Alfa Romeo</a></li>
                    <li><a href="#">BMW</a></li>
                    <li><a href="#">Chevrolet</a></li>
                    <li><a href="#">Ford</a></li>
                    <li><a href="#">Toyota</a></li>
                    <li><a href="#">Volkswagen</a></li>
                    <li><a href="#">Honda</a></li>
                    <li><a href="#">Mercedes</a></li>
                    <li><a href="#">Subaru</a></li>
                    <li><a href="#">Jaguar</a></li>
                    <li><a href="#">Infiniti</a></li>
                    <li><a href="#">Lotus</a></li>
                </ul>
            </div>

            <div class="grid_2 browser-cat">
                <h5>Body Type</h5>
                <ul>
                    <li><a href="#">Coupe</a></li>
                    <li><a href="#">Hatchback</a></li>
                    <li><a href="#">Hybrid</a></li>
                    <li><a href="#">MPV</a></li>
                    <li><a href="#">Sedan</a></li>
                    <li><a href="#">Saloon</a></li>
                </ul>

                <h5>Fuel Type</h5>
                <ul>
                    <li><a href="#">Diesel</a></li>
                    <li><a href="#">Bi-Fuel</a></li>
                    <li><a href="#">Hybrid</a></li>
                    <li><a href="#">Petrol</a></li>
                    <li><a href="#">LPG</a></li>
                </ul>
            </div>

            <div class="grid_2 browser-cat">

                <h5>Year</h5>
                <ul class="by-year clearfix">
                    <li><a href="#">2012</a></li>
                    <li><a href="#">2011</a></li>
                    <li><a href="#">2010</a></li>
                    <li><a href="#">2009</a></li>
                    <li><a href="#">2008</a></li>
                    <li><a href="#">2006</a></li>
                    <li><a href="#">2004</a></li>
                    <li><a href="#">2007</a></li>
                    <li><a href="#">2003</a></li>
                    <li><a href="#">2005</a></li>
                    <li><a href="#">2001</a></li>
                    <li><a href="#">2002</a></li>
                </ul>

                <h5>Colour</h5>
                <ul>
                    <li><a href="#">Gray</a></li>
                    <li><a href="#">Black</a></li>
                    <li><a href="#">Blue</a></li>
                    <li><a href="#">Green</a></li>
                    <li><a href="#">Red</a></li>
                </ul>
            </div>

            <div class="grid_2 omega browser-cat">
                <h5>Location</h5>
                <ul>
                    <li><a href="#">Alabama</a></li>
                    <li><a href="#">California</a></li>
                    <li><a href="#">Florida</a></li>
                    <li><a href="#">Indiana</a></li>
                    <li><a href="#">New York</a></li>
                    <li><a href="#">Kentucky</a></li>
                    <li><a href="#">Louisiana</a></li>
                    <li><a href="h#">Minnesota</a></li>
                    <li><a href="#">Washington</a></li>
                    <li><a href="#">New Jersey</a></li>
                    <li><a href="#">Utah</a></li>
                    <li><a href="#">Texas</a></li>
                    <li><a href="#">Arizona</a></li>
                </ul>
            </div>

        </div>
        <!-- end - #browser -->


        <!-- #sidebar -->
        <div id="sidebar" class="grid_4">
            <div id="dox_wid_search_autos-2" class="widget dox_wid_search_autos">
                <h3>Search Cars</h3>

                <div class="search-autos-box">
                    <form id="" action="search.php" method="post">
                        <div class="form-input clearfix">
                            <label for="make_model">Make</label>
                            <select name="s_make_model" class="s_make_model" id="make_model">
                                <option value="">Any</option>
                                <?php
                                $adv->render_make_options();
                                ?>
                            </select>
                        </div>

                        <div class="form-input clearfix">
                            <label for="make_modelsub">Model</label>
                            <select name="s_make_modelsub" id="make_modelsub" class="s_make_modelsub" disabled="disabled">
                            </select>
                        </div>

                        <div class="form-input clearfix">
                            <label for="sLocationsub">City</label>
                            <select name="s_city" id="sLocationsub">
                                <option value="">Any</option>
                                <?php
                                $gen->render_cities();
                                ?>
                            </select>
                        </div>

                        <div class="form-input clearfix">
                            <label for="price-min">Price</label>
                            <input name="s_price_min" id="price-min" size="9" type="text">
                            <span class="to">to</span>
                            <input name="s_price_max" id="price-max" size="9" type="text">
                        </div>

                        <div class="form-input clearfix">
                            <input name="action" id="action" value="search" type="hidden">
                            <input id="searchAutosBoxButton" name="searchAutosBoxButton" value="Search" type="submit">
                            <a href="advance_search.php" class="advancedSearch">Advanced Search</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- end - #sidebar -->


        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<?php include('home/bottom_slider.php'); ?>
<?php include('home/venders.php'); ?>
<?php include('home/footer.php'); ?>