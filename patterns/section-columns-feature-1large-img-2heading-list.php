<?php
// phpcs:ignore
/**
 * Title: Columns - Large image along the heading, paragraph and list items.
 * Slug: icecubo/section-columns-feature-1large-img-2heading-list
 * Categories: icecubo-section
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-shaker.jpeg" alt="" style="border-radius:10px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet nisl suscipit adipiscing.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-icecubo-check-list"} -->
<ul class="is-style-icecubo-check-list"><!-- wp:list-item -->
<li>Lorem ipsum dolor sit amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li> consectetur adipiscing elit</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>sed do eiusmod tempor incididunt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ut labore et dolore magna aliquaDolor morbi non arcu risus quis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fringilla urna porttitor rhoncus dolor purus non enim praesent elementum</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Enim diam vulputate ut pharetra</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->