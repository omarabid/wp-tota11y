<?php
/*
  Plugin Name: Tota11y 
  Plugin URI: https://github.com/omarabid/wp-tota11y
  Description: A WordPress Plugin to integrate Khan Academy tota11y script 
  Author: Abid Omar
  Author URI: http://omarabid.com
  Version: 1.0.0 
  Text Domain: wp-tota11y
 */

function tota11y_enqueue_script() {
	if ( current_user_can( 'manage_options' ) ) {
		wp_enqueue_script( 'tota11y', plugins_url( '/files/js/tota11y.min.js', __FILE__ ), array(), '1.0.0', true );
	}
}

add_action( 'wp_enqueue_scripts', 'tota11y_enqueue_script' );
