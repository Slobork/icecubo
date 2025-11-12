<?php
// phpcs:ignore
/**
 * Title: Header with hero section. Cover background transit gradually from dark to primary color.
 * Slug: icecubo/header-hero-gradient-gradual-dark-primary
 * Categories: icecubo-headerhero
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"gradient":"darko-to-primary-linear-gradual","contentPosition":"center center","isDark":false,"metadata":{"categories":["icecubo-headerhero"],"patternName":"icecubo/header-hero-gradient-gradual-dark-primary","name":"Header with hero section. Cover background transit gradually from dark to primary color."},"align":"full","style":{"spacing":{"padding":{"bottom":"5rem","top":"var:preset|spacing|xxx-small"}},"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast"}}}},"textColor":"handle-contrast"} -->
<div class="wp-block-cover alignfull is-light has-handle-contrast-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-darko-to-primary-linear-gradual-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white-ice","overlayBackgroundColor":"darko-transit","overlayTextColor":"white-ice","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->

 <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"textColor":"highlight-2"} -->
<h1 class="wp-block-heading has-text-align-center has-highlight-2-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium)">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">A block-based WordPress theme. Use it as a starting point, just like adding ice to the glass, then pour it over to create thrilling Websites!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:media-text {"align":"","mediaType":"image","className":"has-media-on-the-right has-white-color has-text-color","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast"}}}},"textColor":"handle-contrast"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-media-on-the-right has-white-color has-text-color has-handle-contrast-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-large)"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"highlight-3"} -->
<h2 class="wp-block-heading has-highlight-3-color has-text-color">It's a Block Time!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>It's the right time to start building Websites with blocks and predefined patterns.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-dark","textColor":"handle-contrast","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|handle-contrast"}}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-handle-contrast-color has-primary-dark-background-color has-text-color has-background has-link-color wp-element-button">Start Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->