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

        // With Cover styles we do not load the css file, instead styling done in the main.css
        register_block_style(
            'core/cover',
            array(
                'name'  => 'icecubo-rotate-left',
                'label' => __('Rotate left', 'icecubo'),
            )
        );

        register_block_style(
            'core/cover',
            array(
                'name'  => 'icecubo-rotate-right',
                'label' => __('Rotate right', 'icecubo'),
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'icecubo-rotate-left',
                'label' => __('Rotate left', 'icecubo'),
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'icecubo-rotate-right',
                'label' => __('Rotate right', 'icecubo'),
            )
        );

        register_block_style(
            'core/list-item',
            array(
                'name'  => 'icecubo-cancel-list',
                'label' => __('Cancel list', 'icecubo'),
            )
        );

        register_block_style(
            'core/navigation',
            array(
                'name'  => 'icecubo-nav-mark-hovers',
                'label' => __('Hovers standard', 'icecubo'),
            )
        );

        register_block_style(
            'core/navigation',
            array(
                'name'  => 'icecubo-nav-hovers-top',
                'label' => __('Hovers top', 'icecubo'),
            )
        );

        register_block_style(
            'core/navigation',
            array(
                'name'  => 'icecubo-nav-hovers-bottom',
                'label' => __('Hovers bottom', 'icecubo'),
            )
        );

        register_block_style(
            'core/navigation',
            array(
                'name'  => 'icecubo-nav-hovers-2',
                'label' => __('Hovers top + bottom', 'icecubo'),
            )
        );

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
                //'core/media-text'
            )
            : array();

        // Add the block name (with namespace) for each style.
        $blocks = array(
            'core/button',
            'core/navigation-link',
            'core/query-pagination',
            'core/quote'
            /**
             * Because they share the same css classes,
             * load the css for the folowing elements in
             * the main.css instead in the individual file
             *
             * @Since 1.1.9
             *
             * 'core/heading',
             * 'core/paragraph',
             * 'core/post-title',
             */
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
