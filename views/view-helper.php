<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @param string $filename The filename of the php view to be output. Must be in static/js folder.
 */
function include_script($filename) {
	$file = PLUGIN_NAME_DIR . 'static/js/' . $filename;
	wp_enque_script( $filename, $file );
}

/**
 * @param string $filename The filename of the css to be included. Must be in static/css folder.
 */
function include_style($filename) {
	$file = PLUGIN_NAME_DIR . 'static/js/' . $filename;
	wp_enqueue_style( $filename, $file);
}


/**
 * @param string $filename The filename of the php view to be output. Must be in views folder.
 */
function include_view($filename) {
	include(PLUGIN_NAME_DIR . 'views/' . $filename);
}

/**
 * @param string $filename
 *
 * @return string the rendered PHP
 */
function generate_view_as_string($filename) {
	ob_start();
    include_view($filename);
	return ob_get_clean();
}
