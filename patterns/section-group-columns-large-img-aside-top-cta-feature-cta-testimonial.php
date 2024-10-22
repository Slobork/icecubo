<?php
// phpcs:ignore
/**
 * Title: Present a features in group. Columns with large image aside. CTA on the top and testimonial on the other side.
 * Slug: icecubo/section-group-columns-large-img-aside-top-cta-feature-cta-testimonial
 * Categories: icecubo-section
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","className":"is-style-default","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg","dimRatio":0,"minHeight":830,"minHeightUnit":"px","isDark":false,"style":{"color":{"duotone":"var:preset|duotone|ice-cubo-iceish"},"border":{"radius":"20px","width":"10px"}},"borderColor":"tint-6","className":"is-style-default"} -->
<div class="wp-block-cover is-light is-style-default has-border-color has-tint-6-border-color" style="border-width:10px;border-radius:20px;min-height:830px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-orange-straw.jpeg')); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div> 
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"var:preset|spacing|xx-small","right":"var:preset|spacing|xx-small"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"backgroundColor":"primaryish-light","textColor":"primary-dark","className":"is-style-icecubo-tearbox-left-p","fontSize":"small"} -->
<p class="is-style-icecubo-tearbox-left-p has-primary-dark-color has-primaryish-light-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:5px;padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:5px;padding-left:var(--wp--preset--spacing--xx-small);font-style:normal;font-weight:700">Built with IceCubo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-style-icecubo-mix-colors-glow"} -->
<h2 class="wp-block-heading is-style-icecubo-mix-colors-glow">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Viverra justo nec ultrices dui sapien. Bibendum ut tristique et egestas quis. Nulla posuere sollicitudin aliquam ultrices. Consequat id porta nibh venenatis. Vitae purus faucibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primaryish","textColor":"darko","style":{"elements":{"link":{"color":{"text":"var:preset|color|darko"}}}},"className":"is-style-icecubo-highlight-up-button"} -->
<div class="wp-block-button is-style-icecubo-highlight-up-button"><a class="wp-block-button__link has-darko-color has-primaryish-background-color has-text-color has-background has-link-color wp-element-button">Get Started Today </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"tint-6","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-tint-6-color has-alpha-channel-opacity has-tint-6-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"width":"6px"}},"borderColor":"tint-6","className":"is-style-rounded"} -->
<figure class="wp-block-image has-custom-border is-style-rounded"><img alt="" class="has-border-color has-tint-6-border-color" style="border-width:6px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:quote {"align":"right","className":"is-style-plain"} -->
<blockquote class="wp-block-quote has-text-align-right is-style-plain"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Cursus in hac habitasse platea dictumst quisque. Senectus et netus et malesuada fames ac turpis.</p>
<!-- /wp:paragraph --><cite>Jane Doe, JDinc</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->