<?php
// phpcs:ignore
/**
 * Title: Comments.
 * Slug: icecubo/comments
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:comments -->
<div class="wp-block-comments">

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group comments-group">

    <!-- wp:comments-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} /-->
    <!-- wp:comment-template -->
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"65px"} -->
    <div class="wp-block-column" style="flex-basis:65px"><!-- wp:avatar {"size":80,"style":{"border":{"radius":"var(--wp--custom--radius-small)"}}} /--></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

    <!-- wp:group {"layout":{"type":"flex"}} -->
    <div class="wp-block-group"><!-- wp:comment-date {"fontSize":"small"} /-->

    <!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
    <!-- /wp:group -->

    <!-- wp:comment-content /-->

    <!-- wp:comment-reply-link {"className":"is-style-icecubo-comment-reply-button-oval","fontSize":"small"} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- /wp:comment-template -->

    <!-- wp:comments-pagination -->
    <!-- wp:comments-pagination-previous /-->

    <!-- wp:comments-pagination-numbers /-->

    <!-- wp:comments-pagination-next /-->
    <!-- /wp:comments-pagination -->

    <!-- wp:post-comments-form /-->
    
</div>
<!-- /wp:group -->

</div>
<!-- /wp:comments -->