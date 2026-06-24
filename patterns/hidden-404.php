<?php
/**
 * Title: 404
 * Slug: patterns-sports/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

<!-- wp:cover {"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">


<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-color has-text-color has-link-color"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php echo esc_html__( 'Ooops!', 'patterns-sports' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size"><?php echo esc_html__( 'This page could not be found.', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size"><?php echo esc_html__( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html__( 'Back To Home', 'patterns-sports' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->


</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"fontSize":"19rem","letterSpacing":"-12px","fontStyle":"italic","fontWeight":"800","lineHeight":"0.7"}},"textColor":"tertiary"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-tertiary-color has-text-color" style="font-size:19rem;font-style:italic;font-weight:800;letter-spacing:-12px;line-height:0.7"><?php echo esc_html__( '404', 'patterns-sports' ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->


</div></div>
<!-- /wp:cover -->

</main>
<!-- /wp:group -->
