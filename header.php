<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6008720aaab10b0018c41f75&product=sticky-share-buttons" async="async"></script>
    <link rel="icon" type="image/x-icon" href="/app/wp-content/themes/sw_arabic_theme/sw_arabic/images/logo.png">
    <style>
        ul li {
          list-style:none;
        }
        .pagination {
        margin-top: 30px;
        justify-content: center;
        }
        .page-numbers {
		border: 1px solid rgba(0,0,0,.2);
		padding: 8px;
        border-radius: 3px;
        background-color : #543434;
        color : #fff;
        margin-right:2px;

        }
        a:hover{
			color: white;
			text-decoration: none;
        }
        .current {
            color : #000;
        }
        .screen-reader-text {
            margin : 10px;
        }
    </style>
</head>
<body>
    <section class="gallery-block cards-gallery">
        <div class="container">
            <div class="d-flex justify-content-end">
                <span class="menu-btn" onclick="openNav()">&#9776;</span>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <?php wp_nav_menu(array('menu' => 'primary', 'container' => '', 'theme_location'=> 'primary'));?>
                </div>
              </div>

            <div class="d-flex justify-content-start ">
                <div class="">

                </div>
                <?php 
                if(function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                 ?>
                <img src="<?php echo $logo[0]?>" alt="" width="35%" height="0%" class="logo">

              </div>
