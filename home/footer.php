<!-- #footer -->
<div id="footer" class="container">
    <div class="container_12 widget-area clearfix">
        <div class="grid_4 alpha">
            <div id="dox_wid_show_posts-3" class="widget dox_wid_show_posts">
                <h3>Blog Posts</h3>

                <ul class="clearfix">
                    <li><a href="#" class="opac"><img src="assets/images/blog_jaguar-60x40.jpg" class="attachment-tiny"
                                                      alt="blog_jaguar" title="blog_jaguar" height="40" width="60"></a>
                        <h5><a href="http://wp.inoart.com/demo/autotrader/first-look-jaguar-c-x75-saloon/">First Look:
                            Jaguar C-X75 Saloon</a><span class="post-date"> - May 9, 2012</span></h5></li>
                    <li><a href="http://wp.inoart.com/demo/autotrader/first-quarter-car-sales/" class="opac"><img
                        src="assets/images/blog_post-60x40.jpg" class="attachment-tiny" alt="blog_post"
                        title="blog_post" height="40" width="60"></a><h5><a
                        href="http://wp.inoart.com/demo/autotrader/first-quarter-car-sales/">First Quarter Car Sales</a><span
                        class="post-date"> - May 9, 2012</span></h5></li>
                </ul>
            </div>
        </div>
        <div class="grid_4">
            <div id="dox_wid_browse_autos-4" class="widget dox_wid_browse_autos">
                <h3>Browse By Make</h3>
                <ul class="auto_make_model clearfix">
                    <li><a href="#">Audi</a></li>
                    <li><a href="#">Alfa Romeo</a></li>
                    <li><a href="#">BMW</a></li>
                    <li><a href="#">Chevrolet</a></li>
                    <li><a href="#">Ford</a></li>
                    <li><a href="#">Toyota</a></li>
                    <li><a href="#">Volkswagen</a></li>
                    <li><a href="#">Honda</a></li>
                    <li><a href="#">Mercedes</a></li>
                    <li><a href="#">Subaru</a></li>
                </ul>
            </div>
        </div>
        <div class="grid_4 omega">
            <div id="text-4" class="widget widget_text">
                <h3 class="title">About Autotrader</h3>

                <div class="textwidget">
                    <p>Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue
                        magna vel risus. </p>

                    <p>Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat.
                        Integer ultrices lobortis eros</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- end - #footer -->

<!-- #footer-contact-info -->
<div id="footer-contact-info" class="container">
    <div class="container_12 contact clearfix">
        <div class="grid_12 contact-info alpha">
            <ul>
                <li class="address">30 South Park Avenue. San Francisco, CA 94108. USA</li>
                <li class="tel">(123) 456-7890</li>
                <li class="email"><a href="mailto:no-reply@inoart.com">no-reply@inoart.com</a></li>
                <li class="twitter"><a href="http://twitter.com/inoart_wp" target="_blank">Follow Us</a></li>
                <li class="facebook"><a href="http://facebook.com/inoartcom" target="_blank">Facebook</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- end - #footer-contact-info -->

<!-- #footer-bottom-->
<div id="footer-bottom" class="container">
    <div class="container_12 contact clearfix">
        <div class="grid_8 footer-menu alpha">
            <div class="footer-nav">
                <ul id="menu-footer-menu" class="clearfix">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Advanced Search</a></li>
                </ul>
            </div>
        </div>
        <div class="grid_4 footer-notice omega">Copyright © 2012 Autotrader, All rights reserved</div>
    </div>
</div>
<div class="clear"></div>
<!-- end - #footer-bottom -->

<script type="text/javascript">
    var $j = jQuery.noConflict();

    $j(document).ready(function () {


        function fill_dd_model() {
            $j("#homeSearch #make_modelsub").empty();

            var $make_id = $j("#homeSearch #make_model").val();


            $j.ajax({
                type:'POST',
                url:'http://wp.inoart.com/demo/autotrader/wp-admin/admin-ajax.php',
                data:{ action:'dox_get_model', make_id:$make_id, sel_text:true },
                success:function (response) {
                    $j("#homeSearch #make_modelsub").removeAttr("disabled");
                    $j("#homeSearch #make_modelsub").append(response);
                }
            });

        }

        /* if make changed */
        $j("#homeSearch #make_model").change(function () {
            fill_dd_model();
        });


        function fill_dd_cities() {
            $j("#homeSearch #locationsub").empty();

            var $location_id = $j("#homeSearch #location").val();

            $j.ajax({
                type:'POST',
                url:'http://wp.inoart.com/demo/autotrader/wp-admin/admin-ajax.php',
                data:{ action:'dox_get_city', location_id:$location_id, sel_text:true },
                success:function (response) {
                    $j("#homeSearch #locationsub").removeAttr("disabled");
                    $j("#homeSearch #locationsub").append(response);
                }
            });

        }

        /* if location changed */
        $j("#homeSearch #location").change(function () {
            fill_dd_cities();
        });


    })
</script></body></html>