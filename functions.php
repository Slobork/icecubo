<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Theme Name:         IceCubo
 * Description:        IceCubo is a block-based theme for WordPress.
 *
 * PHP version  7.4
 *
 * @category Theme
 * @package  IceCubo
 * @author   MaxPressy <webmaster@maxpressy.com>
 * @license  GPL v2 or later
 * @link     maxpressy.com
 *
 * Author URI:          https://maxpressy.com
 * License:             GPL v2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Version:             1.2.5
 * Text Domain:         icecubo
 * Domain Path:         /languages
 * Requires at least:   6.1
 */

define('ICECUBO_VERSION', wp_get_theme()->get('Version'));

/**
 * Freemius SDK initialization and related functions.
 */
if ( ! function_exists( 'icecubo_freemius' ) ) {
    // Create a helper function for easy SDK access.
    function icecubo_freemius() {
        global $icecubo_freemius;

        if ( ! isset( $icecubo_freemius ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/vendor/freemius/start.php';

            $icecubo_freemius = fs_dynamic_init( array(
                'id'                  => '27848',
                'slug'                => 'icecubo',
                'premium_slug'        => 'icecubo-pro-premium',
                'type'                => 'theme',
                'public_key'          => 'pk_d8a6c83df086fd7fcf1fb1a57a8d0',
                'is_premium'          => false,
                'has_addons'          => true,
                'has_paid_plans'      => false,
                'is_org_compliant'    => true,
                'menu'                => array(
                    'slug'           => 'icecubo-theme-options',
                    'parent'         => array(
                        'slug' => 'themes.php',
                    ),
                ),
            ) );
        }

        return $icecubo_freemius;
    }

    /**
     * Initialize Freemius.
     */
    function icecubo_freemius_init() {

        // Init Freemius.
        icecubo_freemius();
        // Signal that SDK was initiated.
        do_action( 'icecubo_freemius_loaded' );

    }
    add_action('after_setup_theme', 'icecubo_freemius_init');


    /**
     * Prepare Freemius uninstall cleanup.
     *
     * @return void
     * 
     * Create the uninstall function that uninstalls the IceCubo theme options 
     * However, since IceCubo theme (Free) does not have any custom options stored in the database, 
     * the function does not perform any additional actions excpt that WordPress itself is doing.
     * 
     * The function is defined and hooked to the 'after_uninstall' action of the Freemius SDK to ensure
     * deletion of Freemius data.
     * 
     * Also, if in the future any options are added to the free version of the theme, 
     * they should be hanled from here.
     * 
     * @link https://freemius.com/help/documentation/release-management/deployment/#uninstallphp-file
     */
    function icecubo_freemius_uninstall_cleanup() {
        // If added, Delete theme options.    
        if ( false !== get_option( 'icecubo_theme_options' ) ) {
            delete_option( 'icecubo_theme_options' );
        }
        // This is actually always present coz WordPress creates it when the theme is activated
        if ( false !== get_option( 'theme_mods_icecubo' ) ) {
            delete_option( 'theme_mods_icecubo' );
        }
    }

    /**
     * Not like register_uninstall_hook(), you do NOT have to use a static function.
     * Triggered after the icecubo_freemius_uninstall_cleanup function is executed,
     * Freemius SDK will handle its own data deletion.
     */
    icecubo_freemius()->add_action('after_uninstall', 'icecubo_freemius_uninstall_cleanup');

    /**
     * For the Opt-in hook, customizing the message for existing users who are updating the theme and for new users.
     * 
     * /themes.php?icecubo-theme_show_optin=true - this is the URL query parameter that triggers the opt-in modal dialog for the IceCubo theme.
     */
    if ( ! function_exists( 'icecubo_freemius_custom_modal_message' ) ) {
        function icecubo_freemius_custom_modal_message( $message, $user_first_name, $product_title, $user_login, $site_link, $freemius_link ) {
            return sprintf( __( 'Please help us improve %2$s! Opt-in to get important email notifications, like security & feature updates. Also, some data (non-sensitive) about your usage of %2$s will be sent to %5$s (our payment processor and theme management updater). If you skip this, that\'s okay! %2$s will still work just fine.', 'icecubo' ), $user_first_name, '<b>' . $product_title . '</b>', '<b>' . $user_login . '</b>', $site_link, $freemius_link );
        }
    }

    // ...Customizing the message for existing users who are updating the theme.
    icecubo_freemius()->add_filter( 'connect_message_on_update', 'icecubo_freemius_custom_modal_message', 10, 6 );

    // ...Customizing the Opt-in modal dialog for new users.
    icecubo_freemius()->add_filter( 'connect_message', 'icecubo_freemius_custom_modal_message', 10, 6 );
    

    // Custom icon for the Freemius modal popup.
    if ( ! function_exists( 'icecubo_freemius_custom_icon' ) ) {
        function icecubo_freemius_custom_icon() {
            return dirname( __FILE__ ) . '/assets/img/ice-cubes.png';
        }
        icecubo_freemius()->add_filter( 'plugin_icon', 'icecubo_freemius_custom_icon' );
    }

} // endif 'icecubo_freemius' function_exists, Freemius SDK function.


/**
 * Include other PHP files with functions and features of the theme.
 */
require_once get_theme_file_path('inc/key.php');
require_once get_theme_file_path('inc/settings-page.php');
require_once get_theme_file_path('inc/register-block-patterns.php');
require_once get_theme_file_path('inc/register-block-styles.php');
require_once get_theme_file_path('inc/theme-json-updater.php');

// WooCommerce options.
if (class_exists('WooCommerce')) {
    include_once get_theme_file_path('inc/woocommerce.php');
}
