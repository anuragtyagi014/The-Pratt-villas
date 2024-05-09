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
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()?>/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()?>/assets/css/luxury-rentals.css">
</head>



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

    <!-- Header v2 Start -->

<header class="header-v2">
    <div class="container-fluid">
        <div class="header-v2__row">
            <a href="https://theprattvillas.com/" class="header-v2__logo">
                <img src="https://theprattvillas.com/wp-content/uploads/2023/02/Logo-1.png" alt="">
            </a>

            <!-- <ul class="header-v2__navigation">
                <li class="header-v2__navigation-link"><a href="tel:919-536-896">919-536-896</a></li>
                <li class="header-v2__navigation-link"><a href="javascript:void(0);">Buy</a></li>
                <li class="header-v2__navigation-link"><a href="javascript:void(0);">Sell</a></li>
                <li class="header-v2__navigation-link"><a href="javascript:void(0);">Rent</a></li>
                <li class="header-v2__navigation-link"><a href="javascript:void(0);">Mortgage</a></li>
                <li class="header-v2__navigation-link"><a href="javascript:void(0);">Real Estate</a></li>
                <li class="header-v2__navigation-link"><a href="javascript:void(0);">Agent</a></li>
            </ul> -->

            <div id="addedFields" class="desktop-fields added-search-fields"></div>

            <div id="addedFieldsModals">
                <button type="button" id="modalBtn" class="modal-button"><i class="fas fa-search"></i> search now</button>
            </div>

            <ul class="header-v2__actions" style="display: none;">
                <li class="dd-container">
                    <button class="dd-btn" onclick="toggleDropdown()"><i class="fas fa-bars"></i> <i class="fas fa-user-circle"></i></button>
                    <ul class="dd-menu" id="dd-menu">
                        <li class="dd-item">
                            <a>Sign Up</a>
                        </li>
                        <li class="dd-item">
                            <a>Log In</a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li class="dd-item">
                            <a>Help</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Booking Categories Start -->

<section class="booking-categories__section" style="display: none;">
    <div class="container-fluid">
        <div class="booking-categories__row">
            <ul class="booking-categories__list">
                <li>
                    <a href="javascript:void(0);" class="booking-category__active">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/aaa02c2d-9f0d-4c41-878a-68c12ec6c6bd.png" alt="">
                        <p>Farms</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/3fb523a0-b622-4368-8142-b5e03df7549b.png" alt="">
                        <p>Amazing Pools</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/3b1eb541-46d9-4bef-abc4-c37d77e3c21b.png" alt="">
                        <p>Amazing Views</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/78ba8486-6ba6-4a43-a56d-f556189193da.png" alt="">
                        <p>Mansions</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/6ad4bd95-f086-437d-97e3-14d12155ddfe.png" alt="">
                        <p>Countryside</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/eb7ba4c0-ea38-4cbb-9db6-bdcc8baad585-2.png" alt="">
                        <p>Private Room</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/c5a4f6fc-c92c-4ae8-87dd-57f1ff1b89a6-1.png" alt="">
                        <p>OMG!</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/33dd714a-7b4a-4654-aaf0-f58ea887a688.png" alt="">
                        <p>Historical Homes</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/bcd1adc0-5cee-4d7a-85ec-f6730b0f8d0c.png" alt="">
                        <p>Beach Front</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/c8e2ed05-c666-47b6-99fc-4cb6edcde6b4.png" alt="">
                        <p>Luxe</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/732edad8-3ae0-49a8-a451-29a8010dcc0c.png" alt="">
                        <p>Cabbins</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/aaa02c2d-9f0d-4c41-878a-68c12ec6c6bd.png" alt="">
                        <p>Farms</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/3fb523a0-b622-4368-8142-b5e03df7549b.png" alt="">
                        <p>Amazing Pools</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/3b1eb541-46d9-4bef-abc4-c37d77e3c21b.png" alt="">
                        <p>Amazing Views</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/78ba8486-6ba6-4a43-a56d-f556189193da.png" alt="">
                        <p>Mansions</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/6ad4bd95-f086-437d-97e3-14d12155ddfe.png" alt="">
                        <p>Countryside</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/eb7ba4c0-ea38-4cbb-9db6-bdcc8baad585-2.png" alt="">
                        <p>Private Room</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/c5a4f6fc-c92c-4ae8-87dd-57f1ff1b89a6-1.png" alt="">
                        <p>OMG!</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/33dd714a-7b4a-4654-aaf0-f58ea887a688.png" alt="">
                        <p>Historical Homes</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/bcd1adc0-5cee-4d7a-85ec-f6730b0f8d0c.png" alt="">
                        <p>Beach Front</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/c8e2ed05-c666-47b6-99fc-4cb6edcde6b4.png" alt="">
                        <p>Luxe</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/732edad8-3ae0-49a8-a451-29a8010dcc0c.png" alt="">
                        <p>Cabbins</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/aaa02c2d-9f0d-4c41-878a-68c12ec6c6bd.png" alt="">
                        <p>Farms</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/3fb523a0-b622-4368-8142-b5e03df7549b.png" alt="">
                        <p>Amazing Pools</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/3b1eb541-46d9-4bef-abc4-c37d77e3c21b.png" alt="">
                        <p>Amazing Views</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/78ba8486-6ba6-4a43-a56d-f556189193da.png" alt="">
                        <p>Mansions</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/6ad4bd95-f086-437d-97e3-14d12155ddfe.png" alt="">
                        <p>Countryside</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/eb7ba4c0-ea38-4cbb-9db6-bdcc8baad585-2.png" alt="">
                        <p>Private Room</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/c5a4f6fc-c92c-4ae8-87dd-57f1ff1b89a6-1.png" alt="">
                        <p>OMG!</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/33dd714a-7b4a-4654-aaf0-f58ea887a688.png" alt="">
                        <p>Historical Homes</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/bcd1adc0-5cee-4d7a-85ec-f6730b0f8d0c.png" alt="">
                        <p>Beach Front</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/c8e2ed05-c666-47b6-99fc-4cb6edcde6b4.png" alt="">
                        <p>Luxe</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="https://theprattvillas.com/wp-content/uploads/2023/02/732edad8-3ae0-49a8-a451-29a8010dcc0c.png" alt="">
                        <p>Cabbins</p>
                    </a>
                </li>
            </ul>
            <div class="filter-container">
                <button class="booking-categories__filter" id="filterDropDownBtn" onclick="toggleFilter()"><i class="fas fa-filter"></i>
                <span>filters</span></button>
                    <form>
                        <ul id="filterDropDown">
                        <li class="dd-item">
                            <label>Enter Range</label>
                            <input type="range" id="cowbell" name="cowbell" min="1000" max="100000" value="10000" step="100">
                        </li>
                        <li class="dd-item">
                            <a>Log In</a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li class="dd-item">
                             <button type="submit" class="btn btn-dark">Apply Changes</button>
                        </li>
                    </ul>
                    </form>
            </div>
        </div>
    </div>
</section>

<!-- Booking Categories End -->
</header>

<!-- Header v2 Start -->

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
