<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header With a Hero Section. Full Background Image As A Cover (Dark Image, White Text Set). Call To Action Centered At The Bottom.
 * Slug: icecubo/header-hero-cover-full-img-dark-cta-bottom
 * Categories: icecubo-headerhero
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"tagName":"header","url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg","alt":"IceCubo Theme Placeholder Image","dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","sizeSlug":"large","metadata":{"categories":["icecubo-headerhero"],"patternName":"icecubo/header-hero-cover-full-img-dark-cta-bottom","name":"Header"},"align":"full","className":"is-style-default","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"bottom":"var:preset|spacing|large"}}},"textColor":"white","layout":{"type":"constrained"}} -->
<header class="wp-block-cover alignfull is-style-default has-white-color has-text-color" style="padding-bottom:var(--wp--preset--spacing--large);min-height:80vh"><img class="wp-block-cover__image-background size-large" alt="IceCubo Theme Placeholder Image" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayBackgroundColor":"primary-dark","overlayTextColor":"white","className":"is-style-icecubo-nav-hovers-standard ice-sub-shade ice-submenu-anim-pushUp ice-modal-button-round","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"constrained","contentSize":"900px","wideSize":"1200px"}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0;min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default"><!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-icecubo-accent-text-small-1"} -->
<h1 class="wp-block-heading has-text-align-center is-style-icecubo-accent-text-small-1">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-default","style":{"typography":{"letterSpacing":"5px","textTransform":"capitalize"}},"fontSize":"large"} -->
<p class="has-text-align-center is-style-default has-large-font-size" style="letter-spacing:5px;text-transform:capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-dark","textColor":"handle-contrast","className":"is-style-icecubo-highlight-up-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast"}}}}} -->
<div class="wp-block-button is-style-icecubo-highlight-up-button"><a class="wp-block-button__link has-handle-contrast-color has-primary-dark-background-color has-text-color has-background has-link-color wp-element-button">Start Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div></header>
<!-- /wp:cover -->