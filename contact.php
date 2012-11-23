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
$page_title = "Result for Bugatti virion";
$page_heading = "Result for Bugatti virion";
$page_subheading = "Post your car for sale";
$page_description = "Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. Some Description goes here. ";
?>
<?php include("home/header.php"); ?>

<!-- #contact-form -->
<div id="contact-form" class="dox-template container">
<div class="container_12 clearfix">
<div class="grid_12"><h3 class="page-title">Contact Us</h3></div>

<!-- .contact-form-alert -->
<div class="contact-form-alert alert" style="display:none">
    <p></p>
</div><!-- end .contact-form-alert -->

<!-- #content -->
<div id="content" class="grid_8">

    <!-- .post -->
    <div class="post-15 page type-page status-publish hentry clearfix" id="post-15">

        <!-- .entry-content -->
        <div class="entry-content">
            <p><em>Donec ut est in lectus consequat consequat. Etiam eget dui.
                Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec
                augue. Quisque aliquam tempor magna.</em></p>
        </div><!-- end - .entry-content -->

        <h4 class="section-title section-line">Get in touch</h4>

        <!-- .step-form -->
        <div class="step-form">

            <!-- .step-form-wrap -->
            <div class="step-form-wrap">
                <form id="contactForm" action="http://wp.inoart.com/demo/autotrader/contact-us/" method="post">

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