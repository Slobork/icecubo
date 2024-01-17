<?php
// phpcs:ignore
/**
 * Title: Header with hero. Call to action after the large image. Overlapping cover background.
 * Slug: icecubo/header-hero-cover-overlap-cta-large-image
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"dimRatio":60,"gradient":"primary-light-transparent-sharp-stack","contentPosition":"center center","tagName":"header","align":"full","style":{"spacing":{"padding":{"bottom":"5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|darko-down"}}}},"textColor":"darko-down","layout":{"type":"constrained"}} -->
<header class="wp-block-cover alignfull has-darko-down-color has-text-color has-link-color" style="padding-bottom:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim has-background-gradient has-primary-light-transparent-sharp-stack-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
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
<p class="has-text-align-center">Note: Overlapping Point Depends on the Content Height. Still, the Overlapping Point Can Be Trimmed by Adjusting the Padding on the Wrapper Cover Block.</p>
<!-- /wp:paragraph -->

<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"classy-3","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-classy-3-background-color has-text-color has-background has-link-color wp-element-button">Start Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></header>
<!-- /wp:cover -->