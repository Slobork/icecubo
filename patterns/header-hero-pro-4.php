<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header With A Hero Section - Curvy Background With Ellipse At The Bottom. Title, Call To Action, Image. (Premium).
 * Slug: icecubo/header-hero-pro-4
 * Categories: icecubo-headerhero
 * Block Types: core/template-part/header
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
        <!-- wp:pattern {"slug":"icecubo/prem-header-hero-4-content"} /-->
    <?php
    }
}
