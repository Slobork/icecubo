<?php
// phpcs:ignore
/**
 * Block styles.
 *
 * @package IceCubo
 */


if (! function_exists('icecubo_register_block_styles') ) {

    /**
     * Register block styles
     *
     * @return void
     */
    // phpcs:ignore
    function icecubo_register_block_styles()
    {

        register_block_style(
            'core/button',
            array(
                'name'  => 'icecubo-shadow-button',
                'label' => __('Shadow', 'icecubo'),
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'icecubo-noborder-button',
                'label' => __('No border', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-text-shadow-heading',
                'label' => __('Shadow', 'icecubo'),
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'icecubo-small-margin-list',
                'label' => __('Small margin', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-shadow-p',
                'label' => __('Shadow', 'icecubo'),
            )
        );

    }
    add_action('init', 'icecubo_register_block_styles');

}


if (! function_exists('icecubo_enqueue_block_styles') ) {

    /**
     * Enqueue block styles
     *
     * @return void
     */
    // phpcs:ignore
    function icecubo_enqueue_block_styles()
    {
        // Add the block name (with namespace) for each style.
        $blocks = array(
            'core/button',
            'core/heading',
            'core/list',
            'core/paragraph'
        );

        // Loop through each block and enqueue its styles.
        foreach ( $blocks as $block ) {

            // Replace slash with hyphen for filename.
            $slug = str_replace('/', '-', $block);

            wp_enqueue_block_style(
                $block, array(
                'handle' => "icecubo-block-{$slug}",
                'src'    => get_theme_file_uri("assets/css/blocks/{$slug}.css"),
                'path'   => get_theme_file_path("assets/css/blocks/{$slug}.css")
                )
            );
        }
    }
        add_action('after_setup_theme', 'icecubo_enqueue_block_styles');
}
