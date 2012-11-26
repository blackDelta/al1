<!-- #top-panel -->
<div id="topPanel">
    <div class="panel clearfix">

        <!-- .panel-alert
        <div class="panel-alert alert" style="display:block">
            <p></p>
        </div>
        <-- end .panel-alert -->
        <!-- IF USER IS LOGGED -->
        <div class="inner">
            <div class="grid grid1">
                <div id="text-2" class="widget widget_text">
                    <h3 class="title">Text Widget</h3>

                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor
                            congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus
                            malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra
                            imperdiet enim.
                        </p>

                        <p>Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec
                            lorem.</p>
                    </div>
                </div>
            </div>

            <!-- .register -->
            <div class="grid grid2 register">
                <h4 class="panel-title">Register</h4>

                <form id="user-submit" method="post" action="" class="wp-user-form">
                    <div class="form-input">
                        <label for="user_login">Username: </label>
                        <input name="user_login" size="20" id="userlogin" tabindex="101" type="text">
                    </div>
                    <div class="form-input">
                        <label for="user_email">Your Email: </label>
                        <input name="user_email" size="25" id="user_email" tabindex="102" type="text">
                    </div>
                    <div class="form-input">
                        <label for="user_email">Password: </label>
                        <input name="user_email" size="25" id="userpass" tabindex="102" type="text">
                    </div>
                    <div class="form-input">
                        <label for="user_email">Re-Type Password: </label>
                        <input name="user_email" size="25" id="userpass2" tabindex="102" type="text">
                    </div>
                    <!--
                    <div class="form-input">
                        <label for="user_email">A password will be e-mailed to you.</label>
                    </div>
                    -->
                    <div class="form-input">
                        <input name="user-submit" value="Sign up" class="user-submit" tabindex="103" type="submit">
                        <input name="redirect_to" value="" type="hidden">
                        <input name="user-cookie" value="1" type="hidden">
                    </div>
                </form>

            </div>
            <!-- end- .register -->

            <!-- .user-login -->
            <div class="grid grid3 user-login">
                <h4 class="panel-title">User Login</h4>

                <form name="loginform" id="loginform" action="login.php" method="post">

                    <p class="login-username">
                        <label for="user_login">Username</label>
                        <input name="uname" id="user_login" class="input" size="20" tabindex="10" type="text">
                    </p>

                    <p class="login-password">
                        <label for="user_pass">Password</label>
                        <input name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" type="password">
                    </p>

                    <p class="login-remember"><label><input name="rememberme" id="rememberme" value="forever" tabindex="90" type="checkbox"> Remember Me</label></p>

                    <p class="login-submit">
                        <input name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" type="submit">
                        <input name="redirect_to" value="" type="hidden">
                    </p>

                </form>
            </div>
            <!-- end- .user-login -->
        </div>
        <!-- END - USER IS LOGGED -->

    </div>

    <div class="inner">
        <div class="panel-tab"><h4>LOGIN OR REGISTER</h4></div>
    </div>

    <div class="clear"></div>
</div>
<div class="clear"></div>
<script type="text/javascript">

    var $j = jQuery.noConflict();

    $j(document).ready(function () {

        // register submit button
        $j('#user-submit').submit(function () {

            if ($j('#user-submit #user_login').val() == '' || $j('#user-submit #user_email').val() == '') {
                $j(".panel-alert").removeClass('alert-success alert-error alert-warning');
                $j(".panel-alert").addClass('alert-warning');

                $j(".panel-alert p").empty();
                $j(".panel-alert p").append('Please enter an username and an e-mail address');

                $j('.panel-alert').css('display', 'block');
                $j('.panel-alert').delay(4000).slideUp(350);

                return false;
            }

        });

        // login submit button
        $j('#loginform').submit(function () {

            if ($j('#loginform #user_login').val() == '' || $j('#loginform #user_pass').val() == '') {
                $j(".panel-alert").removeClass('alert-success alert-error alert-warning');
                $j(".panel-alert").addClass('alert-warning');

                $j(".panel-alert p").empty();
                $j(".panel-alert p").append('Please enter your username and password');

                $j('.panel-alert').css('display', 'block');
                $j('.panel-alert').delay(4000).slideUp(350);

                return false;
            }

        });

    })
</script>
<!-- end - #top-panel -->