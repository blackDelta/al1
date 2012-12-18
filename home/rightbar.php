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
