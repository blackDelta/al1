<?php
include("boot.php");
include("lib/db.class.php");
include("lib/auth.class.php");
include("lib/alerts.class.php");
include("lib/advertisement.class.php");
include("lib/user.class.php");
/******************
echo "<pre>";
print_r($_REQUEST);
echo "</per>";
die;
/******************/
$alert = new Alerts();
$user = new Users($db);

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "add") {
        $data = array();
        $adv = new Advertisement($db);
        $user_id = 0;

        if ($_REQUEST['userAuthType'] == 'login') {
            $email = request('email');
            $password = request('password');
            $auth = new Auth($db);
            $auth->login($email, $password, "user ");
            $user_id = $auth->get_id();
        }

        if ($_REQUEST['userAuthType'] == 'register') {

            $user_name = request("user_name");
            $full_name = request("full_name");
            $email = request('reg_email');
            $pass = request('reg_pass');
            $pass2 = request('password2');

            if ($pass == $pass2)
            {

                if($user->username_exist($user_name))
                {echo "username checked";
                    if($user->email_exist($email))
                    {echo " email checked";
                        $user_id = $user->quick_register($full_name,$user_name,$email,$pass);
                    }
                    else
                    {
                        $alert->set_message("Email already exists",'error');
                    }
                }
                else
                {
                    $alert->set_message("Username already exists",'error');
                }
            }
        }
        if($user_id > 0){
            $data['title'] = request('title');
            $data['vendor_id'] = request('vendor_id');
            $data['model_id'] = request('model_id');
            $data['type'] = request('type');
            $data['year'] = request('year');
            $data['mileage'] = request('mileage');
            $data['reg_city'] = request('reg_city');
            $data['vin_no'] = request('vin_no');
            $data['type'] = 'available';
            $data['condition'] = request('condition');
            $data['description'] = request('description');
            $data['status'] = 'available';

            if ($adv->insert($data)) {
                //header("location:".__FILE__);
                header("location:post.php?action=success");

            } else {
                $message = $adv->get_message();
                $alert->set_message($message,'error');
            }
        }else{
            die("Go back");
           // $alert->set_message("User not recognised",'error');
        }
    }
}
if($_REQUEST['action'] == 'success'){
    $message = "You car is posted Successfully";
    $alert->set_message($message,'success');
}

$page_title = "Sell Your Car";
$page_heading = "Sell Your Car";
$page_subheading = "Post your car for sale";
$page_description = "Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. ";
?>
<?php include("home/header.php"); ?>
<!-- #post-ad -->
<div id="postAd" class="dox-template container">
<div class="container_12 clearfix">
<div class="grid_12"><h3 class="page-title"><?php echo $page_heading?></h3></div>

<!-- #content -->
<div id="content" class="grid_8">
    <!-- .post -->
    <?php include("home/postform.php"); ?>
    <!-- end - .post -->

</div>
<!-- end - #content -->

