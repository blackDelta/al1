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
$page_title = "Garipk Login";
$page_heading = "Login for full feature access";
$page_subheading = "Login";
$page_description = "Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. ";
?>
<?php include("home/header.php"); ?>

<!-- #contact-form -->
<div id="contact-form" class="dox-template container">
<div class="container_12 clearfix">
<div class="grid_12"><h3 class="page-title"><?php echo $page_heading; ?></h3></div>

<!-- #content -->
<div id="content" class="grid_8">

    <!-- .post -->
    <div class="post-15 page type-page status-publish hentry clearfix" id="post-15">

        <!-- .entry-content -->
        <div class="entry-content">
            <p><em><?php
                echo $page_description;
                ?></em></p>
        </div><!-- end - .entry-content -->

        <h4 class="section-title section-line"><?php echo $page_subheading; ?></h4>

        <!-- .step-form -->
        <div class="step-form">

            <!-- .step-form-wrap -->
            <div class="step-form-wrap">
                <form id="loginForm" action="" method="post">

                    <div class="form-input clearfix">
                        <label for="name">Your Name</label>
                        <input name="name" id="name" size="25" maxlength="40" type="text">
                    </div>

                    <div class="form-input clearfix">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" cols="50" rows="5"></textarea>
                    </div>

                    <p class="login-remember"><label><input name="rememberme" id="rememberme" value="forever" tabindex="90" type="checkbox"> Remember Me</label></p>

                </form>

                <div class="clear"></div>
            </div><!-- .step-form-wrap -->

            <div class="clear"></div>
        </div><!-- end - .step-form -->

    </div><!-- end - .post -->

</div><!-- end - #content -->

<?php include("home/rightbar.php"); ?>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<!-- end - #contact-form -->
<?php include("home/footer.php"); ?>