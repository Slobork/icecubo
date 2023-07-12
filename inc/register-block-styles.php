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
            'core/heading',
            array(
                'name'  => 'icecubo-underline-overline',
                'label' => __('With underline/overline', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-aside-lines',
                'label' => __('With aside lines', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-mix-colors',
                'label' => __('Mix colors', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-to-light-color',
                'label' => __('Transit to light color', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-tiny-frame',
                'label' => __('Tiny frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-curly-frame',
                'label' => __('Curly frame', 'icecubo'),
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
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-tiny-frame',
                'label' => __('Tiny frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-curly-frame',
                'label' => __('Curly frame', 'icecubo'),
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
            'core/paragraph',
            array(
                'name'  => 'icecubo-tearbox-left-p',
                'label' => __('Tear box left', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-tearbox-right-p',
                'label' => __('Tear box right', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-mix-colors',
                'label' => __('Mix colors', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-to-light-color',
                'label' => __('Transit to light color', 'icecubo'),
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
            'core/post-title',
            array(
                'name'  => 'icecubo-underline-overline',
                'label' => __('With underline/overline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-aside-lines',
                'label' => __('With aside lines', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-mix-colors',
                'label' => __('Mix colors', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-to-light-color',
                'label' => __('Transit to light color', 'icecubo'),
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
            'core/image',
            'core/navigation',
            'core/navigation-link',
            'core/media-text',
            'core/paragraph',
            'core/post-content',
            'core/post-template',
            'core/post-title',
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
