<?php

/**
 * Music App
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://musicapp.local
 * @since             1.0.0
 * @package           Music_app
 *
 * @wordpress-plugin
 * Plugin Name:       Music Library
 * Plugin URI:        https://github.com/ravs333/wp-music-posts
 * Description:       This plugin sets up Music custom post type and enables various features that can be used to create a Music library or store.
 * Version:           1.0.0
 * Author:            Ravindra Singh
 * Author URI:        ravs333
 * License:           GPL-2.0+
 * License URI:       https://github.com/ravs333
 * Text Domain:       music-library
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MUSIC_LIBRARY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-music-library-activator.php
 */
function activate_music_library() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-music-library-activator.php';
	Music_Library_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-music-library-deactivator.php
 */
function deactivate_music_library() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-music-library-deactivator.php';
	Music_Library_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_music_library' );
register_deactivation_hook( __FILE__, 'deactivate_music_library' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-music-library.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_music_library() {

	$plugin = new Music_Library();
	$plugin->run();

}
run_music_library();
