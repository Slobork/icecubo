<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header With A Hero Section - Title And List Features With A Call To Action Along The Image.
 * Slug: icecubo/header-hero-cover-in-cover-glow-cta-on-left
 * Categories: icecubo-headerhero
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"tagName":"header","overlayColor":"primary-dark","isUserOverlayColor":true,"minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","metadata":{"categories":["icecubo-headerhero"],"patternName":"icecubo/prem-header-2","name":"Header"},"align":"full","style":{"spacing":{"padding":{"bottom":"8rem","top":"var:preset|spacing|xxx-small"}}}} -->
<header class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:8rem;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-dark-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-light"}}}},"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white-ice","overlayBackgroundColor":"darko-transit","overlayTextColor":"white-ice","className":"is-style-icecubo-nav-hovers-standard ice-sub-shade ice-submenu-anim-pushLeft ice-modal-button-square","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"isUserOverlayColor":true,"gradient":"primary-to-transparent-radial-66-break","align":"wide","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-to-transparent-radial-66-break-gradient-background"></span><div class="wp-block-cover__inner-container">
<!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":48,"className":"has-media-on-the-right has-white-color has-text-color is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|xxx-small","left":"0"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile has-media-on-the-right has-white-color has-text-color is-style-default" style="margin-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--xxx-small);padding-left:0;grid-template-columns:48% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo Theme Placeholder Image"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"3px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"wp-block-heading is-style-icecubo-accent-text-small-2 has-xxl-font-size","style":{"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|medium"}},"typography":{"textTransform":"capitalize"}},"textColor":"highlight-3"} -->
<h1 class="wp-block-heading is-style-icecubo-accent-text-small-2 has-xxl-font-size has-highlight-3-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;text-transform:capitalize">IceCubo Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-icecubo-check-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<ul style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)" class="wp-block-list is-style-icecubo-check-list"><!-- wp:list-item -->
<li>Lorem ipsum dolor sit amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Consectetur adipiscing elit</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sed do eiusmod tempor</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white-ice","textColor":"darko","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|darko"}}},"typography":{"letterSpacing":"1px"},"border":{"width":"4px"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-darko-color has-white-ice-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:4px;letter-spacing:1px">Start Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text -->
</div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div></header>
<!-- /wp:cover -->