<?php
 // phpcs:ignore
/**
 * Block patterns and its categories
 *
 * @package IceCubo
 * @since   0.0.1
 */


if (! function_exists('icecubo_register_block_pattern_category') ) {

    /**
     * Registers block pattern categories.
     *
     * @return void
     */
    // phpcs:ignore
    function icecubo_register_block_pattern_category() {

        /*
        register_block_pattern_category(
            'jace-images',
            array( 'label' => esc_html__('Jace - Images', 'jace') )
        );

        register_block_pattern_category(
            'jace-woo',
            array( 'label' => esc_html__('Jace - WooCommerce', 'jace') )
        );

        register_block_pattern_category(
            'jace-post-header',
            array( 'label' => esc_html__('Jace - Post and page headers', 'jace') )
        );

        register_block_pattern_category(
            'jace-pages',
            array( 'label' => esc_html__('Jace - Pages', 'jace') )
        );

        register_block_pattern_category(
            'jace-sections',
            array( 'label' => esc_html__('Jace - Page Sections', 'jace') )
        );

        register_block_pattern_category(
            'jace-blog',
            array( 'label' => esc_html__('Jace - Blog layouts', 'jace') )
        );

        register_block_pattern_category(
            'jace-site-footer',
            array( 'label' => esc_html__('Jace - Site Footers', 'jace') )
        );

        register_block_pattern_category(
            'jace-site-header',
            array( 'label' => esc_html__('Jace - Site Headers', 'jace') )
        );
        */

        register_block_pattern_category(
            'icecubo-hero',
            array( 'label' => esc_html__('IceCubo - Hero', 'icecubo') )
        );
    }
    add_action('init', 'icecubo_register_block_pattern_category', 9);
}
