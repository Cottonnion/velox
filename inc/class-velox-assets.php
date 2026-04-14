<?php
/**
 * Velox Assets Manager.
 *
 * @package velox
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Velox_Assets {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_styles' ) );
		add_action( 'after_setup_theme', array( $this, 'enqueue_editor_styles' ) );
		add_action( 'init', array( $this, 'register_block_styles' ) );
	}

	public function enqueue_frontend_styles(): void {
		wp_enqueue_style(
			'velox-style',
			get_stylesheet_uri(),
			array(),
			VELOX_VERSION
		);
	}

	public function enqueue_editor_styles(): void {
		add_editor_style( VELOX_URI . '/assets/css/editor-style.css' );
	}

	public function register_block_styles(): void {
		// Add register_block_style() calls here as your design system grows.
	}
}