<?php
/**
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
 *
 * @link              https://wonkasoft.com
 * @since             1.0.0
 * @package           Wonka_Slide
 *
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// For setting up plugin at activation
register_activation_hook( __FILE__, 'wonka_slide_activator' );
function wonka_slide_activator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-activator.php';
	wonka_slide_activator::activate();
}

// For deleting all information
register_deactivation_hook( __FILE__, 'wonka_slide_deactivator' );
function wonka_slide_deactivator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wonka-slide-deactivator.php';
	wonka_slide_deactivator::deactivate();
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'inc/class-wonka-slide.php';

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

run_wonka_slide();