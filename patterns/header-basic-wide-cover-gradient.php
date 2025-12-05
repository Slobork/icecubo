<?php
// phpcs:ignore
/**
 * Title: Spread elements: Logo - nav. Transit background from dark to primary color.
 * Slug: icecubo/header-basic-wide-cover-gradient
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?> 
<!-- wp:cover {"minHeight":100,"gradient":"darko-to-primary-linear-gradual","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xx-small);min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-darko-to-primary-linear-gradual-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-light"}}}},"fontSize":"xl"} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white-ice","overlayBackgroundColor":"darko-transit","overlayTextColor":"white-ice","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->