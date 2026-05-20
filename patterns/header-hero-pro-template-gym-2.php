<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Template Gym (2): Header With A Hero Section (Premium).
 * Slug: icecubo/header-hero-pro-template-gym-2
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
        <!-- wp:pattern {"slug":"icecubo/prem-header-template-gym-2"} /-->
    <?php
    }
}
