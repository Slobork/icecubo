<?php
// phpcs:ignore
/**
 * Common action and filters
 *
 * @package IceCubo
 */


if (! function_exists('icecubo_start') ) {

    /**
     * Theme basic support.
     *
     * @return void.
     */
    // phpcs:ignore
    function icecubo_start()
    {
        /**
         * Theme support.
         *
         * These features are enabled by default in block themes from version 5.9:
         * 'post-thumbnails'
         * 'responsive-embeds'
         * 'editor-styles'
         * 'html5'
         * 'automatic-feed-links'
         *
         * @see https://developer.wordpress.org/reference/functions/add_theme_support/#comment-5596
         */
        add_theme_support('wp-block-styles');

        add_editor_style(array('assets/css/editor-style.css'));

        // translation support
        load_theme_textdomain('icecubo', get_template_directory() . '/languages');

        // Replace the default [...] excerpt more with an elipsis.
        add_filter(
            'excerpt_more',
            function ( $more ) {
                return '&hellip;';
            }
        );

    }
    add_action('after_setup_theme', 'icecubo_start');
}


if (! function_exists('icecubo_scripts_and_styles') ) {

    /**
     * Enqueue.
     *
     * @return void Registering and enqueueing assets.
     */
    // phpcs:ignore
    function icecubo_scripts_and_styles()
    {

        if (! is_admin() ) {
            wp_enqueue_style('icecubo-main', get_template_directory_uri() . '/assets/css/main.css', array(), ICECUBO_VERSION, 'all');

            if (class_exists('WooCommerce')) {
                wp_enqueue_style('icecubo-woo', get_template_directory_uri() . '/assets/css/woo.css', array(), ICECUBO_VERSION, 'all');
            }
        }

    }

    add_action('wp_enqueue_scripts', 'icecubo_scripts_and_styles');
}


/**
 * Set transite for the theme options page redirection upon activation.
 */
if ( ! function_exists( 'icecubo_activation_redirect' ) ) {
    function icecubo_activation_redirect() {
        set_transient( 'icecubo_do_activation_redirect', true, 30 );
    }
    add_action( 'after_switch_theme', 'icecubo_activation_redirect' );
}

/**
 * Redirect to the theme options page right after theme activation.
 */
if ( ! function_exists( 'icecubo_redirect_after_activation' ) ) {
    function icecubo_redirect_after_activation() {
        if ( ! is_admin() ) {
            return;
        }

        if ( ! get_transient( 'icecubo_do_activation_redirect' ) ) {
            return;
        }

        delete_transient( 'icecubo_do_activation_redirect' );

        if ( wp_doing_ajax() ) {
            return;
        }

        if ( current_user_can( 'manage_options' ) ) {
            wp_safe_redirect( admin_url( 'themes.php?page=icecubo-theme-options' ) );
            exit;
        }
    }
    add_action( 'admin_init', 'icecubo_redirect_after_activation' );
}
