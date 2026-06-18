<?php
/**
 * Title: Primary Sidebar
 * Slug: patterns-sports/primary-sidebar
 * Categories: posts
 * Block Types: core/template-part/primary-sidebar
 * Description: Display a collection of blocks for primary sidebar template part.
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:pattern {"slug":"patterns-sports/search-form"} /-->
	<!-- wp:pattern {"slug":"patterns-sports/latest-posts"} /-->
	<!-- wp:pattern {"slug":"patterns-sports/latest-comments"} /-->
</div>
<!-- /wp:group -->
