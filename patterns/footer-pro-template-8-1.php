<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Footer: Two floors - transit dark background color, separator line at the top with a balloon in the middle.
 * Slug: icecubo/footer-pro-template-8-1
 * Categories: icecubo-footer
 * Block Types: core/template-part/footer
 */
if(!class_exists('IceCubo_Pro')) {
?>
    <!-- wp:pattern {"slug":"icecubo/get-pro-patterns"} /-->
<?php
} else {
    if(IceCubo_Pro::getLicense() === '') {
    ?>
        <!-- wp:pattern {"slug":"icecubo/get-pro-activate-license"} /-->
    <?php
    } else {
    ?>
        <!-- wp:pattern {"slug":"icecubo/prem-footer-template-marketing-2floors"} /-->
    <?php
    }
}
