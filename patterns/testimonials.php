<?php
/**
 * Title: Testimonials
 * Slug: velox/testimonials
 * Description: Three-column testimonials section.
 * Categories: velox-testimonials
 * Keywords: testimonials, quotes, reviews
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
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What people are saying', 'velox' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"4px"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} --><p style="font-style:italic"><?php esc_html_e( '"Velox gave us a clean foundation to build on. We shipped our redesign in half the time we expected."', 'velox' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} --><p style="font-weight:600"><?php esc_html_e( '— Alex Johnson, Product Designer', 'velox' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"4px"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} --><p style="font-style:italic"><?php esc_html_e( '"The theme.json-first approach is exactly what we needed. Design tokens in one place."', 'velox' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} --><p style="font-weight:600"><?php esc_html_e( '— Maria Garcia, Front-end Developer', 'velox' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"4px"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} --><p style="font-style:italic"><?php esc_html_e( '"Swapped the entire colour palette of our client\u2019s site in under five minutes. Velox is that good."', 'velox' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} --><p style="font-weight:600"><?php esc_html_e( '— Sam Patel, WordPress Consultant', 'velox' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
