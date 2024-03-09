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
            'icecubo-404',
            array( 'label' => esc_html__('IceCubo - 404', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-basic-general',
            array( 'label' => esc_html__('IceCubo - Basic (General)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-basic-features',
            array( 'label' => esc_html__('IceCubo - Basic (Features)', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-basic-testimonials',
            array( 'label' => esc_html__('IceCubo - Basic (Testimonials)', 'icecubo') )
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
            'icecubo-footer',
            array( 'label' => esc_html__('IceCubo - Footers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-header',
            array( 'label' => esc_html__('IceCubo - Headers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-hero',
            array( 'label' => esc_html__('IceCubo - Heroes', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page',
            array( 'label' => esc_html__('IceCubo - Pages', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-query',
            array( 'label' => esc_html__('IceCubo - Posts', 'icecubo') )
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
            'icecubo-post-header',
            array( 'label' => esc_html__('IceCubo - Post headers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-pricing',
            array( 'label' => esc_html__('IceCubo - Pricing', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-section',
            array( 'label' => esc_html__('IceCubo - Sections', 'icecubo') )
        );

    }
    add_action('init', 'icecubo_register_block_pattern_category', 9);
}
