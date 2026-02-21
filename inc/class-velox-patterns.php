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
		// Priority 1 — categories and patterns must exist before WP auto-registers theme pattern files.
		add_action( 'init', array( $this, 'register_pattern_categories' ), 1 );
		add_action( 'init', array( $this, 'register_patterns' ), 1 );
	}

	public function register_pattern_categories(): void {
		register_block_pattern_category(
			'velox',
			array(
				'label'       => esc_html__( 'Velox', 'velox' ),
				'description' => esc_html__( 'Patterns bundled with the Velox theme.', 'velox' ),
			)
		);
	}

	/**
	 * Register all Velox patterns directly via PHP.
	 *
	 * Bypasses WordPress file-header auto-discovery, which can silently
	 * discard patterns whose categories are not yet registered.
	 *
	 * @return void
	 */
	public function register_patterns(): void {
		$patterns = array(
			'velox/cta'          => array(
				'title' => esc_html__( 'Call to Action', 'velox' ),
				'file'  => 'cta',
			),
			'velox/hero'         => array(
				'title' => esc_html__( 'Hero', 'velox' ),
				'file'  => 'hero',
			),
			'velox/features'     => array(
				'title' => esc_html__( 'Features', 'velox' ),
				'file'  => 'features',
			),
			'velox/text-image'   => array(
				'title' => esc_html__( 'Text and Image', 'velox' ),
				'file'  => 'text-image',
			),
			'velox/testimonials' => array(
				'title' => esc_html__( 'Testimonials', 'velox' ),
				'file'  => 'testimonials',
			),
		);

		foreach ( $patterns as $slug => $args ) {
			$content = $this->get_pattern_content( $args['file'] );

			if ( '' === $content ) {
				continue;
			}

			register_block_pattern(
				$slug,
				array(
					'title'      => $args['title'],
					'categories' => array( 'velox' ),
					'content'    => $content,
				)
			);
		}
	}

	/**
	 * Capture and return the HTML output of a pattern file.
	 *
	 * @param string $slug Pattern filename without extension.
	 * @return string Block markup string.
	 */
	private function get_pattern_content( string $slug ): string {
		$file = VELOX_DIR . '/patterns/' . $slug . '.php';

		if ( ! file_exists( $file ) ) {
			return '';
		}

		ob_start();
		include $file;
		return (string) ob_get_clean();
	}
}
