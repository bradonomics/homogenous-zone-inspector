<?php

/**
 * Plugin Name:       Homogenous Zone Inspector
 * Plugin URI:        https://github.com/bradonomics/homogenous-zone-inspector
 * Description:       Defines custom post types and allows them to be updated via the WP API.
 * Version:           0.0.1
 * Author:            Brad West
 * Author URI:        http://bradonomics.com
 * License:           GPL-2.0
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       homogenous-zone-inspector
 * Domain Path:       /languages
 */

//* If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//* Custom Post Types
require plugin_dir_path( __FILE__ ) . 'includes/homogenous-zone-inspector-post-types.php';

//* ACF Path Update and Display Options
require plugin_dir_path( __FILE__ ) . 'includes/homogenous-zone-inspector-acf.php';

//* Include WP REST API Plugin
require plugin_dir_path( __FILE__ ) . 'includes/rest-api/plugin.php';

//* Include Advanced Custom Fields to API Plugin
require plugin_dir_path( __FILE__ ) . 'includes/acf-to-rest-api/class-acf-to-rest-api.php';

//* Include Gravity Forms Plugin
require plugin_dir_path( __FILE__ ) . 'includes/gravityforms/gravityforms.php';

//* Include Gravity Forms to Custom Post Types Plugin
require plugin_dir_path( __FILE__ ) . 'includes/gravity-forms-custom-post-types/gfcptaddon.php';
