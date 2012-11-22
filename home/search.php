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
                <select name="location" id="location">
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
                <a href="http://wp.inoart.com/demo/autotrader/advanced-search/" class="advancedSearch">Advanced Search</a>
            </div>

        </form>
    </div>
</div>