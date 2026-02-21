<?php
/**
 * Hero pattern content.
 * Registered via Velox_Patterns::register_patterns().
 *
 * @package velox
 */

declare( strict_types=1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background">

	<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|font-size|3x-large"}}} -->
	<h1 class="wp-block-heading"><?php esc_html_e( 'Create something beautiful.', 'velox' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<p style="margin-top:var(--wp--preset--spacing--30);font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'A minimal, powerful foundation for building any kind of website. Designed to get out of your way and let the content speak.', 'velox' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get started', 'velox' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn more', 'velox' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
