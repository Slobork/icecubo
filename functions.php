<?php
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
 * Version:             1.2.4
 * Text Domain:         icecubo
 * Domain Path:         /languages
 * Requires at least:   6.1
 */

define('ICECUBO_VERSION', wp_get_theme()->get('Version'));

require_once get_theme_file_path('inc/key.php');
require_once get_theme_file_path('inc/register-block-patterns.php');
require_once get_theme_file_path('inc/register-block-styles.php');
require_once get_theme_file_path('inc/theme-json-updater.php');

// WooCommerce options.
if (class_exists('WooCommerce')) {
    include_once get_theme_file_path('inc/woocommerce.php');
}
