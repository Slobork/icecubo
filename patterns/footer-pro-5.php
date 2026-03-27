<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Footer: Cover in 4:3 format with a background image symbolizing Growing With Arrow Up (Premium).
 * Slug: icecubo/footer-pro-5
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
        <!-- wp:pattern {"slug":"icecubo/prem-footer-5-content"} /-->
    <?php
    }
}
