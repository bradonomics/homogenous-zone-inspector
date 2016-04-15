<?php

/**
 * Customize ACF path.
 */
add_filter('acf/settings/path', 'hzi_acf_settings_path');
function hzi_acf_settings_path( $path ) {

  // update path
  $path = plugin_dir_path( dirname( __FILE__ ) ) . '/includes/advanced-custom-fields-pro/';

  // return
  return $path;

}

/**
 * Customize ACF dir.
 */
add_filter('acf/settings/dir', 'hzi_acf_settings_dir');
function hzi_acf_settings_dir( $dir ) {

  // update path
  $dir = plugin_dir_path( dirname( __FILE__ ) ) . '/includes/advanced-custom-fields-pro/';

  // return
  return $dir;

}

/**
 * Hide ACF field group menu item.
 * (uncomment once fields are setup to keep the users out)
 */
// add_filter('acf/settings/show_admin', '__return_false');

/**
 * Include Advanced Custom Fields.
 */
include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/advanced-custom-fields-pro/acf.php' );


