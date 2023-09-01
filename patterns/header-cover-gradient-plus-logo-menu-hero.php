<?php
// phpcs:ignore
/**
 * Title: Cover with gradient with menu and hero sections.
 * Slug: icecubo/header-cover-gradient-plus-logo-menu-hero
 * Categories: icecubo-header
 */ 
?>
<!-- wp:cover {"gradient":"darko-to-primary-linear-gradual","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"bottom":"5rem"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-bottom:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-darko-to-primary-linear-gradual-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-light"}}}},"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white-ice","overlayBackgroundColor":"darko-transit","overlayTextColor":"white-ice","className":"is-style-icecubo-nav-mark-hovers","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1.25rem"} -->
<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
 
<!-- wp:heading {"textAlign":"center","level":1,"textColor":"highlight-2"} -->
<h1 class="wp-block-heading has-text-align-center has-highlight-2-color has-text-color">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"large"} -->
<p class="has-text-align-center has-white-color has-text-color has-large-font-size">A block-based WordPress theme. Use it as a starting point, just like adding ice to the glass, then pour it over to create thrilling Websites!</p>
<!-- /wp:paragraph -->

<!-- wp:media-text {"align":"","mediaType":"image","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large"}}},"className":"has-media-on-the-right has-white-color has-text-color"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-media-on-the-right has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--xxx-large)"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"highlight-3"} -->
<h2 class="wp-block-heading has-highlight-3-color has-text-color">It's a Block Time!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>It's the right time to start building Websites with blocks and predefined patterns.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Start Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->