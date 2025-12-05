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
