<?php
/**
 * Text and Image pattern content.
 * Registered via Velox_Patterns::register_patterns().
 *
 * @package velox
 */

declare( strict_types=1 );
?>
<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaType":"image","verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-vertically-aligned-center">
<figure class="wp-block-media-text__media"></figure>
<div class="wp-block-media-text__content">
	<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Built for the long term', 'velox' ); ?></h2><!-- /wp:heading -->
	<!-- wp:paragraph --><p><?php esc_html_e( 'Clean architecture means you can extend the theme in any direction without fighting against the codebase.', 'velox' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn more', 'velox' ); ?></a></div><!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
</div>
<!-- /wp:media-text -->
