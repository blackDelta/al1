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
if(isset($_REQUEST['action']) and $_REQUEST['action'] == 'contact'){
    $name = request("name");
    $email = request("email");
    $phone = request("phone");
    $message = request("message");
    $headers = "";
    $subject = "Contact Us | GariPk";
    if(mail($email,$subject,$message,$headers))
    {
        $alert->set_message("You message is sent successfully. we will contact you soon.","success");
    }
    else{
        $alert->set_message("Error occurred while sending message","error");
    }
}
$page_title = "Contact us and get in touch";
$page_heading = "Contact Us";
$page_subheading = "Get in touch";
$page_description = "Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec  ugue. Quisque aliquam tempor magna.";
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
            <p><em><?php echo $page_description; ?></em></p>
        </div><!-- end - .entry-content -->

        <h4 class="section-title section-line"><?php echo $page_subheading; ?></h4>
        <?php $alert->get_message(); ?>
        <!-- .step-form -->
        <div class="step-form">

            <!-- .step-form-wrap -->
            <div class="step-form-wrap">
                <form id="contactForm" method="post">

                    <div class="form-input clearfix">
                        <label for="name">Your Name</label>
                        <input name="name" id="name" size="25" maxlength="40" type="text">
                    </div>

                    <div class="form-input clearfix">
                        <label for="email">Email</label>
                        <input name="email" id="email" size="40" maxlength="60" type="text">
                    </div>

                    <div class="form-input clearfix">
                        <label for="phone">Phone Number</label>
                        <input name="phone" id="phone" size="20" maxlength="12" type="text">
                    </div>

                    <div class="form-input clearfix">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" cols="50" rows="5"></textarea>
                    </div>

                    <div class="form-input clearfix">
                        <input type="hidden" name="action" value="contact" />
                        <input name="contact_submit" id="contact_submit" value="true" type="hidden">
                        <input id="submitButton" name="submitButton" value="Submit Message" type="submit">
                    </div>

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