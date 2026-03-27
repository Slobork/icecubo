<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header With A Hero Section - Curvy Ending Background. Title, Call To Action, Image And Major Protruding Point. (Premium).
 * Slug: icecubo/header-hero-pro-3
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
        <!-- wp:pattern {"slug":"icecubo/prem-header-hero-3-content"} /-->
    <?php
    }
}
