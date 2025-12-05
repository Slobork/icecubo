<?php
 // phpcs:ignore
/**
 * Block patterns and its categories
 *
 * @package IceCubo
 */


if (! function_exists('icecubo_register_block_pattern_category') ) {

    /**
     * Registers block pattern categories.
     *
     * @return void
     */
    // phpcs:ignore
    function icecubo_register_block_pattern_category() {

        register_block_pattern_category(
            'icecubo-section',
            array( 'label' => esc_html__('IceCubo - 1. Sections', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page-front',
            array( 'label' => esc_html__('IceCubo - 2.1. Pages (Front page/Landing)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page-about',
            array( 'label' => esc_html__('IceCubo - 2.2. Pages (About)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page-services',
            array( 'label' => esc_html__('IceCubo - 2.3. Pages (Services)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page-project',
            array( 'label' => esc_html__('IceCubo - 2.4. Pages (Project)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page-contact',
            array( 'label' => esc_html__('IceCubo - 2.5 Pages (Contact)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page-parts',
            array( 'label' => esc_html__('IceCubo - 2.6 Pages (Parts)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-query',
            array( 'label' => esc_html__('IceCubo - 3. Posts', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-404',
            array( 'label' => esc_html__('IceCubo - 404', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-box',
            array( 'label' => esc_html__('IceCubo - Boxes', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-faq',
            array( 'label' => esc_html__('IceCubo - FAQ', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-features',
            array( 'label' => esc_html__('IceCubo - Features', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-footer',
            array( 'label' => esc_html__('IceCubo - Footers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-header',
            array( 'label' => esc_html__('IceCubo - Headers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-headerhero',
            array( 'label' => esc_html__('IceCubo - Header-Heros', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-hero',
            array( 'label' => esc_html__('IceCubo - Heroes', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-numbers',
            array( 'label' => esc_html__('IceCubo - Numbers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-query-magazine-intro',
            array( 'label' => esc_html__('IceCubo - Posts: Magazine intro', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-query-division-one',
            array( 'label' => esc_html__('IceCubo - Posts: Division (one)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-query-division-columns',
            array( 'label' => esc_html__('IceCubo - Posts: Division (columns)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-portfolio',
            array( 'label' => esc_html__('IceCubo - Portfolio', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-post-header',
            array( 'label' => esc_html__('IceCubo - Post headers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-pricing',
            array( 'label' => esc_html__('IceCubo - Pricing', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-team',
            array( 'label' => esc_html__('IceCubo - Team', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-testimonials',
            array( 'label' => esc_html__('IceCubo - Testimonials', 'icecubo') )
        );

    }
    add_action('init', 'icecubo_register_block_pattern_category', 9);
}
