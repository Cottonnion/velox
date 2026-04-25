<?php
/**
 * Velox functions and definitions
 *
 * @package velox
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VELOX_VERSION', '1.0.0' );
define( 'VELOX_DIR', get_template_directory() );
define( 'VELOX_URI', get_template_directory_uri() );

require_once VELOX_DIR . '/velox-loader.php';
Velox_Loader::init();