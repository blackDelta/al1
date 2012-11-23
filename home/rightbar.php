
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
    <script type="text/javascript">

        var $j = jQuery.noConflict();

        $j(document).ready(function () {


            function fill_dd_model() {
                $j("#searchAutosBox82139136828 #make_modelsub").empty();

                var $make_id = $j("#searchAutosBox82139136828 #make_model").val();


                $j.ajax({
                    type:'POST',
                    url:'http://wp.inoart.com/demo/autotrader/wp-admin/admin-ajax.php',
                    data:{ action:'dox_get_model', make_id:$make_id, sel_text:true },
                    success:function (response) {
                        $j("#searchAutosBox82139136828 #make_modelsub").removeAttr("disabled");
                        $j("#searchAutosBox82139136828 #make_modelsub").append(response);
                    }
                });

            }

            /* if make changed */
            $j("#searchAutosBox82139136828 #make_model").change(function () {
                fill_dd_model();
            });


            function fill_dd_cities() {
                $j("#searchAutosBox82139136828 #locationsub").empty();

                var $location_id = $j("#searchAutosBox82139136828 #location").val();

                $j.ajax({
                    type:'POST',
                    url:'http://wp.inoart.com/demo/autotrader/wp-admin/admin-ajax.php',
                    data:{ action:'dox_get_city', location_id:$location_id, sel_text:true },
                    success:function (response) {
                        $j("#searchAutosBox82139136828 #locationsub").removeAttr("disabled");
                        $j("#searchAutosBox82139136828 #locationsub").append(response);
                    }
                });

            }

            /* if location changed */
            $j("#searchAutosBox82139136828 #location").change(function () {
                fill_dd_cities();
            });


        })
    </script>

    <div id="dox_wid_show_posts-2" class="widget dox_wid_show_posts">
        <h3>Latest Ads</h3>

        <ul class="clearfix">
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/new-audi-i8-hybrid-consept-2011/" class="opac"><img
                src="assets/images/default-thumb1-60x40.jpg" class="attachment-tiny" alt="default-thumb"
                title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/new-audi-i8-hybrid-consept-2011/">New Audi i8 Hybrid
                Consept 2011</a><span class="ad-price"> - 175000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-quattro-2009-2-dr-cpe/" class="opac"><img
                src="assets/images/default-thumb10-60x40.jpg" class="attachment-tiny" alt="default-thumb"
                title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/used-audi-quattro-2009-2-dr-cpe/">Used Audi Quattro 2009
                2 dr Cpe</a><span class="ad-price"> - 85000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/unused-lotus-elan-saloon-2011-2dr/" class="opac"><img
                src="assets/images/default-thumb6-60x40.jpg" class="attachment-tiny" alt="default-thumb"
                title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/unused-lotus-elan-saloon-2011-2dr/">Unused Lotus Elan
                Saloon 2011 2dr</a><span class="ad-price"> - 275000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/jaguar-c-x75-2-dr-saloon-2012/" class="opac"><img
                src="assets/images/default-thumb5-60x40.jpg" class="attachment-tiny" alt="default-thumb"
                title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/jaguar-c-x75-2-dr-saloon-2012/">Jaguar C-X75 2 dr Saloon
                2012</a><span class="ad-price"> - 620000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/new-toyota-ft-85-2-dr-cpe-coupe/" class="opac"><img
                src="assets/images/default-thumb9-60x40.jpg" class="attachment-tiny" alt="default-thumb"
                title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/new-toyota-ft-85-2-dr-cpe-coupe/">New Toyota FT-85 2 dr
                Cpe Coupe</a><span class="ad-price"> - 195000 USD</span></h5></li>
        </ul>
    </div>
    <div id="dox_wid_browse_autos-2" class="widget dox_wid_browse_autos">
        <h3>Browse by Location</h3>
        <ul class="auto_location clearfix">
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/alabama/">Alabama</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/california/">California</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/florida/">Florida</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/indiana/">Indiana</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/new-york/">New York</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/kentucky/">Kentucky</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/louisiana/">Louisiana</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/minnesota/">Minnesota</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/washington/">Washington</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/new-jersey/">New Jersey</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/utah/">Utah</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/texas/">Texas</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/arizona/">Arizona</a></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/location/michigan/">Michigan</a></li>
        </ul>
    </div>
    <div id="search-2" class="widget widget_search"><h3 class="title">Search Site</h3>

        <form role="search" method="get" id="searchform" action="http://wp.inoart.com/demo/autotrader/">
            <div><label class="screen-reader-text" for="s">Search for:</label>
                <input name="s" id="s" type="text">
                <input id="searchsubmit" value="Search" type="submit">
            </div>
        </form>
    </div>
</div>
<!-- end - #sidebar -->