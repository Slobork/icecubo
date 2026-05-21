<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Template Marketing Suit (1): Header With A Hero Section (Premium).
 * Slug: icecubo/header-hero-pro-template-marketing-suit-1
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
        <!-- wp:pattern {"slug":"icecubo/prem-header-template-marketing-suit-1"} /-->
    <?php
    }
}
