<?php
// phpcs:ignore
/**
 * Title: Cover with gradient (Start with light background).
 * Slug: icecubo/header-cover-gradient-light
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"dimRatio":30,"minHeight":100,"gradient":"primary-to-transparent-rushly-radial","contentPosition":"center center","isDark":false,"tagName":"header","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|darko-down"}}}},"textColor":"darko-down"} -->
<div class="wp-block-cover alignfull is-light has-darko-down-color has-text-color has-link-color" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim has-background-gradient has-primary-to-transparent-rushly-radial-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|xx-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"xl"} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"is-style-icecubo-nav-mark-hovers","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}}} /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->