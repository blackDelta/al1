<!-- #featured-cars -->
<div id="featuredCars" class="container">
    <div class="container_12 clearfix">
        <div class="grid_12 clearfix"><h4 class="section-title section-line">Featured Cars</h4></div>

        <div style="visibility: visible;" id="featuredCars_tj_container" class="grid_12 tj_container">

            <div class="tj_nav">
                <span id="tj_prev" class="tj_prev">Previous</span>
                <span id="tj_next" class="tj_next">Next</span>
            </div>

            <div class="tj_wrapper">
                <ul style="position: relative;" class="tj_gallery">

                    <li style="position: absolute; left: 0px; top: 0px;" class="grid_4 alpha tj_row_1">
                        <a href="" class="image-zoom">
                            <img src="assets/images/default-thumb1-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300">
                            <span class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">New Audi i8 Hybrid Consept 2011</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 310px; top: 0px;" class="grid_4  tj_row_1">
                        <a href="#" class="image-zoom">
                            <img src="assets/images/default-thumb6-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300">
                            <span class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">Unused Lotus Elan Saloon 2011 2dr</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 630px; top: 0px;" class="grid_4 omega tj_row_1">
                        <a href="" class="image-zoom">
                            <img src="assets/images/default-thumb5-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300">
                            <span class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">Jaguar C-X75 2 dr Saloon 2012</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 0px; top: 0px; display: none;" class="grid_4 alpha tj_row_2">
                        <a href="#" class="image-zoom">
                            <img src="assets/images/default-thumb9-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300">
                            <span class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">New Toyota FT-85 2 dr Cpe Coupe</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 310px; top: 0px; display: none;" class="grid_4  tj_row_2">
                        <a href="" class="image-zoom">
                            <img src="assets/images/default-thumb8-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300">
                            <span class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">Unused Mercedes SLR Stirling Moss</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 630px; top: 0px; display: none;" class="grid_4 omega tj_row_2">
                        <a href="#" class="image-zoom">
                            <img src="assets/images/default-thumb7-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300">
                            <span class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">New Mercedes F800 4dr Cpe 2011</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 0px; top: 0px; display: none;" class="grid_4 alpha tj_row_3">
                        <a href="#" class="image-zoom">
                            <img src="assets/images/default-thumb3-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300"> <span
                            class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">New Chevrolet Camaro 2012 2dr Sport</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 310px; top: 0px; display: none;" class="grid_4  tj_row_3">
                        <a href="#" class="image-zoom">
                            <img src="assets/images/default-thumb2-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300"> <span
                            class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">Used Audi RS 5 2dr Cpe 2010</a></h5>

                        <div class="clear"></div>
                    </li>

                    <li style="position: absolute; left: 630px; top: 0px; display: none;" class="grid_4 omega tj_row_3">
                        <a href="#" class="image-zoom">
                            <img src="assets/images/default-thumb-300x200.jpg" class="attachment-featured"
                                 alt="default-thumb" title="default-thumb" height="200" width="300"> <span
                            class="zoom-icon"></span>
                        </a>
                        <h5 class="marginT5"><a href="#">Audi e-tron Hybrid Consept 2012</a></h5>

                        <div class="clear"></div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<script type="text/javascript">
    var $j = jQuery.noConflict();

    $j(function () {
        $j('#featuredCars_tj_container').gridnav({
            rows:1,
            type:{
                mode:'disperse', // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
                speed:1000, // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                easing:'', // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                factor:10, // for seqfade, sequpdown, rows
                reverse:''            // for sequpdown
            }
        });
    });
</script>
<!-- end - #featured-cars -->