<!-- #sidebar -->
<div id="sidebar" class="grid_4">
    <div id="dox_wid_search_autos-2" class="widget dox_wid_search_autos">
        <h3>Search Cars</h3>

        <div class="search-autos-box">
            <form id="searchAutosBox1797972015" action="http://wp.inoart.com/demo/autotrader/search-results/"
                  method="post">

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
    <script type="text/javascript">
        var $j = jQuery.noConflict();

        $j(document).ready(function () {
            function fill_model() {
                $j("#make_modelsub").empty();
                var $make_id = $j("#make_model").val();
                $j.ajax({
                    type:'POST',
                    url:'lib/ajax_handler.php',
                    data:{
                        action:'get_models',
                        vendor_id:$make_id,
                        sel_text:true
                    },
                    success:function (response) {
                        $j("#make_modelsub").removeAttr("disabled");
                        $j("#make_modelsub").append(response);
                    }
                });
            }

            /* if make changed */
            $j("#make_model").change(function () {
                fill_model();
            });

            $j("#userLoginCheck").live('click',function(){
                $j("#user-login").show();
                $j("#user-register").hide();
            });

            $j("#userRegisterCheck").live('click',function(){
                $j("#user-register").show();
                $j("#user-login").hide();
            });

            function fill_dd_cities() {
                $j("#searchAutosBox1797972015 #locationsub").empty();

                var $location_id = $j("#searchAutosBox1797972015 #location").val();

                $j.ajax({
                    type:'POST',
                    url:'http://wp.inoart.com/demo/autotrader/wp-admin/admin-ajax.php',
                    data:{ action:'dox_get_city', location_id:$location_id, sel_text:true },
                    success:function (response) {
                        $j("#searchAutosBox1797972015 #locationsub").removeAttr("disabled");
                        $j("#searchAutosBox1797972015 #locationsub").append(response);
                    }
                });

            }

            /* if location changed */
            $j("#searchAutosBox1797972015 #location").change(function () {
                fill_dd_cities();
            });
        })

        function validate(){
            var frm = document.forms.adFrm;
            if(frm.vendor_id.value == ""){
                alert("Car make(Company) not selected");
                frm.vendor_id.focus();
                frm.vendor_id.backgroundColor = "red";
                return false;
            }
            if(frm.model_id.value == ""){
                alert("Please select car model");
                frm.model_id.focus();
                frm.model_id.backgroundColor = "red";
                return false;
            }
            if(frm.price.value == ""){
                alert("Please type price of your car");
                frm.price.focus();
                frm.price.backgroundColor = "red";
                return false;
            }
            if(frm.vin.value == ""){
                alert("Please type registration number of you car");
                frm.vin.focus();
                frm.vin.backgroundColor = "red";
                return false;
            }
            if(frm.year.value == ""){
                alert("Please select the model year of your car");
                frm.year.focus();
                frm.year.backgroundColor = "red";
                return false;
            }
            if(frm.reg_city.value == ""){
                alert("Please select you car registration city");
                frm.reg_city.focus();
                frm.reg_city.backgroundColor = "red";
                return false;
            }
            if(frm.condition.value == ""){
                alert("Please select the condition of your car");
                frm.condition.focus();
                frm.condition.backgroundColor = "red";
                return false;
            }
            if(frm.mileage.value == ""){
                alert("Please type car mileage");
                frm.mileage.focus();
                frm.mileage.backgroundColor = "red";
                return false;
            }
            if(frm.title.value == ""){
                alert("Please type the title of your car ad");
                frm.title.focus();
                frm.title.backgroundColor = "red";
                return false;
            }
            if(frm.description.value == ""){
                alert("Please write some description about your car");
                frm.description.focus();
                frm.description.backgroundColor = "red";
                return false;
            }
            if(document.getElementById('userLoginCheck').checked == true){
                if(frm.username.value == ""){
                    alert("Please enter username");
                    frm.username.focus();
                    frm.username.backgroundColor = "red";
                    return false;
                }
                if(frm.password.value == ""){
                    alert("Please enter password");
                    frm.password.focus();
                    frm.password.backgroundColor = "red";
                    return false;
                }
            }

            if(document.getElementById('userRegisterCheck').checked == true){
                if(frm.full_name.value == ""){
                    alert("Please type your full name");
                    frm.full_name.focus();
                    frm.full_name.backgroundColor = "red";
                    return false;
                }
                if(frm.user_name.value == ""){
                    alert("Please type unique username");
                    frm.user_name.focus();
                    frm.user_name.backgroundColor = "red";
                    return false;
                }
                if(frm.reg_email.value == ""){
                    alert("Please type your email");
                    frm.reg_email.focus();
                    frm.reg_email.backgroundColor = "red";
                    return false;
                }
                if(frm.reg_password.value == ""){
                    alert("Please type password");
                    frm.reg_password.focus();
                    frm.reg_password.backgroundColor = "red";
                    return false;
                }
                if(frm.password2.value == ""){
                    alert("Please re-type password");
                    frm.password2.focus();
                    frm.password2.backgroundColor = "red";
                    return false;
                }
                if(frm.reg_password.value != frm.password2.value ){
                    alert("Passwords mismatch");
                    frm.password2.focus();
                    frm.password2.backgroundColor = "red";
                    return false;
                }
            }
            if(frm.chbx_terms.checked == false){
                alert("You should agree with terms and conditions");
                frm.chbx_terms.focus();
                frm.chbx_terms.backgroundColor = "red";
                return false;
            }
            return true;
        }
    </script>

    <div id="dox_wid_show_posts-2" class="widget dox_wid_show_posts">
        <h3>Latest Ads</h3>

        <ul class="clearfix">
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/new-audi-i8-hybrid-consept-2011/"
                   class="opac"><img src="assets/images/default-thumb1-60x40.jpg" class="attachment-tiny"
                                     alt="default-thumb" title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/new-audi-i8-hybrid-consept-2011/">New Audi i8
                Hybrid Consept 2011</a><span class="ad-price"> - 175000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/used-audi-quattro-2009-2-dr-cpe/"
                   class="opac"><img src="assets/images/default-thumb10-60x40.jpg" class="attachment-tiny"
                                     alt="default-thumb" title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/used-audi-quattro-2009-2-dr-cpe/">Used Audi
                Quattro 2009 2 dr Cpe</a><span class="ad-price"> - 85000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/unused-lotus-elan-saloon-2011-2dr/"
                   class="opac"><img src="assets/images/default-thumb6-60x40.jpg" class="attachment-tiny"
                                     alt="default-thumb" title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/unused-lotus-elan-saloon-2011-2dr/">Unused Lotus
                Elan Saloon 2011 2dr</a><span class="ad-price"> - 275000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/jaguar-c-x75-2-dr-saloon-2012/" class="opac"><img
                src="assets/images/default-thumb5-60x40.jpg" class="attachment-tiny" alt="default-thumb"
                title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/jaguar-c-x75-2-dr-saloon-2012/">Jaguar C-X75 2
                dr Saloon 2012</a><span class="ad-price"> - 620000 USD</span></h5></li>
            <li><a href="http://wp.inoart.com/demo/autotrader/auto/new-toyota-ft-85-2-dr-cpe-coupe/"
                   class="opac"><img src="assets/images/default-thumb9-60x40.jpg" class="attachment-tiny"
                                     alt="default-thumb" title="default-thumb" height="40" width="60"></a><h5><a
                href="http://wp.inoart.com/demo/autotrader/auto/new-toyota-ft-85-2-dr-cpe-coupe/">New Toyota
                FT-85 2 dr Cpe Coupe</a><span class="ad-price"> - 195000 USD</span></h5></li>
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

<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<!-- end - #post-ad -->
<?php include("home/footer.php"); ?>