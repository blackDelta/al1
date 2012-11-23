<div class="post-2 page type-page status-publish hentry clearfix" id="post-2">

    <!-- if-not-submit-button-clicked -->

    <!-- .entry-content -->
    <div class="entry-content">
        <p><em><?php echo $page_description ?></em></p>
    </div>
    <!-- end - .entry-content -->

    <h4 class="section-title section-line"><?php echo $page_subheading; ?></h4>

    <!-- .step-form -->
    <div class="step-form">
        <?php
        echo $alert->get_message();
        ?>
        <!-- .step-form-wrap -->
        <div class="step-form-wrap">
            <form name="adFrm" action="" onsubmit="return validate();" method="post" enctype="multipart/form-data">
                <!-- .step-1 -->
                <div class="step step-1">
                    <div class="form-input clearfix">
                        <label for="make_model">Make</label>
                        <select name="vendor_id" id="make_model" class="required-field">
                            <option selected="selected">Select Make</option>
                            <?php
                            $query = "select * from vender order by name";
							$vender_res = $db->execute_query($query,true);
							while($vender_row = $db->fetch($vender_res))
							{
							?>
                            <option value="<?php echo $vender_row['id']?>"><?php echo ucwords($vender_row['name']); ?></option>
                            <?php } ?>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('make_model').value = <?php echo $_REQUEST['vendor_id']?>;
                        </script>
                    </div>

                    <div class="form-input clearfix">
                        <label for="make_modelsub">Model</label>
                        <select name="model_id" id="make_modelsub" disabled="disabled" class="required-field"></select>
                        <span style="padding:10px; line-height: 30px">Please select Make to get its Models</span>
                    </div>
                    <div class="form-input clearfix">
                        <label for="price">Price</label>
                        <input name="price" id="price" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['price']?>">
                    </div>

                    <div class="form-input clearfix">
                        <label for="vin">VIN #</label>
                        <input name="vin_no" id="vin" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['vin_no']?>">
                    </div>
                    
                    <div class="form-input clearfix">
                        <label for="regyear">Year</label>
                        <select name="year" id="regyear" class="postform required-field">
                            <option value="0" selected="selected">Select Year</option>
                            <?php for($i=2012;$i>=1950;$i--){ ?>
                            <option class="level-0" value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('regyear').value = <?php echo $_REQUEST['year']?>;
                        </script>
                    </div>

                    <div class="form-input clearfix">
                        <label for="locationsub">Registered City</label>
                        <select name="reg_city" id="locationsub" class="required-field">
                        	<option value="Lahore">Lahore</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                            <option value="Multan">Multan</option>
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Sargodha">Sargodha</option>
                            <option value="Haiderabad">Haiderabad</option>
                            <option value="Pishawar">Peshawar</option>
                        </select>
                    </div>
                    <script type="text/javascript">
                        document.getElementById('locationsub').value = <?php echo $_REQUEST['reg_city']?>;
                    </script>
                    <div class="form-input clearfix">
                        <label for="condition">Condition</label>
                        <select name="condition" id="condition" class="postform required-field">
                            <option value="0" selected="selected">Select Condition</option>
                            <option class="level-0" value="excellent">Excellent</option>
                            <option class="level-0" value="good">Good</option>
                            <option class="level-0" value="normal">Normal</option>
                            <option class="level-0" value="below_normal">Below Normal</option>
                            <option class="level-0" value="poor">Poor</option>
                        </select>                       
                    </div>
                    <script type="text/javascript">
                        document.getElementById('condition').value = '<?php echo $_REQUEST['condition'];?>';
                    </script>
                    <div class="form-input clearfix">
                        <label for="mileage">Mileage</label>
                        <input name="mileage" id="mileage" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['mileage']?>">
                    </div>
                    <div class="form-input clearfix">
                        <label for="title">Title</label>
                        <input name="title" id="title" size="50" maxlength="60" class="required-field" type="text" value="<?php echo $_REQUEST['title']?>">
                    </div>

                    <div class="form-input clearfix">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="required-field" cols="50" rows="5"><?php echo $_REQUEST['description'] ?></textarea>
                    </div>

                    <!-- upload photos -->
                    <div class="form-input clearfix">
                        <label class="sub-title" for="attachment">Upload Photos</label>
                        <input id="attachment" name="attachment[]" multiple="multiple" type="file">
                        <label class="description">You can choose multiple images.</label>
                    </div>
                    <!-- end - upload photos -->
                    <label for="userLoginCheck" style="margin: 5px 0 5px 0; font-weight:bold; color:#FF4A4A ">
                        <input name="userAuthType" type="radio" id="userLoginCheck" value="login" />I am Already Member</label>
					<fieldset id="user-login" style="display: none;">
                    	 <div class="form-input clearfix">
                            <label for="username">Username</label>
                            <input name="uname" id="username" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['uname'] ?>">
                        </div>
                        <div class="form-input clearfix">
                            <label for="password">Password</label>
                            <input name="pword" id="password" size="35" class="required-field" type="password" value="<?php echo $_REQUEST['password'] ?>">
                        </div>
                    </fieldset>

                    <label for="userRegisterCheck" style="margin: 5px 0 5px 0; font-weight:bold; color:#FF4A4A "><input name="userAuthType" type="radio" id="userRegisterCheck" value="register" />
                        I am a New Member</label>
                    <fieldset id="user-register" style="display: none;">
                        <div class="form-input clearfix">
                            <label for="reg-name">Name</label>
                            <input name="reg_name" id="reg-name" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['reg_name'] ?>">
                        </div>
                        <div class="form-input clearfix">
                            <label for="reg_username">User Name</label>
                            <input name="reg_username" id="reg_username" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['reg_username'] ?>">
                        </div>
                        <div class="form-input clearfix">
                            <label for="reg-email">Email</label>
                            <input name="reg_email" id="reg-email" size="35" class="required-field" type="text" value="<?php echo $_REQUEST['reg_email'] ?>">
                        </div>
                        <div class="form-input clearfix">
                            <label for="reg_password">Password</label>
                            <input name="reg_pass" id="reg_password" size="35" class="required-field" type="password" value="<?php echo $_REQUEST['reg_pass'] ?>">
                        </div>
                        <div class="form-input clearfix">
                            <label for="password2">Re-type Password</label>
                            <input name="password2" id="password2" size="35" class="required-field" type="password">
                        </div>
                    </fieldset>
                    <div class="form-input clearfix">
                        <input type="hidden" name="action" value="add">
                        <label for="terms">Terms &amp; Conditions</label>
                        <textarea name="terms" id="terms" class="terms" cols="50" rows="5" readonly="readonly">PLEASE
                            READ THE FOLLOWING TERMS OF USE AND DISCLAIMERS CAREFULLY BEFORE USING
                            THIS WEB SITE (this "Site"). By accessing or using this Site, you agree
                            to these terms of use, conditions and all applicable laws. If you do not
                            agree to these terms you may not use this Site.
                            Modification Of These Terms Of Use

                            This site reserves the right to change the terms, conditions, and
                            notices under which the Web Sites are offered, including but not limited
                            to the charges associated with the use of the Web Sites. You are
                            responsible for regularly reviewing these terms and conditions.
                            Use Of Site. Personal And Non-Commercial Use Limitation.

                            Unless otherwise specified, the Web Sites are for your personal and
                            noncommercial use. You may not modify, copy, distribute, transmit,
                            display, perform, reproduce, publish, license, create derivative works
                            from, transfer, or sell any information, software, products or services
                            obtained from the Web Sites.

                            You may display and, subject to any expressly stated restrictions or
                            limitations relating to specific material, electronically copy, download
                            and print hard copy portions of the material from the different areas
                            of the Site solely for your own noncommercial use, or to place an order
                            with or to purchase products. Any other use of materials on this Site,
                            including but not limited to the modification, reproduction,
                            distribution, republication, display or transmission of the content of
                            this Site, without prior written permission of strictly prohibited.</textarea>
                    </div>
                    <!-- end - terms & conditions -->
					
                    <div class="form-input clearfix">
                        <label class="label_check clearfix" for="chbx_terms">
                            <input name="chbx_terms" id="chbx_terms" checked="checked" type="checkbox">I agree to the terms and conditions </label>
                    </div>

                    <div class="form-input clearfix">
                        <input name="auto_submit" id="auto_submit" value="true" type="hidden">
                        <input id="submitButton" name="submitButton" value="Submit" type="submit">

                </div>                    </div>

        <!-- end -.step-1 -->

            </form>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- end - .step-form -->


</div>