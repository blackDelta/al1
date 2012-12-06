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
$user_id = 0;

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "add") {
        $data = array();

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

        if ($_REQUEST['userAuthType'] == 'login') {
            $user_name = request('uname');
            $password = request('pword');
            $auth = new Auth($db);
            $auth->login($user_name, $password, "user");
            $user_id = $auth->get_id();
            if($user_id > 0)
            {
                $data['user_id'] = $user_id;
                if ($adv->insert($data)) {
                    header("location:post.php?action=success");
                } else {
                    $message = $adv->get_message();
                    $alert->set_message($message,'error');
                }
            }
        }

        if ($_REQUEST['userAuthType'] == 'register') {
            $username = request('reg_username');
            $fullname = request('reg_name');
            $email_add = request('reg_email');
            $email = request('reg_email');
            $pass = request('reg_pass');
            $pass2 = request('password2');
            if ($pass == $pass2) {
                if(!$user->username_exist($username))
                {
                    if(!$user->email_exist($email))
                    {
                       $user_id = $user->quick_register($fullname,$username,$email,$pass);

                        $data['user_id'] = $user_id;
                        if($user_id > 0)
                        {
                            if ($adv->insert($data)) {
                                //header("location:".__FILE__);
                                header("location:post.php?action=success");
                            } else {
                                $message = $adv->get_message();
                                $alert->set_message($message,'error');
                            }
                        }
                    }
                    else
                    {
                        $message = "Email already exists, Login please";
                        $alert->set_message($message,'error');
                    }
                }
                else
                {
                    $message = "User name already exists, Login please";
                    $alert->set_message($message,'error');
                }
            }
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
<div class="grid_12">
    <h3 class="page-title"><?php echo $page_heading;?></h3>
</div>

<!-- #content -->
<div id="content" class="grid_8">
    <!-- .post -->
    <?php include("home/postform.php"); ?>
    <!-- end - .post -->

</div>
<!-- end - #content -->

<!-- #sidebar -->
<?php include("home/rightbar.php") ?>
<!-- #sidebar End -->

<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<!-- end - #post-ad -->
<script type="text/javascript">
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
            if(frm.password.value.length <= 6){
                alert("Please must be more the five characters");
                frm.password.focus();
                frm.password.backgroundColor = "red";
                return false;
            }
        }

        if(document.getElementById('userRegisterCheck').checked == true){
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
            if(frm.reg_password.value.length <= 6){
                alert("Please must be more the five characters");
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
    $j = jQuery.noConflict();
    $j("#userLoginCheck").live('click',function(){
        $j("#user-login").show();
        $j("#user-register").hide();
    });

    $j("#userRegisterCheck").live('click',function(){
        $j("#user-register").show();
        $j("#user-login").hide();
    });
</script>
<?php include("home/footer.php"); ?>