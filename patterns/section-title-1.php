<?php
/**
 * Title: Section Title 1
 * Slug: patterns-sports/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase"}}} -->
<p class="has-text-align-center" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'What we offer', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'The best standards anywhere.', 'patterns-sports' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
