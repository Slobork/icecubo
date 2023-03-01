<?php
// phpcs:ignore
/**
 * Woocommerce.
 *
 * @package IceCubo
 */


/**
 * Remove the breadcrumbs from the shop page.
 */
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
