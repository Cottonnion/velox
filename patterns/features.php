<?php
/**
 * Title: Features
 * Slug: velox/features
 * Description: Three-column features section.
 * Categories: velox-features
 * Keywords: features, benefits, columns
 * Block Types: core/columns
 * Viewport Width: 1280
 *
 * @package velox
 */

declare( strict_types=1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Everything you need', 'velox' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Built on a solid foundation with the features that matter.', 'velox' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Fast by default', 'velox' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Lean markup and zero external dependencies mean your site loads instantly on any device.', 'velox' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Fully accessible', 'velox' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Proper heading hierarchy, keyboard navigation, and ARIA labels built in from the start.', 'velox' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'theme.json driven', 'velox' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'All design tokens live in theme.json. Reskin the entire site by editing one file.', 'velox' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
