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
                'label' => __('Accent up', 'icecubo'),
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
            'core/comment-content',
            array(
                'name'  => 'icecubo-comment-content-bubble',
                'label' => __('Bubble', 'icecubo'),
            )
        );

        register_block_style(
            'core/comment-reply-link',
            array(
                'name'  => 'icecubo-comment-reply-button-square',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/comment-reply-link',
            array(
                'name'  => 'icecubo-comment-reply-button-outline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/comment-reply-link',
            array(
                'name'  => 'icecubo-comment-reply-button-oval',
                'label' => __('Oval', 'icecubo'),
            )
        );

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
            'core/details',
            array(
                'name'  => 'icecubo-details-square',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/details',
            array(
                'name'  => 'icecubo-details-oval',
                'label' => __('Oval', 'icecubo'),
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
            'core/heading',
            array(
                'name'  => 'icecubo-accent-text-small-1',
                'label' => __('Accent small 1', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-accent-text-small-2',
                'label' => __('Accent small 2', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-accent-text-huge-1',
                'label' => __('Accent huge 1', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-accent-text-huge-2',
                'label' => __('Accent huge 2', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-underline-color-primary',
                'label' => __('Underline colored', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-underline-overline',
                'label' => __('Underline/overline', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-aside-lines',
                'label' => __('Aside lines', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-asterisk-over',
                'label' => __('Asterisk', 'icecubo'),
            )
        );

        // From the Twenty Twenty Four theme
        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-star-over',
                'label' => __('Star', 'icecubo'),
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
                'name'  => 'icecubo-mix-colors-light',
                'label' => __('Mix colors light', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-mix-colors-glow',
                'label' => __('Mix colors glow', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-mix-colors-glow-2',
                'label' => __('Mix colors glow light', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-mix-colors-glow-3',
                'label' => __('Mix colors glow highlight', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-mix-colors-focus',
                'label' => __('Mix colors focused', 'icecubo'),
            )
        );

        register_block_style(
            'core/heading',
            array(
                'name'  => 'icecubo-mix-colors-to-light',
                'label' => __('Transit to light color', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-solid-frame',
                'label' => __('Solid frame', 'icecubo'),
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
            'core/image',
            array(
                'name'  => 'icecubo-image-spaced-frame',
                'label' => __('Spaced frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-spaced-cutted-frame',
                'label' => __('Spaced & cut frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-sink-frame-left',
                'label' => __('Sink left', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-sink-frame-right',
                'label' => __('Sink right', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-angular-all',
                'label' => __('Angular frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-angular-diagonal-1',
                'label' => __('Angular D1', 'icecubo'),
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'icecubo-image-angular-diagonal-2',
                'label' => __('Angular D2', 'icecubo'),
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'icecubo-check-list',
                'label' => __('Checks', 'icecubo'),
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'icecubo-fill-list',
                'label' => __('Fill', 'icecubo'),
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'icecubo-plus-list',
                'label' => __('Plus', 'icecubo'),
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
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-round',
                'label' => __('Rounded', 'icecubo'),
            )
        );

        register_block_style(
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-solid-frame',
                'label' => __('Solid frame', 'icecubo'),
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
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-spaced-frame',
                'label' => __('Spaced frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-spaced-cutted-frame',
                'label' => __('Spaced & cut frame', 'icecubo'),
            )
        );

        register_block_style(
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-sink-frame-left',
                'label' => __('Sink left', 'icecubo'),
            )
        );

        register_block_style(
            'core/media-text',
            array(
                'name'  => 'icecubo-media-text-sink-frame-right',
                'label' => __('Sink right', 'icecubo'),
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

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-highlight-p',
                'label' => __('Accent box', 'icecubo'),
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
                'name'  => 'icecubo-mix-colors-light',
                'label' => __('Mix colors light', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-mix-colors-glow',
                'label' => __('Mix colors glow', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-mix-colors-glow-2',
                'label' => __('Mix colors glow light', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-mix-colors-glow-3',
                'label' => __('Mix colors glow highlight', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-mix-colors-focus',
                'label' => __('Mix colors focused', 'icecubo'),
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'icecubo-mix-colors-to-light',
                'label' => __('Transit to light color', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-author',
            array(
                'name'  => 'icecubo-square-post-byline',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-author',
            array(
                'name'  => 'icecubo-outline-post-byline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-author',
            array(
                'name'  => 'icecubo-oval-post-byline',
                'label' => __('Oval', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-date',
            array(
                'name'  => 'icecubo-square-post-byline',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-date',
            array(
                'name'  => 'icecubo-outline-post-byline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-date',
            array(
                'name'  => 'icecubo-oval-post-byline',
                'label' => __('Oval', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-navigation-link',
            array(
                'name'  => 'icecubo-square-post-byline',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-navigation-link',
            array(
                'name'  => 'icecubo-oval-post-byline',
                'label' => __('Oval', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-navigation-link',
            array(
                'name'  => 'icecubo-outline-post-byline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'icecubo-square-post-byline',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'icecubo-outline-post-byline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'icecubo-oval-post-byline',
                'label' => __('Oval', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'icecubo-each-square-post-byline',
                'label' => __('Each Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'icecubo-each-outline-post-byline',
                'label' => __('Each Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'icecubo-each-oval-post-byline',
                'label' => __('Each Oval', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-accent-text-small-1',
                'label' => __('Accent small 1', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-accent-text-small-2',
                'label' => __('Accent small 2', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-accent-text-huge-1',
                'label' => __('Accent huge 1', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-accent-text-huge-2',
                'label' => __('Accent huge 2', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-underline-color-primary',
                'label' => __('Underline colored', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-underline-overline',
                'label' => __('Underline/overline', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-aside-lines',
                'label' => __('Aside lines', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-asterisk-over',
                'label' => __('Asterisk', 'icecubo'),
            )
        );

        // From the Twenty Twenty Four theme
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-star-over',
                'label' => __('Star', 'icecubo'),
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
                'name'  => 'icecubo-mix-colors-light',
                'label' => __('Mix colors light', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-mix-colors-glow',
                'label' => __('Mix colors glow', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-mix-colors-glow-2',
                'label' => __('Mix colors glow light', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-mix-colors-glow-3',
                'label' => __('Mix colors glow highlight', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-mix-colors-focus',
                'label' => __('Mix colors focused', 'icecubo'),
            )
        );

        register_block_style(
            'core/post-title',
            array(
                'name'  => 'icecubo-mix-colors-to-light',
                'label' => __('Transit to light color', 'icecubo'),
            )
        );

        register_block_style(
            'core/query-pagination',
            array(
                'name'  => 'icecubo-square-post-byline',
                'label' => __('Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/query-pagination',
            array(
                'name'  => 'icecubo-outline-post-byline',
                'label' => __('Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/query-pagination',
            array(
                'name'  => 'icecubo-oval-post-byline',
                'label' => __('Oval', 'icecubo'),
            )
        );

        register_block_style(
            'core/query-pagination',
            array(
                'name'  => 'icecubo-each-square-post-byline',
                'label' => __('Each Square', 'icecubo'),
            )
        );

        register_block_style(
            'core/query-pagination',
            array(
                'name'  => 'icecubo-each-outline-post-byline',
                'label' => __('Each Outline', 'icecubo'),
            )
        );

        register_block_style(
            'core/query-pagination',
            array(
                'name'  => 'icecubo-each-oval-post-byline',
                'label' => __('Each Oval', 'icecubo'),
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

        // conditionally load block files if the Pro plugin isn't active
        $conditional_blocks = ! function_exists('icecubo_pro_enqueue_block_styles')
            ? array(
                'core/navigation',
                'core/navigation-submenu',
                'core/media-text'
            )
            : array();

        // Add the block name (with namespace) for each style.
        $blocks = array(
            'core/button',
            'core/comment-content',
            'core/comment-reply-link',
            'core/details',
            'core/image',
            'core/list',
            'core/navigation-link',
            'core/social-links',
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
