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
if ($_REQUEST['action'] == 'serach') {

}
$page_title = "Result for Bugatti virion";
$page_heading = "Result for Bugatti virion";
$page_subheading = "Post your car for sale";
$page_description = "Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. ";
?>
<?php include("home/header.php"); ?>


<!-- #search -->
<div id="search" class="dox-template container">
<div class="container_12 clearfix">
<div class="grid_12"><h3 class="page-title">Advanced Search</h3></div>

<!-- #content -->
<div id="content" class="grid_8">

<!-- .post -->
<div class="post-9 page type-page status-publish hentry clearfix" id="post-9">


<!-- .entry-content -->
<div class="entry-content">
    <p><em>Donec ut est in lectus consequat consequat. Etiam eget dui.
        Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec
        augue. Quisque aliquam tempor magna.</em></p>
</div>
<!-- end - .entry-content -->

<h4 class="section-title section-line">Find Your Car</h4>

<!-- .step-form -->
<div class="step-form">


<!-- .step-alert -->
<div class="step-alert alert alert-error" style="display:none">
    <p></p>
</div>
<!-- end .step-alert -->

<!-- .step-form-wrap -->
<div class="step-form-wrap">

<!-- #search-form -->
<div id="search-form">
<form id="searchForm"
      action="http://wp.inoart.com/demo/autotrader/search-results/"
      method="post" enctype="multipart/form-data">


<div class="form-input form-input-33 clearfix">
    <label for="make_model">Make</label>
    <select name="make_model[]" id="make_model" multiple="multiple">
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


<div class="form-input form-input-33 clearfix">
    <label for="make_modelsub">Model</label>
    <select name="make_modelsub[]" id="make_modelsub"
            multiple="multiple" disabled="disabled"></select>
</div>

<div class="form-input form-input-33 clearfix">
    <label for="condition">Condition</label>
    <select name="condition[]" id="condition" multiple="multiple">
        <option value="5">New Cars</option>
        <option value="7">Rental Cars</option>
        <option value="6">Used Cars</option>
    </select>

</div>

<div class="form-input form-input-33 clearfix">
    <label for="location">Location</label>
    <select name="location[]" id="location" multiple="multiple">
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


<div class="form-input form-input-33 clearfix">
    <label for="locationsub">City</label>
    <select name="locationsub[]" id="locationsub" multiple="multiple"
            disabled="disabled"></select>
</div>


<div class="form-input form-input-33 clearfix">
    <label for="adyear">Year</label>
    <select name="adyear[]" id="adyear" multiple="multiple">
        <option value="24">2012</option>
        <option value="25">2011</option>
        <option value="26">2010</option>
        <option value="27">2009</option>
        <option value="28">2008</option>
        <option value="29">2007</option>
        <option value="30">2006</option>
        <option value="31">2005</option>
        <option value="32">2004</option>
        <option value="33">2003</option>
        <option value="34">2002</option>
        <option value="35">2001</option>
    </select>
</div>


<div class="form-input form-input-33 clearfix">
    <label for="transmission">Transmission</label>
    <select name="transmission[]" id="transmission" multiple="multiple">
        <option value="8">Automatic</option>
        <option value="9">Manual</option>
        <option value="10">Tiptronic</option>
    </select>
</div>


<div class="form-input form-input-33 clearfix">
    <label for="colour">Colour</label>
    <select name="colour[]" id="colour" multiple="multiple">
        <option value="37">Black</option>
        <option value="41">Blue</option>
        <option value="39">Gray</option>
        <option value="42">Green</option>
        <option value="40">Red</option>
        <option value="38">Silver</option>
        <option value="36">White</option>
        <option value="43">Yellow</option>
    </select>
</div>


<div class="form-input form-input-33 clearfix">
    <label for="fuel_type">Fuel Type</label>
    <select name="fuel_type[]" id="fuel_type" multiple="multiple">
        <option value="23">Bi-Fuel</option>
        <option value="21">Diesel</option>
        <option value="19">Hybrid</option>
        <option value="22">LPG</option>
        <option value="20">Petrol</option>
    </select>
</div>


<div class="form-input form-input-50 clearfix">
    <label for="body_type">Body Type</label>
    <select name="body_type[]" id="body_type" multiple="multiple">
        <option value="13">Coupe</option>
        <option value="14">Hatchback</option>
        <option value="19">Hybrid</option>
        <option value="16">MPV</option>
        <option value="15">Saloon</option>
        <option value="17">Sedan</option>
        <option value="18">Sport Utility</option>
    </select>

</div>

<div style="float:left;width:100%">
    <div class="form-input form-input-50 clearfix">
        <label for="cylinders">Cylinders</label>
        <input name="cylinders-min" id="cylinders-min" size="9"
               maxlength="5" type="text">
        <span class="to">to</span>
        <input name="cylinders-max" id="cylinders-max" size="9"
               maxlength="5" type="text">
    </div>


    <div class="form-input form-input-50 clearfix">
        <label for="doors">Doors</label>
        <input name="doors-min" id="doors-min" size="9" maxlength="1"
               type="text">
        <span class="to">to</span>
        <input name="doors-max" id="doors-max" size="9" maxlength="1"
               type="text">
    </div>

    <div class="form-input form-input-50 clearfix">
        <label for="mileage">Mileage</label>
        <input name="mileage-min" id="mileage-min" size="9"
               maxlength="6" type="text">

        <span class="to">to</span>
        <input name="mileage-max" id="mileage-max" size="9"
               maxlength="6" type="text">
    </div>


    <div class="form-input form-input-50 clearfix">
        <label for="price">Price</label>
        <input name="price-min" id="price-min" size="9" type="text">
        <span class="to">to</span>
        <input name="price-max" id="price-max" size="9" type="text">

    </div>
</div>


<div class="form-input clearfix">
    <label for="keyword">Keyword</label>
    <input name="keyword" id="keyword" size="60" maxlength="50"
           type="text">

    <div class="clear"></div>
</div>

<div style="float:left;width:100%">

    <div class="form-input clearfix">
        <input name="auto_search" id="auto_search" value="true"
               type="hidden">
        <input name="searchButton" id="searchButton" class="button"
               value="Search" type="submit">
    </div>
</div>

</form>
</div>
<!-- end - #search-form -->

<div class="clear"></div>
</div>
<!-- .step-form-wrap -->

<div class="clear"></div>
</div>
<!-- end - .step-form -->

</div>
<!-- end - .post -->
</div>
<?php include("home/rightbar.php"); ?>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<!-- end - #contact-form -->
<?php include("home/footer.php"); ?>