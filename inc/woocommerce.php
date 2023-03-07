<?php
// phpcs:ignore
/**
 * Woocommerce.
 *
 * @package IceCubo
 */


if (! function_exists('icecubo_woo_remove_breadcrumbs') ) {

    /**
     * Remove the breadcrumbs from the shop page.
     *
     * @return void
     */
    // phpcs:ignore
    function icecubo_woo_remove_breadcrumbs() {

        add_filter(
            'template_redirect',
            function () {
                if (is_shop()) {
                    remove_action(
                        'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0
                    );
                }
            }
        );

    }
    add_action('init', 'icecubo_woo_remove_breadcrumbs');
}
