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
                'name'  => 'icecubo-highlight-up-button',
                'label' => __('Highlight up', 'icecubo'),
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
                'name'  => 'icecubo-highlight-heading',
                'label' => __('Highlight', 'icecubo'),
            )
        );

        register_block_style(
            'core/navigation',
            array(
                'name'  => 'icecubo-nav-mark-hovers',
                'label' => __('Mark hovers', 'icecubo'),
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
            'core/paragraph',
            array(
                'name'  => 'icecubo-highlight-p',
                'label' => __('Highlight box', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-template',
            array(
                'name'  => 'icecubo-boxed-post-template',
                'label' => __('Boxed', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-highlight-title',
                'label' => __('Highlight', 'icecubo'),
            )
        );

        register_block_style(
            'core/social-links',
            array(
                'name'  => 'icecubo-social-outline',
                'label' => __('Outline', 'icecubo'),
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
            'core/post-title',
            'core/navigation',
            'core/navigation-link',
            'core/paragraph',
            'core/post-template',
            'core/social-links',
            'core/quote'
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
