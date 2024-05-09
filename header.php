<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://theprattvillas.com/wp-content/themes/theprattvillas/assets/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <!-- <link rel="stylesheet" href="<?php  //echo get_stylesheet_directory_uri()
                                        ?>/assets/css/mobiscroll.jquery.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/custom.css?<?= rand(1000, 9999); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/custom-2.css?<?= rand(1000, 9999); ?>">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css"> -->

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e('Skip to content', 'twentytwentyone'); ?>
        </a>

        <!-- Header Start  -->

        <header class="header show__header">
            <div class="container-fluid">
                <div class="header__row">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'header__navigation')); ?>
                    <a href="<?= site_url(); ?>" class="header__logo">
                        <img src="<?= the_field('light_logo', 'option'); ?>" class="logo-light" alt="">
                        <img src="<?= the_field('dark_logo', 'option'); ?>" class="logo-dark" alt="">
                    </a>
                    <!-- <ul class="header__navigation second">
                        
                        <li><a href="https://theprattvillas.com/real-estates/">Real Estates</a></li> -->

                    <!-- li class="sub_menu_new"><a href="https://theprattvillas.com/property-managment/">Property
                                Managment</a> -->
                    <!-- <ul class="drop_menu">
                                    <li><a href="https://theprattvillas.com/tenant-login/">Tenant Login</a></li>
                                    <li><a href="https://theprattvillas.com/owner-login/">Owner Login</a></li>
                                    

                                </ul> -->

                    <!--    <li><a href="https://theprattvillas.com/relocation-consulting/">Relocation
                                Consulting</a></li>
                        <li><a href="https://theprattvillas.com/design-consulting/">Design
                                Consulting</a></li>
                    </ul> -->
                    <?php wp_nav_menu(array('theme_location' => 'right_menu', 'menu_class' => 'header__navigation second')); ?>

                    <!--    <div class="share_btn_new"> 

                            <a href="javascript:void(0)">
                                <button class="grid__button" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                    <div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>

                                        <svg viewBox="0 0 12 14" class="circled__btn-arrow" width="12" height="16" style="height: 16px; width: 12px;"><path d="M3.37 8.457a2 2 0 1 1-.124-3.022l4.783-2.761a2 2 0 1 1 .652 1.163l-4.728 2.73a2.007 2.007 0 0 1 .029.704L8.81 10.06a2 2 0 1 1-.747 1.108L3.37 8.457z"></path></svg>
                                    </div>
                                </button>
                            </a>

                        </div> -->


                    <!-- <div class="share_btn_link">
                                      <div class="close_btn">
                                         <a href="#">
                                <button class="grid__button" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">Close
                                    <div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>

                                       <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;"><path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path></svg>
                                    </div>
                                </button>
                            </a>
                                      </div>
                                  
                                   <div class="mobil-nav-new">
                                      
                                         <ul>
                                            <li><a href="#" target="blank">Facebook</a></li>
                                            <li><a href="https://www.instagram.com/propertybrothersnc/" target="blank">Instagram</a></li>
                                            <li><a href="https://twitter.com/ThePrattVillas" target="blank">Twitter</a></li>
                                            <li><a href="#" target="blank">Linkdin</a></li>
                                            <li><button onclick="copyLink()">Url</button>
                                             <input type="text" id="link" value="https://theprattvillas.com" target="blank"></li>
                                         </ul>
                                    
                                   </div>
                            </div> -->


                    <div class="tgl-menu-btn">
                        <h6>MENU</h6>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-menu">
            <div class="toggle-logo">

                <div class="crss">
                    <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;">
                        <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path>
                    </svg>
                </div>

                <a href="https://theprattvillas.com/" class="tgl_logo">
                    <img src="<?= the_field('mobile_logo', 'option'); ?>" class="logo-light-mobile" alt="">
                </a>
            </div>

            <div class="mobil-nav">

                <?php wp_nav_menu(array('theme_location' => 'mobile_menu', 'menu_class' => '')); ?>
            </div>
        </div>

        <!-- Header End -->

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">