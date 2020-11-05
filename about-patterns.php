<?php
/**
 * Plugin Name: About Patterns
 * Plugin URI: https://github.com/ryelle/about-patterns
 * Description: Add a demo of all possible "About Page" content displays.
 * Version: 1.0.0
 * Author: ryelle
 * Author URI: https://ryelle.codes
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace Ryelle\About_Patterns;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'init', __NAMESPACE__ . '\init' );

function init() {
	if ( \file_exists(__DIR__ . '/vendor/autoload.php') ) {
		require __DIR__ . '/vendor/autoload.php';
	}
	add_action( 'admin_menu', __NAMESPACE__ . '\add_page' );
	add_filter( 'admin_body_class', __NAMESPACE__ . '\admin_body_class' );
}

function error_message() {
	if ( \file_exists(__DIR__ . '/vendor/autoload.php') ) {
		return;
	}

	echo '<div class="notice notice-error"><p><strong>About Patterns:</strong> Run <code>composer install</code> to install the placeholder text generator</p></div>';
}
add_action( 'admin_notices', __NAMESPACE__ . '\error_message' );

function render() {
	require_once __DIR__ . '/demo.php';
}

function add_page() {
	add_menu_page(
		'About Page Patterns',
		'About Patterns',
		'edit_posts',
		'about-patterns',
		__NAMESPACE__ . '\render',
		'dashicons-wordpress'
	);
}

function admin_body_class( $classes ) {
	global $current_screen;
	if ( $current_screen->id === 'toplevel_page_about-patterns' ) {
		$classes .= ' about-php';
	}
	return $classes;
}
