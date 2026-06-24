<?php
/**
 * Title: Copyright
 * Slug: patterns-sports/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"blockGap":"5px"}},"textColor":"tertiary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-tertiary-color has-text-color has-link-color has-x-small-font-size">
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"patterns-sports/copyright","args":{"key":"copyright"}}}},"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-sports' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '. All Rights Reserved', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->


