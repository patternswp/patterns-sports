<?php
/**
 * Title: Footer
 * Slug: patterns-sports/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Sports
 * @subpackage Patterns_Sports/patterns
 * @since      1.0.0
 */

?>
<!-- wp:pattern {"slug":"patterns-sports/featured-section-10"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"},"metadata":{"name":"bottom footer"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png" style="width:auto;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"lineHeight":"1.1","textTransform":"uppercase","fontSize":"20px"},"layout":{"selfStretch":"fixed","flexSize":"100px"}},"textColor":"default"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Social icons"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"default","fontSize":"large"} -->
<h3 class="wp-block-heading has-default-color has-text-color has-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Pattern Sports is more than a place where high performers come to be their best.', 'patterns-sports' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-tertiary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Working Hours', 'patterns-sports' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"default"} -->
<p class="has-default-color has-text-color"><?php esc_html_e( 'Mon - Fri : 07:00 - 22:00', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"default"} -->
<p class="has-default-color has-text-color"><?php esc_html_e( 'Sat - Sun : 07:00 - 22:00', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-tertiary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'We are here', 'patterns-sports' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-sports' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-tertiary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Call us', 'patterns-sports' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} -->
<p class="pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'tel:6295550129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-sports' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|accent"}}}}}} -->
<p class="pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'tel:6295550129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-sports' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->


<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"#a6a6a65e","style":"solid","width":"1px"},"right":{"style":"none","width":"0px"},"bottom":{"style":"none","width":"0px"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:#a6a6a65e;border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

<!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"x-small","layout":{"type":"flex","orientation":"horizontal"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-sports' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-sports' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'patterns-sports' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'patterns-sports' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

<!-- wp:pattern {"slug":"patterns-sports/copyright"} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-sports/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->
