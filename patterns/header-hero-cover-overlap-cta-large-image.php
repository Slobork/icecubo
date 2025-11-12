<?php
// phpcs:ignore
/**
 * Title: Header with hero. Call to action with large image. Overlapping cover background.
 * Slug: icecubo/header-hero-cover-overlap-cta-large-image
 * Categories: icecubo-headerhero
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"dimRatio":20,"gradient":"primary-light-transparent-sharp-stack","contentPosition":"center center","isDark":false,"metadata":{"categories":["icecubo-headerhero"],"patternName":"icecubo/header-hero-cover-overlap-cta-large-image","name":"Header with hero. Call to action with large image. Overlapping cover background."},"align":"full","style":{"spacing":{"padding":{"bottom":"6rem","top":"var:preset|spacing|xxx-small"}},"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast-2"}},"heading":{"color":{"text":"var:preset|color|classy-3"}}}},"textColor":"handle-contrast-2","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-handle-contrast-2-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:6rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim has-background-gradient has-primary-light-transparent-sharp-stack-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"classy-3","overlayBackgroundColor":"darko-transit","overlayTextColor":"classy-3","className":"is-style-default","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--medium)">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Note: Background's Overlapping Point Depends on the Content Height. Still, the Overlapping Point Can Be Trimmed by Adjusting the Padding on the Wrapper Cover Block.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:button {"backgroundColor":"classy-3","textColor":"handle-contrast-3","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast-3"}}},"border":{"width":"4px"}},"borderColor":"handle-contrast-3"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-handle-contrast-3-color has-classy-3-background-color has-text-color has-background has-link-color has-border-color has-handle-contrast-3-border-color wp-element-button" style="border-width:4px">Start Now!</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"classy-3","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|classy-3"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-classy-3-color has-text-color has-link-color wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"width":"900px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image" style="aspect-ratio:4/3;object-fit:cover;width:900px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover -->