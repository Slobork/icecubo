<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header: One side Logo/nav, Other side Social icons.
 * Slug: icecubo/header-aside-logonav-social
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-ice"}}},"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xxx-small"}}},"backgroundColor":"primary-dark","textColor":"white-ice","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-white-ice-color has-primary-dark-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xxx-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":60,"shouldSyncIcon":false} /-->

<!-- wp:navigation {"overlayBackgroundColor":"primary-dark","overlayTextColor":"white-ice","className":"is-style-icecubo-nav-hovers-standard ice-hover-transit-from-left ice-sub-shade ice-submenu-anim-pushLeft ice-modal-button-round","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:social-links {"className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->