<?php

/**
 * The plugin bootstrap file

 *
 * @link              https://ikrstic.com
 * @since             1.0.0
 * @package           Superhero_React
 *
 * @wordpress-plugin
 * Plugin Name:       Superhero react
 * Plugin URI:        https://github.com/Kr1e/superhero-react
 * Description:       This plugin displays superheroes from the https://superheroapi.com/ API.
 * Version:           1.0.0
 * Author:            Ivan Krstic
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       superhero-react
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'SUPERHERO_REACT_VERSION', '1.0.0' );
define( 'SUPERHERO_API_URL', 'https://superheroapi.com/api/10214013263885406');

/**
 * The code that runs during plugin activation - includes/class-superhero-react-activator.php
 */
function activate_superhero_react() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-superhero-react-activator.php';
	Superhero_React_Activator::activate();
}

/**
 * The code that runs during plugin deactivation - includes/class-superhero-react-deactivator.php
 */
function deactivate_superhero_react() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-superhero-react-deactivator.php';
	Superhero_React_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_superhero_react' );
register_deactivation_hook( __FILE__, 'deactivate_superhero_react' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-superhero-react.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_superhero_react() {

	$plugin = new Superhero_React();
	$plugin->run();

}
run_superhero_react();
