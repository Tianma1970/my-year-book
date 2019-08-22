<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              remlost.eu/animals
 * @since             1.0.0
 * @package           My_Year_Book
 *
 * @wordpress-plugin
 * Plugin Name:       Year Book
 * Plugin URI:        remlost.eu/portfolio
 * Description:       A Widget which shows the Year Book of a student👨‍🎓
 * Version:           1.0.0
 * Author:            Tillmann Weimer
 * Author URI:        remlost.eu/animals
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-year-book
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
define( 'MY_YEAR_BOOK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-my-year-book-activator.php
 */
function activate_my_year_book() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-year-book-activator.php';
	My_Year_Book_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-my-year-book-deactivator.php
 */
function deactivate_my_year_book() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-year-book-deactivator.php';
	My_Year_Book_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_my_year_book' );
register_deactivation_hook( __FILE__, 'deactivate_my_year_book' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-my-year-book.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_my_year_book() {

	$plugin = new My_Year_Book();
	$plugin->run();

}
run_my_year_book();
