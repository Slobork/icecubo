<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header: One side Logo/nav, Other side Login link. Transit background.
 * Slug: icecubo/header-aside-logonav-login-transit-bg
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-ice"}}},"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xxx-small"}}},"textColor":"white-ice","gradient":"darko-to-primary-linear-gradual-aside","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-white-ice-color has-darko-to-primary-linear-gradual-aside-gradient-background has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xxx-small)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:pattern {"slug":"icecubo/header-basic-wide-construct-menu-dark"} /-->

<!-- wp:paragraph {"className":"is-style-icecubo-accent-annotate"} -->
<p class="is-style-icecubo-accent-annotate"><a href="#">Login</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->