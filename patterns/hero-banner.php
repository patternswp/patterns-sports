<?php
/**
 * Title: Hero Banner
 * Slug: patterns-sports/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":50,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.38,"y":0.24},"minHeight":751,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:751px"><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" style="object-position:38% 24%" data-object-fit="cover" data-object-position="38% 24%"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"patterns-sports/hero-banner-content"} /-->

</div></div>
<!-- /wp:cover -->
