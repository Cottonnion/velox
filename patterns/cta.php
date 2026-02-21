<?php
/**
 * Title: Call to Action
 * Slug: velox/cta
 * Description: Centered call-to-action section.
 * Categories: velox-cta
 * Keywords: call to action, cta, button
 * Block Types: core/group
 * Viewport Width: 1280
 *
 * @package velox
 */

declare( strict_types=1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-accent-background-color has-text-color has-background">

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2x-large"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--2x-large)"><?php esc_html_e( 'Ready to get started?', 'velox' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Join thousands of creators who build faster with Velox.', 'velox' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get started for free', 'velox' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
