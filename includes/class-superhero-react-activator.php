<?php

/**
 * Fired during plugin activation
 *
 * @link       https://ikrstic.com
 * @since      1.0.0
 *
 * @package    Superhero_React
 * @subpackage Superhero_React/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Superhero_React
 * @subpackage Superhero_React/includes
 * @author     Ivan Krstic <ikrstic@bettercollective.com>
 */
class Superhero_React_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$superhero_page = array(
			'post_title'    => 'Superheroes',
			'post_content'  => '<div id="superhero-container"></div>',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'comment_status' => 'close',
			'ping_status'    => 'close',
		);
		wp_insert_post( $superhero_page );
	}

}
