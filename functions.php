<?php

/**
 * Check updater
 */
require plugin_dir_path( __FILE__ ) . 'bonn-update-checker/plugin-update-checker.php';

use Bonn\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/bonnbonito/phlash-govcentre/',
	__FILE__,
	'phlash-govcentre'
);

$myUpdateChecker->getVcsApi()->enableReleaseAssets();
// Set the branch that contains the stable release.
$myUpdateChecker->setBranch( 'master' );

/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css', array(), 100 );
}

// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' ); // Remove the // from the beginning of this line if you want the child theme style.css file to load on the front end of your site.

/**
 * Add custom functions here
 */
