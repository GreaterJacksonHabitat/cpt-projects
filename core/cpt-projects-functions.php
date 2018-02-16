<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	cpt_projects
 * @subpackage cpt_projects/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		cpt_projects
 */
function CPTPROJECTS() {
	return cpt_projects::instance();
}