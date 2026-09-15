<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Header With a Hero Section. Background Image As A Cover (Light Image, Dark Text Set). Call To Action On The Left.
 * Slug: icecubo/header-hero-cover-full-img-light-cta-left
 * Categories: icecubo-headerhero
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png","alt":"IceCubo Theme Placeholder Image","dimRatio":40,"overlayColor":"tint-very-light-2","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"metadata":{"categories":["icecubo-headerhero"],"patternName":"icecubo/header-hero-cover-full-img-light-cta-left","name":"Header With a Hero Section. Background Image As A Cover (Light Image, Dark Text Set). Call To Action On The Left."},"align":"full","className":"is-style-default","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"top":"var:preset|spacing|xxx-small"}}},"textColor":"primary-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light is-style-default has-primary-dark-color has-text-color" style="padding-top:var(--wp--preset--spacing--xxx-small);min-height:80vh"><img class="wp-block-cover__image-background" alt="IceCubo Theme Placeholder Image" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-tint-very-light-2-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:pattern {"slug":"icecubo/header-basic-wide-construct-menu-primarydark"} /-->
<!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center left","isDark":false,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"textColor":"primary-dark","layout":{"type":"constrained","contentSize":"700px","wideSize":"1100px"}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-center-left has-primary-dark-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0;min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default"><!-- wp:heading {"level":1,"className":"is-style-icecubo-accent-text-small-1","style":{"typography":{"textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading is-style-icecubo-accent-text-small-1" style="text-transform:uppercase">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-default","style":{"typography":{"textTransform":"capitalize","letterSpacing":"2px"}},"fontSize":"xl"} -->
<p class="is-style-default has-xl-font-size" style="letter-spacing:2px;text-transform:capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-dark","textColor":"handle-contrast","className":"is-style-icecubo-highlight-up-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast"}}}}} -->
<div class="wp-block-button is-style-icecubo-highlight-up-button"><a class="wp-block-button__link has-handle-contrast-color has-primary-dark-background-color has-text-color has-background has-link-color wp-element-button">Start Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div></div>
<!-- /wp:cover -->