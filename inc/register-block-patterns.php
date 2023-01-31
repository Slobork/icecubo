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

        register_block_pattern_category(
            'icecubo-general',
            array( 'label' => esc_html__('IceCubo - General', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-footer',
            array( 'label' => esc_html__('IceCubo - Footer', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-header',
            array( 'label' => esc_html__('IceCubo - Header', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-hero',
            array( 'label' => esc_html__('IceCubo - Hero', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-page',
            array( 'label' => esc_html__('IceCubo - Page', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-section',
            array( 'label' => esc_html__('IceCubo - Section', 'icecubo') )
        );

        register_block_pattern_category(
            'icecubo-query',
            array( 'label' => esc_html__('IceCubo - Query', 'icecubo') )
        );

    }
    add_action('init', 'icecubo_register_block_pattern_category', 9);
}
