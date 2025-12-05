<?php
// phpcs:ignore
/**
 * Title: Cover - Tall Image On One Side, Call To Action On the Other.
 * Slug: icecubo/section-cover-tall-img-cta-inside
 * Categories: icecubo-section
 */
?>
<!-- wp:cover {"overlayColor":"primary-dark","isUserOverlayColor":true,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-primary-dark-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"aspectRatio":"9/16","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-shaker.jpeg" alt="IceCubo Placeholder Image" style="aspect-ratio:9/16;object-fit:cover"/><figcaption class="wp-element-caption">Orange Shaker</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:pattern {"slug":"icecubo/cta-common"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->