<?php
/**
 * Velox Patterns Manager.
 *
 * @package velox
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Velox_Patterns {

	public function __construct() {
		add_action( 'init', array( $this, 'register_pattern_categories' ) );
	}

	public function register_pattern_categories(): void {
		register_block_pattern_category( 'velox-hero',         array( 'label' => esc_html__( 'Hero', 'velox' ) ) );
		register_block_pattern_category( 'velox-features',     array( 'label' => esc_html__( 'Features', 'velox' ) ) );
		register_block_pattern_category( 'velox-text-image',   array( 'label' => esc_html__( 'Text & Image', 'velox' ) ) );
		register_block_pattern_category( 'velox-cta',          array( 'label' => esc_html__( 'Call to Action', 'velox' ) ) );
		register_block_pattern_category( 'velox-testimonials', array( 'label' => esc_html__( 'Testimonials', 'velox' ) ) );
	}
}
