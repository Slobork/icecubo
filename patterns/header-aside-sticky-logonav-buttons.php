<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Sticky Header. One side - Logo/nav, Other side - buttons.
 * Slug: icecubo/header-aside-sticky-logonav-buttons
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header"},"align":"full","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"full","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-ice"}}},"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xxx-small"}}},"backgroundColor":"primary-dark","textColor":"white-ice","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-white-ice-color has-primary-dark-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xxx-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":80,"shouldSyncIcon":false} /-->

<!-- wp:navigation {"ref":33518,"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"18px","right":"18px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:4px;padding-right:18px;padding-bottom:4px;padding-left:18px">Signup</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"spacing":{"padding":{"left":"18px","right":"18px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:4px;padding-right:18px;padding-bottom:4px;padding-left:18px">Login</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->