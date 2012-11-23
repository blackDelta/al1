<?php
include("boot.php");
include("lib/db.class.php");
include("lib/auth.class.php");
include("lib/alerts.class.php");
include("lib/advertisement.class.php");

$alert = new Alerts();
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
                    <form id="" action="" method="post">
                        <div class="form-input clearfix">
                            <label for="make_model">Make</label>
                            <select name="make_model[]" id="make_model">
                                <option value="-1" selected="selected">Select Make</option>
                                <option value="58">Alfa Romeo</option>
                                <option value="59">Audi</option>
                                <option value="60">BMW</option>
                                <option value="62">Chevrolet</option>
                                <option value="63">Ford</option>
                                <option value="61">Honda</option>
                                <option value="64">Hyundai</option>
                                <option value="129">Infiniti</option>
                                <option value="123">Jaguar</option>
                                <option value="125">Lotus</option>
                                <option value="65">Mercedes</option>
                                <option value="66">MINI</option>
                                <option value="133">Smart</option>
                                <option value="67">Subaru</option>
                                <option value="68">Toyota</option>
                                <option value="69">Volkswagen</option>
                                <option value="70">Volvo</option>
                            </select>
                        </div>

                        <div class="form-input clearfix">
                            <label for="make_modelsub">Model</label>
                            <select name="make_modelsub[]" id="make_modelsub" disabled="disabled"></select>
                        </div>

                        <div class="form-input clearfix">
                            <label for="location">Location</label>
                            <select name="location[]" id="location">
                                <option value="-1" selected="selected">Select Location</option>
                                <option value="44">Alabama</option>
                                <option value="45">Arizona</option>
                                <option value="46">California</option>
                                <option value="47">Florida</option>
                                <option value="48">Indiana</option>
                                <option value="49">Kentucky</option>
                                <option value="50">Louisiana</option>
                                <option value="51">Michigan</option>
                                <option value="52">Minnesota</option>
                                <option value="53">New Jersey</option>
                                <option value="54">New York</option>
                                <option value="55">Texas</option>
                                <option value="56">Utah</option>
                                <option value="57">Washington</option>
                            </select>
                        </div>

                        <div class="form-input clearfix">
                            <label for="locationsub">City</label>
                            <select name="locationsub[]" id="locationsub" disabled="disabled"></select>
                        </div>


                        <div class="form-input clearfix">
                            <label for="price-min">Price</label>
                            <input name="price-min" id="price-min" size="9" type="text">
                            <span class="to">to</span>
                            <input name="price-max" id="price-max" size="9" type="text">
                        </div>

                        <div class="form-input clearfix">
                            <input name="auto_search" id="auto_search" value="true" type="hidden">
                            <input id="searchAutosBoxButton" name="searchAutosBoxButton" value="Search" type="submit">
                            <a href="http://wp.inoart.com/demo/autotrader/advanced-search/" class="advancedSearch">Advanced
                                Search</a>
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