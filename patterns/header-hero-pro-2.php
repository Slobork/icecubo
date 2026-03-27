<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header With A Hero Section - Title And Features With A Call To Action Along The Image. (Premium).
 * Slug: icecubo/header-hero-pro-2
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
        <!-- wp:pattern {"slug":"icecubo/prem-header-hero-2-content"} /-->
    <?php
    }
}
