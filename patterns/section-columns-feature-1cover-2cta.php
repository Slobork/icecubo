<?php
// phpcs:ignore
/**
 * Title: Columns - Cover image on the left side, call to action on the other side.
 * Slug: icecubo/section-columns-feature-1cover-2cta
 * Categories: icecubo-section
 */
?>
<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-shaker.jpeg","dimRatio":0,"minHeight":600,"minHeightUnit":"px","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:600px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-shaker.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top">
<!-- wp:pattern {"slug":"icecubo/cta-common"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->