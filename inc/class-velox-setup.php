<?php
/**
 * Velox Theme Setup Manager.
 *
 * @package velox
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Velox_Setup {

	public function __construct() {
		$this->setup();
	}

	private function setup(): void {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'velox' ),
				'footer'  => esc_html__( 'Footer Menu', 'velox' ),
			)
		);
	}
}
