<?php
/**
 * Velox Loader — central bootstrapper.
 *
 * @package velox
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once VELOX_DIR . '/inc/class-velox-setup.php';
require_once VELOX_DIR . '/inc/class-velox-assets.php';
require_once VELOX_DIR . '/inc/class-velox-patterns.php';

/**
 * Class Velox_Loader
 */
final class Velox_Loader {

	public static function init(): void {
		add_action( 'after_setup_theme', array( __CLASS__, 'boot' ) );
	}

	public static function boot(): void {
		new Velox_Setup();
		new Velox_Assets();
		new Velox_Patterns();
	}
}
