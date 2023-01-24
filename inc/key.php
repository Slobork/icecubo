<?php
// phpcs:ignore
/**
 * Common action and filters
 *
 * @package IceCubo
 */


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
            wp_enqueue_style(
                'icecubo-main',
                get_template_directory_uri() . '/assets/css/main.css',
                array(),
                '0.0.1',
                'all'
            );
        }

    }
    add_action('wp_enqueue_scripts', 'icecubo_scripts_and_styles');
}