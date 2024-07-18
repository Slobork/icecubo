<?php
// phpcs:ignore
/**
 * Title: Cover - Overlapping section with opacity and backgroud image applied.
 * Slug: icecubo/section-cover-overlap-bg-img
 * Categories: icecubo-section
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png","dimRatio":70,"focalPoint":{"x":0.5,"y":0.5},"minHeight":430,"minHeightUnit":"px","gradient":"primary-transparent-sharp-stack","align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|xxx-large","bottom":"3rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:3rem;min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-transparent-sharp-stack-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container">
    
<!-- wp:group {"lock":{"remove":true,"move":true},"style":{"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"xl"} -->
<p class="has-text-align-center has-xl-font-size">Replace the Cover Background Image. Tip: Use the transparent (PNG) image.</p>
<!-- /wp:paragraph -->
<!-- wp:pattern {"slug":"icecubo/numbers-basic-bg"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"remove":true,"move":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"minHeight":100,"gradient":"white-to-primary-radial-gradual","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"textColor":"primary-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide has-primary-dark-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large);min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-white-to-primary-radial-gradual-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0">Note: Background's Overlapping Point Depends on the Content Height. Still, the Overlapping Point Can Be Trimmed by Adjusting the Padding on the Wrapper Cover Block.</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->