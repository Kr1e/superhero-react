<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://ikrstic.com
 * @since      1.0.0
 *
 * @package    Superhero_React
 * @subpackage Superhero_React/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Superhero_React
 * @subpackage Superhero_React/includes
 * @author     Ivan Krstic <ikrstic@bettercollective.com>
 */
class Superhero_React_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		$superheroes_page_id = get_page_by_title('Superheroes', 'OBJECT', 'page')->ID;
		wp_delete_post( $superheroes_page_id, true);
	}

}
