<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wonkasoft.com
 * @since             1.0.0
 * @package           Wonka_Slide
 *
 * @wordpress-plugin
 * Plugin Name:       Wonka Slide
 * Plugin URI:        https://wonkasoft.com/wonka-slide
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Wonkasoft
 * Author URI:        https://wonkasoft.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wonka-slide
 * Domain Path:       /languages
 */

<<<<<<< HEAD
// For setting up plugin at activation
register_activation_hook( __FILE__, 'wonka_slide_activator' );
function wonka_slide_activator() {
=======
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently pligin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wonka-slide-activator.php
 */
function activate_wonka_slide() {
>>>>>>> master
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-activator.php';
	Wonka_Slide_Activator::activate();
}

<<<<<<< HEAD
// For deleting all information
register_deactivation_hook( __FILE__, 'wonka_slide_deactivator' );
function wonka_slide_deactivator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-deactivator.php';
	wonka_slide_deactivator::deactivate();
}

=======
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wonka-slide-deactivator.php
 */
function deactivate_wonka_slide() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-deactivator.php';
	Wonka_Slide_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wonka_slide' );
register_deactivation_hook( __FILE__, 'deactivate_wonka_slide' );

>>>>>>> master
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
<<<<<<< HEAD
require plugin_dir_path( __FILE__ ) . 'inc/class-wonka-slide.php';
=======
require plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide.php';
>>>>>>> master

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wonka_slide() {

	$plugin = new Wonka_Slide();
	$plugin->run();

}
<<<<<<< HEAD

run_wonka_slide();
=======
run_wonka_slide();
>>>>>>> master
