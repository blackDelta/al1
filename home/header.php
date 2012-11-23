<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <title><?php echo $config['app']['name']; ?> | <?php echo $page_title?></title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
    <?php
    include('home/css_includes.php');
    include('home/js_includes.php');
    ?>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            <!-- Superfish -->
            jQuery('.navigation ul').superfish({
                delay:200,
                animation:{opacity:'show', height:'show'},
                speed:500,
                autoArrows:false,
                dropShadows:false
            });

            var $j = jQuery.noConflict();

            <!-- TopPanel -->
            $j("#topPanel .panel-tab").click(function () {
                $j("#topPanel .panel").slideToggle(300);
            });

            <!-- Alert -->
            $j(".alert").delay(5000).slideUp(350);
        });
    </script>

</head>
<body class="home">

<!-- #top slide panel -->
<?php include("home/top_panel.php"); ?>

<!-- #header -->
<div id="header" class="container">
    <div class="container_12 clearfix">
        <div class="grid_4">
            <div id="logo"><h1><a href="./">Garipk.com</a></h1></div>
        </div>
        <div class="grid_8">

            <div class="navigation">
                <ul class="clearfix sf-js-enabled">
                    <li><a href="./">Home</a></li>
                    <li><a href="post.php">Sell Your Car</a></li>
                    <li><a href="advance_search.php">Find Cars</a></li>
                    <li><a href="search.php">New Cars</a></li>
                        <ul style="display: none; visibility: hidden;" class="sub-menu sf-js-enabled">
                            <li><a href="#">Audi</a></li>
                            <li><a href="#">Alfa Romeo</a></li>
                            <li><a href="#">BMW</a></li>
                            <li><a href="#">Ford</a></li>
                            <li><a href="#">Mercedes</a>
                                <ul style="display: none; visibility: hidden;" class="sub-menu sf-js-enabled">
                                    <li><a href="#">C Class</a></li>
                                    <li><a href="#">SLR</a></li>
                                    <li><a href="#">F800</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<!-- end - #header -->