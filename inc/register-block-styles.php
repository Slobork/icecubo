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

        /* Cancel for list registered here, while it's styled in each json file of available lists - styles/blocks/list */
        register_block_style(
            'core/list-item',
            array(
                'name'  => 'icecubo-cancel-list',
                'label' => __('Cancel list', 'icecubo'),
            )
        );

        /* Nav link stays registered here, coz it didn't load when registered from the json file on the front-end site's side */
        register_block_style(
            'core/navigation-link',
            array(
                'name'  => 'icecubo-nav-item-outline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/navigation-submenu',
            array(
                'name'  => 'icecubo-nav-submenu-mega',
                'label' => __('Multi', 'icecubo'),
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

        // conditionally load block files if the Pro plugin isn't active
        $conditional_blocks = ! function_exists('icecubo_pro_enqueue_block_styles')
            ? array(
                'core/navigation',
                'core/navigation-submenu',
            )
            : array();

        // Add the block name (with namespace) for each style.
        $blocks = array(
            'core/button',
            'core/navigation-link',
            'core/query-pagination',
            'core/quote',
            // load files for the image and media-text blocks, though they do not have styles registered in this file
            'core/image',
            'core/media-text'
        );

        $blocks = array_merge($blocks, $conditional_blocks);

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
