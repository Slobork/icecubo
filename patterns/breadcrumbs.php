<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Breadcrumbs conditional pattern.
 * Slug: icecubo/breadcrumbs
 * Categories: hidden
 */

$breadcrumbs = get_option('icecubo_breadcrumbs_enable');
if (!empty($breadcrumbs)) {
    ?>
    <!-- wp:breadcrumbs /-->
    <?php
}
