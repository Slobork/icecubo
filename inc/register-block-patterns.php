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
            'icecubo-box',
            array( 'label' => esc_html__('IceCubo - Boxes', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-footer',
            array( 'label' => esc_html__('IceCubo - Footers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-general',
            array( 'label' => esc_html__('IceCubo - General', 'icecubo') )
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
            'icecubo-post-header',
            array( 'label' => esc_html__('IceCubo - Post headers', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-section',
            array( 'label' => esc_html__('IceCubo - Sections', 'icecubo') )
        );

    }
    add_action('init', 'icecubo_register_block_pattern_category', 9);
}
