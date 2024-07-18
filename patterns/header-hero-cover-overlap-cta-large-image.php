<?php
// phpcs:ignore
/**
 * Title: Header with hero. Call to action with large image. Overlapping cover background.
 * Slug: icecubo/header-hero-cover-overlap-cta-large-image
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"dimRatio":60,"gradient":"primary-light-transparent-sharp-stack","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"bottom":"6rem","top":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|darko-down"}}}},"textColor":"darko-down","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-darko-down-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:6rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim has-background-gradient has-primary-light-transparent-sharp-stack-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"classy-3","overlayBackgroundColor":"darko-transit","overlayTextColor":"classy-3","className":"is-style-default","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"classy-3"} -->
<h1 class="wp-block-heading has-text-align-center has-classy-3-color has-text-color">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Note: Background's Overlapping Point Depends on the Content Height. Still, the Overlapping Point Can Be Trimmed by Adjusting the Padding on the Wrapper Cover Block.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:button {"backgroundColor":"classy-3","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-classy-3-background-color has-text-color has-background has-link-color wp-element-button">Start Now!</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"classy-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|classy-1"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-classy-1-color has-text-color has-link-color wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover"} -->
<figure class="wp-block-image"><img alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover -->