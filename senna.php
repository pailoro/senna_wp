<?php
/**
 * @package   Sena_WP
 * @author    Fernando Aureliano <mail@fernandoaureliano.com>
 * @license   GPL-2.0+
 * @copyright 2014 Fernando Aureliano
 *
 * @wordpress-plugin
 * Plugin Name:       Senna WP
 * Plugin URI:        http://fernandoaureliano.com
 * Description:       This plugin implements sennajs in your wordpress theme.
 * Version:           0.0.1
 * Author:            Fernando Aureliano
 * Author URI:        http://fernandoaureliano.com
 * Text Domain:       
 * Domain Path:       /lang/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function senna() {
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/senna.js',
	);
}

add_action( 'wp_enqueue_scripts', 'senna' );


?>