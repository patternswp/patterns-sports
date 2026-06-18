<?php
/**
 * Title: Scroll To Top Button
 * Slug: patterns-sports/scroll-to-top-button
 * Categories: buttons
 * Block Types: core/template-part/footer
 * Description: Display a button to scroll to the top of the page.
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:buttons -->
<div class="wp-block-buttons">    
<!-- wp:button {"className":"is-style-scroll-to-top","style":{"border":{"radius":"50px"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}},"fontSize":"medium"} -->
<div class="wp-block-button is-style-scroll-to-top"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:50px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php esc_html_e( 'Scroll To Top', 'patterns-sports' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
