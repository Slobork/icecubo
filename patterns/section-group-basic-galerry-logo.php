<?php
// phpcs:ignore
/**
 * Title: Stack group with gallery and logo placeholder. Add as many companies as you wish, in a row.
 * Slug: icecubo/section-group-basic-galerry-logo
 * Categories: icecubo-section
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">This is a stack section with a gallery. Edit this text to represent a lable and add as many as you like logos to reperesent different companies.</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":3,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo-placeholder.png')); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo-placeholder.png')); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo-placeholder.png')); ?>" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

</div>
<!-- /wp:group -->